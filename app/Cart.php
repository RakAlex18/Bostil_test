<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//создаем методы для работы с корзиной
class Cart extends Model
{
    // Определяем стандартные свойства по дефолту
    public $items = null;//кол-во товара, продукта
    public $totalPrice = 0; //общая цена
    public $totalQty = 0;//общее количество
    //    public $shipmentPrice; //платная доставка

//при старте класса Cart вся информация от пользователя запишется в конструктор в переменные
public function __construct($oldCart) // сюда записываем данные, которые придут к нам от пользователя
{
    if($oldCart) { //если что-то пришло, то записываем в наши переменные
        $this->items = $oldCart->items;//заменяем дефолтные значения
        $this->totalPrice = $oldCart->totalPrice; //заменяем дефолтные значения
        $this->totalQty = $oldCart->totalQty; //заменяем дефолтные значения
    }
}
//метод add - будет роут, по клику на который запускает метод add и добавляет в сессию инфу
public function add($item, $id)//передаем сам продукт и его id
{
    // создаем массив где будем хранить наши добавленные продукты
    $storedItems = [  //массив с переменными
        'item' => $item, //сам продукт
        'qty' => 0, //кол-во
        'price' => $item->price //цена одного продукта
    ];
// делаем проверку и если там есть продукты, то проходимся по массиву и заносим данные
    if ($this->items) {
        if (array_key_exists($id, $this->items)) {
            $storedItems = $this->items[$id];
        }


    }
    $storedItems['qty']++;

    $storedItems['price'] = $item->price * $storedItems['qty'];

    $this->items[$id] = $storedItems;

    $this->totalQty++;

    $this->totalPrice += $item->price;
}
// удалить товар
/*public function delete($id){


      }*/
}