<?php

namespace App\Http\Controllers;

use App\GeneratedModels\ClientsModel;
use App\GeneratedModels\HomeMainBannerModel;
use App\GeneratedModels\HomeOurServicesModel;
use App\GeneratedModels\HomePageStatsModel;
use App\GeneratedModels\HomePageUnitopStoryModel;
use App\GeneratedModels\HomeParagraphBannerModel;
use App\GeneratedModels\TestimonialsModel;
use App\Models\BlogsModel;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function render()
    {

        $main_banner = HomeMainBannerModel::query()
            ->where('cancelled', 0)
            ->first();

        $stats = HomePageStatsModel::query()
            ->where('cancelled', 0)
            ->orderBy('orders', 'ASC')
            ->get();

        $our_story = HomePageUnitopStoryModel::query()
            ->where('cancelled', 0)
            ->first();

        $services = HomeOurServicesModel::query()
            ->where('cancelled', 0)
            ->get();

        $testimonials = TestimonialsModel::query()
            ->where('cancelled', 0)
            ->orderBy('orders', 'ASC')
            ->get();

        $clients = ClientsModel::query()
            ->where('cancelled', 0)
            ->orderBy('orders', 'ASC')
            ->get();

        $blogs = BlogsModel::query()
            ->where('cancelled', 0)
            ->where('display_home', 1)
            ->get();

        return view('pages.home', compact('main_banner', 'stats', 'services', 'testimonials', 'clients', 'our_story','blogs'));
    }
}
