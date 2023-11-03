<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class PageController extends Controller
{
    public function getIndex(){
        $product =Products::all();
        return view('shop', compact('product'));
    }
    public function getCart(){
        return view('shopping-cart');
        }
    public function getDetail($id)
    {
        $detailInf = Products::find($id);
        return view('detail', compact('detailInf'));
    }
}
