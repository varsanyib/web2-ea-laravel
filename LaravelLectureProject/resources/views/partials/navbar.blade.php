<a href="{{ route('home') }}" class="site-logo">
    <img src="{{ asset('logo.png') }}" style="height: 25px;" alt="">
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
    <li><a href="{{ route('diagram') }}">Adatok</a></li>
    @auth
        <li><a href="{{ route('dashboard') }}">Fiók</a></li>
        <li><a href="{{ route('messages.index') }}">Üzenetek</a></li>
        <li><a href="{{ route('radios.index') }}">Rádiók</a></li>
        @if(auth()->user()->role === 'admin')
            <li><a href="{{ route('users.index') }}">Adminisztráció</a></li>
        @endif
        <li><a href="{{ route('contact') }}">Kapcsolat</a></li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-primary logout m-5" >Kijelentkezés</button>
            </form>
        </li>
    @endauth
</ul>
