<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ok()
        {
            $code=\App\Models\product::all();
            return view('aboutUs',['code'=>$code]);
        }
}
