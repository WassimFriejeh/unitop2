<?php

namespace App\Http\Controllers;

use App\GeneratedModels\MissionSectionModel;
use App\GeneratedModels\ResultsModel;
use App\GeneratedModels\StackedSectionModel;
use App\GeneratedModels\StoryModel;
use App\GeneratedModels\StrategyParagraphModel;
use App\GeneratedModels\SustainabilitySectionModel;
use App\GeneratedModels\VisionSectionModel;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function render()
    {
        $story = StoryModel::where('cancelled', 0)->orderBy('orders', 'ASC')->first();
        $mission = MissionSectionModel::where('cancelled', 0)->orderBy('orders', 'ASC')->first();
        $vision = VisionSectionModel::where('cancelled', 0)->orderBy('orders', 'ASC')->first();
        $vision = VisionSectionModel::where('cancelled', 0)->orderBy('orders', 'ASC')->first();
        $strategy_paragraph = StrategyParagraphModel::where('cancelled', 0)->orderBy('orders', 'ASC')->first();
        $results = ResultsModel::where('cancelled', 0)->orderBy('orders', 'ASC')->get();
        $sustainability = SustainabilitySectionModel::where('cancelled', 0)->orderBy('orders', 'ASC')->first();
        return view('pages/our-story', [
            'story' => $story,
            'mission' => $mission,
            'vision' => $vision,
            'strategy_paragraph' => $strategy_paragraph,
            'results' => $results,
            'sustainability' => $sustainability,


        ]);
}
}
