<?php

namespace App\Http\Controllers;

use App\GeneratedModels\LegalModel;
use App\GeneratedModels\StatementsModel;
use Illuminate\Http\Request;

class LegalController extends Controller
{
      public function render($slug)
    {

        $legal = LegalModel::where('cancelled', 0)
            ->where('slug', $slug)
            ->first();


        if (!$legal) {
            return abort(404);
        }


        return view('pages.policies', ['legal' => $legal]);
    }
}
