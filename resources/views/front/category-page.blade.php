
@extends('template')
@section('content')
    <section>
        @foreach($items as $item)
            @if($slug->id == $item->category_id)
                <article>
                    <div class="comp">
                        <span href="#">WP THEME</span>
                        <img src="{{ asset ('images') . '/' . $item->image }}" alt="{{ $item->name }}">
                        <div>
                            <a class="subart1" href="#">DETAILS</a>
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
            @endif
        @endforeach
  </section>

@endsection('content')