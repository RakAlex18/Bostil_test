@extends('template')

@section('content')
    <section>
            <article>
                <div class="comp">
                    <span href="#">WP THEME</span>
                    <div>
                        <a class="subart1" href="#">DETAILS</a>
                        <a class="subart1" href="#">FREE DOWNLOAD</a>
                    </div>
                </div>
                <div class="price">
                    <a class="price_2" href="#">{{ $cats }}  </a>
                    <a class="price_2" href="#">{{ $item }}  </a>
                </div>
            </article>
    </section>
@endsection

