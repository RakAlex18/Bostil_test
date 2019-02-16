@extends('template')

@section('content')

    @if(Session::has('cart'))

        <table>
            <tr>
                <td>№</td>
                <td>Название</td>
                <td>Количество</td>
                <td>Цена за ед</td>
                <td>Цена общая за продукт</td>
                <td>+</td>
                <td>- одной штуки</td>
                <td>- всей позиции</td>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>1</td>
                    <td>{{ $product['item']['name'] }}</td>
                    <td>{{ $product['qty'] }}</td>
                    <td>{{ $product['item']['price'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td></td>
                  {{--  <td>
                        <a href="{{ route('reduce.by.one', $product['item']['id']) }}">Удалить</a>
                    </td>
                    <td>
                        <a href="{{ route('delete.product', $product['item']['id']) }}">Очистить</a>
                    </td>--}}
                </tr>
            @endforeach
        </table>
        <hr>
        <h2>Общее количество {{ $totalQty }}</h2>
        <h2>Общая цена {{ $totalPrice }}</h2>

      {{--  <a href="{{ route('destroy') }}">Очистить корзину</a>--}}

    @else

        <p>Продуктов нет в корзине</p>

        @endif


@endsection