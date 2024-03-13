<?php

namespace App\Livewire;

use App\GeneratedModels\AssetsCategoriesModel;
use App\Models\CompanyAssetsModel;
use Livewire\Component;
use Livewire\WithPagination;

class CompanyAssetsList extends Component
{
    use WithPagination;
    public $categoryId = '1';

    public function handleClick($category)
    {
        $this->categoryId = $category;
        $this->gotoPage(1);
    }
    public function render()
    {
        $categories = AssetsCategoriesModel::query()
            ->where('cancelled', 0)
            ->get();

        $assets = CompanyAssetsModel::query()
            ->where('cancelled', 0)
            ->where('category_id', $this->categoryId)
            ->orderBy('orders', 'ASC')
            ->paginate(12);



        return view('livewire.company-assets-list', compact('categories', 'assets'));
    }
}
