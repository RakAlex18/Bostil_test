@section('navbar')
<nav>
    <img src="{{asset ('images/logo.png') }}">
    <ul id="menu">
        <li>
            <a id="onemenu" href="#">Главная</a>
        </li>
        @foreach($cats as $cat)
            <li>
                <a href="{{ route('index.page', $cat->slug) }}">{{ $cat->title }}</a>
                <ul class="submenu">
                    @foreach($items as $item)
                        @if($item->category_id == $cat->id)
                            <li>
                                <a href="#">{{ $item->name }}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </li>
        @endforeach
        <li>
            <a href="#">Корзина</a>
        </li>
    </ul>
    <select name="menu2">
        <option value="Home">Главная</option>
        @foreach($cats as $cat)
            <option value="Themes">{{ $cat->title }}</option>
        @endforeach
    </select>
</nav>
@endsection('navbar)
