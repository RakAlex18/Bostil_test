<?php

namespace App\Http\Controllers;
use App\Item;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()

        {
        $items = Item::all();
     //   $cats = DB::table('categories')->get();
        return view('front.main-page', compact('items'));

    }
    /*public function profile(){
        return view('front.profile');
    }*/
}
