<?php

namespace App\Http\Controllers;
use App\Models\products;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function homeload(){
        $productitems = products::all();

        return view('welcome')->with('it',$productitems);
    }
    function createpage(){
        return view('create');
    }
    function savevalue(Request $req){
        $this->validate($req,[
            "prod_name"=>"required|max: 200",
            "price"=>"required"
        ],
    );
    $product = new products();
    $product->p_name=$req->prod_name;
    $product->price=floatval($req->price);
    $product->save();

    $productitems = products::all();

    return view('welcome')->with('it',$productitems);
    }
}
