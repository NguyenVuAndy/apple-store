<header>
    <div class="top-nav container">
        <div class="logo"><a href="/">An Dien shop</a></div>
        @if (! request()->is('checkout'))
        <ul>
            <li><a href="{{ route('cuahang.index') }}">Cua hang</a></li>
            <li><a href="#">Ve shop</a></li>
            <li><a href="#">Blog</a></li>
            <li>
                <a href="{{ route('giohang.index') }}">Gio hang
                    <span class="cart-count">
                        @if (Cart::instance('default')->count() > 0)
                            <span>{{ Cart::instance('default')->count() }}</span>
                        @endif
                    </span>
                </a>
            </li>
        </ul>
        @endif
    </div> <!-- end top-nav -->
</header>
