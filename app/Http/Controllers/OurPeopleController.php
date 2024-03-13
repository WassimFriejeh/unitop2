<?php

namespace App\Http\Controllers;

use App\Models\BlogsModel;
use App\GeneratedModels\OurPeopleModel;
use App\GeneratedModels\TeamHighlightsModel;
use Illuminate\Http\Request;

class OurPeopleController extends Controller
{

    public function render()
    {


        $ourPeople = OurPeopleModel::where('cancelled', 0)->orderBy('orders', 'ASC')->first();
        $team_highlights = TeamHighlightsModel::where('cancelled', 0)->orderBy('orders', 'ASC')->get();
        $blogs = BlogsModel::where('cancelled', 0)->orderBy('orders', 'ASC')->with('category')->get();
        return view('pages/our-people', [
            'ourPeople' => $ourPeople,
            'team_highlights' => $team_highlights,
            'blogs' => $blogs,

        ]);
    }
}
