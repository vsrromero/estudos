<header>
    <div class="logo">
        <img src="{{ asset('img/logo.png') }}">
    </div>

    <nav>
        <ul>
            <li><a href="{{ route('app.home') }}">Home</a></li>
            <li><a href="{{ route('app.products') }}">Products</a></li>
            <li><a href="{{ route('app.clients') }}">Clients</a></li>
            <li><a href="{{ route('app.suppliers') }}">Suppliers</a></li>
            <li><a href="{{ route('app.signout') }}">Sign out</a></li>
        </ul>
    </nav>
</header>
