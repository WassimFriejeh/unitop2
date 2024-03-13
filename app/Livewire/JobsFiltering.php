<?php

namespace App\Livewire;

use App\GeneratedModels\CountriesCitiesModel;
use App\GeneratedModels\CountriesModel;
use App\Models\JobsOpeningsModel;
use Livewire\Component;
use Livewire\WithPagination;

class JobsFiltering extends Component
{
    use WithPagination;
    public $countryOption = 'allCountries';
    public $search = '';
    public $sortBy = 'created_at';
    public $sortDirection = 'ASC';

    public function setSortBy($sortType)
    {
        if ($this->sortBy == $sortType) {
            $this->sortDirection = ($this->sortDirection == 'ASC') ? 'DESC' : 'ASC';
        } else {
            $this->sortDirection = 'ASC';
        }

        $this->sortBy = $sortType;
    }
    public function render()
    {
        $countryOption = $this->countryOption;
        $search = $this->search;

        $countries = CountriesModel::query()
            ->where('cancelled', 0)
            ->get();

        $cities = CountriesCitiesModel::query()
            ->where('cancelled', 0)
            ->get();

        $jobs = JobsOpeningsModel::query()
            ->where('cancelled', 0)
            ->with('city', 'country')
            ->when($countryOption != 'allCountries', function ($query) use ($countryOption) {
                $query->where('country_id', $countryOption);
            })
            ->when($search != '', function ($query) use ($search) {
                $query->where('label', 'like', "%{$search}%");
            })
            ->orderBy($this->sortBy, $this->sortDirection)->paginate(16);

        return view('livewire.jobs-filtering', [
            'jobs' => $jobs,
            'countries' => $countries,
        ]);
    }
    public function updatedSearch()
    {
        // dd($this->search);
        $this->gotoPage(1);
    }
    public function updatedSortBy()
    {
        $this->gotoPage(1);
    }
    public function updatedCountryOption()
    {
        $this->gotoPage(1);
    }
}
