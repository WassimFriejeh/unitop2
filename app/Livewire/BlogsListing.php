<?php

namespace App\Livewire;

use App\Models\BlogsModel;
use App\GeneratedModels\CategoriesModel;
use Livewire\Component;
use Livewire\WithPagination;

class BlogsListing extends Component
{
    use WithPagination;
    public $categories;
    public $selectedCategory;

    public function render()
    {
        
        $query = BlogsModel::where('cancelled', 0)
            ->with('category')
            ->orderBy('orders', 'ASC');

        if ($this->selectedCategory) {
            $query->whereHas('category', function ($query) {
                $query->where('label', $this->selectedCategory);
            });
        }

        $blogs = $query->paginate(6);

        $this->categories = CategoriesModel::where('cancelled', 0)
            ->orderBy('orders', 'ASC')
            ->get();

        return view('livewire.blogs-listing', compact('blogs'));
    }

    public function updatedSelectedCategory()
    {
        $this->gotoPage(1);
    }
}
