<?php

namespace App\Http\Controllers;

use App\Models\JobsOpeningsModel;
use Illuminate\Http\Request;

class JobDetailsController extends Controller
{
    public function show($slug)
    {

        $job = JobsOpeningsModel::where('slug', $slug)->where('cancelled', 0)->with('city', 'country')->first();

        if (!$job) {
            return abort(404);
        }

        return view('pages/job-details', ['job' => $job]);
    }
}
