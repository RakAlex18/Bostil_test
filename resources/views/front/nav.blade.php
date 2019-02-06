<nav>
    <img src="{{asset ('images/logo.png') }}">
    <ul id="menu">
        <li>
            <a id="onemenu" href="#">Главная</a>
        </li>
        @foreach($cats as $cat)
            <li>
                <a href="#">{{ $cat->title }}</a>
                <ul class="submenu">
                    @foreach($items as $item)
                        <li>
                            <a href="#">{{ $item->category_id == $cat->id ? $item->name : '' }}</a>
                        </li>
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
