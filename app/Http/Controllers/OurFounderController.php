<?php

namespace App\Http\Controllers;

use App\GeneratedModels\OurFounderModel;
use Illuminate\Http\Request;

class OurFounderController extends Controller
{
    public function render()
    {


        $ourFounder = OurFounderModel::where('cancelled', 0)->orderBy('orders', 'ASC')->first();
     
        return view('pages/our-founder', [
            'ourFounder' => $ourFounder,
           
        ]);
    }
}
