<?php

namespace App\Http\Controllers;

use App\Models\BlogsModel;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show($slug)
    {

        $blog = BlogsModel::where('slug', $slug)->where('cancelled', 0)->with('category')->first();

        if (!$blog) {
            return abort(404);
        }


    
        return view('pages/blog-details', ['blog' => $blog]);
    }
    
}
