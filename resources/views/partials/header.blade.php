<header>
    <ul>
        <li>
            <a href="{{ route('homepage') }}"><img src="{{ asset('immagini/logo.png') }}" alt=""></a>
        </li>
        <li>
            <a class="{{ Request::route()->getName() == 'homepage' ? 'active' : NULL }}" href="{{ route('homepage') }}">Home</a>
        </li>
        <li>
            <a class="{{ Request::route()->getName() == 'lista-prodotti' ? 'active' : NULL }}" href="{{ route('lista-prodotti') }}">Prodotti</a>
        </li>
        <li>
            <a class="{{ Request::route()->getName() == 'lista-magazzino' ? 'active' : NULL }}" href="{{ route('lista-magazzino') }}">Magazzino</a>
        </li>
    </ul>
</header>
            

