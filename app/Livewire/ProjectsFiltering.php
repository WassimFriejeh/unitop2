<?php

namespace App\Livewire;

use App\GeneratedModels\ProjectsCategoriesModel;
use App\GeneratedModels\ProjectsModel;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectsFiltering extends Component
{
    use WithPagination;
    public $type = 'marine services';
    public $categoryOption = 'all';
    public function handleType($type)
    {
        $this->type = $type;
        $this->categoryOption = 'all';
        $this->gotoPage(1);
    }
    public function render()
    {

        $categories = ProjectsCategoriesModel::query()
            ->where('cancelled', 0)
            ->orderBy('orders', 'ASC')
            ->get();

        if ($this->categoryOption == 'all') {
            $projects = ProjectsModel::query()
                ->where('cancelled', 0)
                ->where('type', $this->type)
                ->orderBy('orders', 'ASC')
                ->paginate(4);
        } else {
            $projects = ProjectsModel::query()
                ->where('cancelled', 0)
                ->where('type', $this->type)
                ->where('category_id', $this->categoryOption)
                ->orderBy('orders', 'ASC')
                ->paginate(4);
        }


        return view('livewire.projects-filtering', compact('categories', 'projects'));
    }
    public function updatedCategoryOption()
    {
        $this->gotoPage(1);
    }
}
