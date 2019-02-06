<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()

        {
        $items = Item::all();
        return view('front.main-page', compact('items'));

    }
}
