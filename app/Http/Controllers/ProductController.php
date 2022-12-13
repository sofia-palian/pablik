<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ok()
        {
            $code=\App\Models\product::orderby('id','desc')->limit(5)->get();
            return view('aboutUs',['code'=>$code]);
        }
    public function produkt()
    {   $comik=\App\Models\product::all();
        return view('product',['comik'=>$comik]);
    }
}
