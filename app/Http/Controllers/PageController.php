<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Item;
use App\Category;
class PageController extends Controller
{
    public function index($slug)

    {
        $cats = Category::all();
        $slug = Category::where('slug', $slug)->firstOrFail();
        $items = Item::all();
       // echo $slug;
         return view('front.category-page', compact('cats', 'items', 'slug'));

    }
}
