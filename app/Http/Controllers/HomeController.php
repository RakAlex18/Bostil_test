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
        $itemsActiv = Item::where('is_active', 1)->paginate(6);
//dd($itemsActiv);
             return view('front.main-page', compact('itemsActiv'));
    }

}
