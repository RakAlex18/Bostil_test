@extends('template')

@section('content')
    <section>
        @foreach($itemsActiv as $item)
            <article>
                <div class="comp">
                    <span href="#">WP THEME</span>
                    <img src="{{ asset ('images') . '/' . $item->image }}" alt="{{ $item->name }}">
                    <div>
                        <a class="subart1" href="{{route('product.page',[$item->category_id, $item->name])}}">ПОДРОБНЕЕ</a>
                        <a class="subart1" href="#">FREE DOWNLOAD</a>
                    </div>
                </div>
                <div class="price">
                    <a class="price_1" href="#">{{ $item->name }}</a>
                    <a class="price_2" href="#">STARTING FROM
                        <span>Є {{ $item->price }}</span>
                    </a>
                </div>
            </article>
        @endforeach
    </section>
    <div>
       {{ $itemsActiv->links() }}
    </div>
@endsection

