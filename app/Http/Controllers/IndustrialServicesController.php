<?php

namespace App\Http\Controllers;

use App\GeneratedModels\IndustrialMainModel;
use App\GeneratedModels\IndustrialServicesModel;
use Illuminate\Http\Request;

class IndustrialServicesController extends Controller
{
    public function render()
    {


        $services = IndustrialServicesModel::where('cancelled', 0)->orderBy('orders', 'ASC')->get();
        $main = IndustrialMainModel::where('cancelled', 0)->orderBy('orders', 'ASC')->first();
        return view('pages/industrial-catering', [
            'main' => $main,
            'services' => $services,

        ]);
    }
}
