<?php

namespace App\Http\Controllers;

use App\GeneratedModels\CompanyHistoryBannerModel;
use App\GeneratedModels\CompanyHistoryModel;
use Illuminate\Http\Request;

class CompanyHistoryController extends Controller
{
    public function render()
    {

        $banner = CompanyHistoryBannerModel::query()
            ->where('cancelled', 0)
            ->first();

        $company_histories = CompanyHistoryModel::query()
            ->where('cancelled', 0)
            ->orderBy('orders', 'ASC')
            ->get();


        return view('pages.company-history', compact('company_histories', 'banner'));
    }
}
