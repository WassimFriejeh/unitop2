<?php

namespace App\Http\Controllers;

use App\GeneratedModels\SustainabilityModel;
use Illuminate\Http\Request;

class SustainabilityController extends Controller
{
    public function render()
    {


        $sustainability = SustainabilityModel::where('cancelled', 0)->orderBy('orders', 'ASC')->first();
      return view('pages/sustainability', [
            'sustainability' => $sustainability,
            
        ]);
    }
}