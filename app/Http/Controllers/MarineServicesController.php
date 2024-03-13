<?php

namespace App\Http\Controllers;

use App\GeneratedModels\MarineMainModel;
use App\GeneratedModels\MarineServicesModel;
use Illuminate\Http\Request;

class MarineServicesController extends Controller
{

    public function render()
    {


        $services = MarineServicesModel::where('cancelled', 0)->orderBy('orders', 'ASC')->get();

        $main = MarineMainModel::where('cancelled', 0)->orderBy('orders', 'ASC')->first();
        return view('pages/marine-support', [
            'main' => $main,
            'services' => $services,

        ]);
    }
}
