<?php

namespace App\Http\Controllers;

use App\GeneratedModels\AboutUsModel;
use App\GeneratedModels\CertificationsModel;
use App\GeneratedModels\DepartmentsModel;
use App\GeneratedModels\ExpertsModel;
use App\GeneratedModels\OurStoryModel;
use App\GeneratedModels\TeamMembersModel;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function render()
    {


        $aboutUs = AboutUsModel::where('cancelled', 0)->orderBy('orders', 'ASC')->first();
        $team_members = TeamMembersModel::where('cancelled', 0)->orderBy('orders', 'ASC')->get();
        $our_story = OurStoryModel::where('cancelled', 0)->orderBy('orders', 'ASC')->first();
        $certifications = CertificationsModel::where('cancelled', 0)->orderBy('orders', 'ASC')->get();
        // $departments = DepartmentsModel::where('cancelled', 0)->orderBy('orders', 'ASC')->get();
        return view('pages/about-us', [
            'aboutUs' => $aboutUs,
            'team_members'=> $team_members,
            'our_story' => $our_story,
            'certifications'=> $certifications,
            // 'departments' => $departments,
        ]);
    }
}
