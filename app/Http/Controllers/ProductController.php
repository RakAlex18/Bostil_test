<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Item;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($slug, $name)
    {
        $product = Item::where('name', $name)->firstOrFail();

        if ($product == null) {
            \abort(404, 'Page not found');
        }
        return view('front.product-page', compact('product'));
    }
    //передаем параметрами массив с данными и id товара
    public function getAddToCart(Request $request, $id)
    {

//вытаскиваем по id товар из БД
        $product = Item::find($id);
        // dump($product);-> работает))
        // проверка существования значения в сессии
        //Session::get('cart') - чтение переменной сессии
        // ключ cart - любое может быть слово
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        //создаем экземпляр класса
        $cart = new Cart($oldCart);
      //  dump($cart);-работает))
$cart->add($product, $product->id);
        // Для сохранения данных в сессии  используются метод put()
        // // Через экземпляр запроса...
        // $request->session()->put('key', 'value');
$request->session()->put('cart', $cart);
return redirect()->route('main.page');

    }

}
