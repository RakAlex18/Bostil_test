@extends('template')
@section('content')
    <section>
        <article>
            <div class="comp">

                <img src="{{ asset ('images') . '/' . $product->image }}" alt="{{ $product->name }}">

            </div>
            <div>
                {{ $product->description }}
            </div>
            <div class="price">

                <a class="price_2" href="#">В КОРЗИНУ
                    <span>Є {{ $product->price }}</span>
                </a>
            </div>
        </article>
    </section>
@endsection