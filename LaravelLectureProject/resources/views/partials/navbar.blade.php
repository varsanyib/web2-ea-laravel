<a href="index.html" class="site-logo">
    <img src="img/logo.png" alt="">
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
    @auth
    <li><a href="{{ route('dashboard') }}">Kezelőpult</a></li>
    <li>
        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-link logout" style="padding: 0; border: none; background: none; cursor: pointer;">Kijelentkezés</button>
        </form>
    </li>
    @endauth
    <!--
    <li><a href="#">About</a></li>
    <li><a href="#">Pages</a>
        <ul class="sub-menu">
            <li><a href="category.html">Category</a></li>
        </ul>
    </li>
    
-->
</ul>