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

    public function showCart()
    {
        if (!Session::has('cart')) {
            return view('front.basket', [
                'products' => null
            ]);
        }

        $oldCart = Session::get('cart');

        $cart = new Cart($oldCart);
        //dump($cart);
        return view('front.basket', [
            'products' => $cart->items,
            'totalQty' => $cart->totalQty,
            'totalPrice' => $cart->totalPrice
        ]);

    }

//очистить корзину
    public function destroy()
    {
        Session::forget('cart');

        return redirect()->route('main.page');
    }
// удалить товар - все товары из строки списка
    public function delete($id)
    {

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->deleteLine($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
            return redirect()->route('main.page');
        }

        return redirect()->route('basket');

    }
//уменьшить кол-во товара на 1
    public function reduceByOne($id)
    {

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
            return redirect()->route('main.page');
        }

        return redirect()->route('basket');

    }
//увеличить кол-во товара на 1
    public function increaseByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->increaseByOne($id);
        Session::put('cart', $cart);
        return redirect()->route('basket');
    }
}
