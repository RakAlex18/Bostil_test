<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ProductController extends Controller
{
    public function index($slug, $name)

    {
$product = Item::where('name', $name)->firstOrFail();

        if($product == null) {
            \abort(404, 'Page not found');
        }
        return view('front.product-page', compact('product'));

    }

}
