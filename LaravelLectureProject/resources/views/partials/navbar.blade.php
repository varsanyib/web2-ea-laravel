<a href="{{ route('home') }}" class="site-logo">
    <img src="{{ asset('img/logo.png') }}" alt="">
</a>

@guest
<div class="header-right">
    <div class="user-panel">
        <a href="{{ route('login') }}" class="login">Bejelentkezés</a>
        <a href="{{ route('register') }}" class="register">Regisztráció</a>
    </div>
</div>
@endguest

<ul class="main-menu">
    <li><a href="{{ route('home') }}">Kezdőlap</a></li>
    <li><a href="{{ route('contact') }}">Kapcsolat</a></li>
    <li><a href="{{ route('diagram') }}">Diagram</a></li>

    @auth
        <li><a href="{{ route('dashboard') }}">Kezelőpult</a></li>
        <li><a href="{{ route('messages.index') }}">Üzenetek</a></li>
        @if(auth()->user()->role === 'admin')
            <li><a href="{{ route('admin.home') }}">Admin</a></li>
            <li><a href="{{ route('radios.index') }}">Rádiók</a></li>
        @endif
        <li>
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-link logout" style="padding: 0; border: none; background: none; cursor: pointer;">Kijelentkezés</button>
            </form>
        </li>
    @endauth
</ul>
