 <div class="header_top">
            <div class="wrap">
                <div class="header-top-left">
                    <div class="logo">
                        <a href="{{ route('home') }}"><h1>SHARE</h1>
                            <h2>The Blog</h2>
                        </a>
                    </div>
<div class="menu">
    @include('front.menu.menu')
</div>
                    <div class="clear"></div>
                </div>
                <div class="header-top-right">

                    <div class="social-icons">
@auth
<div class="btn-group">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Добро пожаловать, {{ \Illuminate\Support\Facades\Auth::user()->name }}</button>
    <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item btn-secondary" href="#">Кабинет</a>
        @if(\Illuminate\Support\Facades\Auth::user()->is_admin)
            <a class="dropdown-item btn-secondary" href="{{ route('admin.index') }}">Админка</a>
        @endif
        <a class="dropdown-item btn-secondary" href="{{ route('logout') }}">Выход</a>
    </div>
</div>
@endauth
@guest
<a href="{{ route('login') }}" class="btn btn-outline-secondary">Вход</a>
<a href="{{ route('signup') }}" class="btn btn-outline-secondary">Регистрация</a>
@endguest
                    </div>

<div class="search_box">
    <form method="get" action="{{ route('search') }}">
        <input type="text" class="text-box @error('q') is-invalid  @enderror" placeholder="Search for Blog" name="q"><input type="submit" value="" required/>
    </form>
</div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
