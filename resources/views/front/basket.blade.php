@extends('template')

@section('content')

    @if(Session::has('cart'))
        {{--  <td>
              <a href="{{ route('reduce.by.one', $product['item']['id']) }}">Удалить</a>
          </td>
          <td>
             <a href="{{ route('delete.product', $product['item']['id']) }}">Очистить</a>
        </td>--}}
        <table class="table table-hover table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название</th>
                <th scope="col">Количество</th>
                <th scope="col">Цена за ед.товара</th>
                <th scope="col">Цена общая за продукт</th>
                <th scope="col">+добавить 1 ед</th>
                <th scope="col">-удалить 1 ед</th>
                <th scope="col">-Очистить всю строку</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php $i = 1?>
                @foreach($products as $product)
                    <th scope="row"><?=$i?></th>
                    <td>{{ $product['item']['name'] }}</td>
                    <td>{{ $product['qty'] }}</td>
                    <td>{{ $product['item']['price'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td>
                        <button type="button" class="btn btn-danger">добавить</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary">удалить</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-light">очистить</button>
                    </td>
            </tr>
            <?php $i++?>
            @endforeach
            </tbody>
        </table>
        <hr>
        <h2>Общее количество {{ $totalQty }}</h2>
        <h2>Общая цена {{ $totalPrice }}</h2>
        <a class="btn btn-secondary" href="{{ route('destroy') }}" role="button">
            Очистить корзину
        </a>
        <button type="button" class="btn btn-success">Оформить заказ</button>

    @else
        <p>Продуктов нет в корзине</p>
    @endif
@endsection