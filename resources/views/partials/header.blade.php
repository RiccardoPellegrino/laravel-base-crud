<?php
$links = config('navfoolink.navbar');

?>
<div class="container  d-flex justify-content-center align-items-center">
    <div class="logo-box">
        <a href="{{ route('welcome') }}">
            <img src="{{ Vite::asset('/resources/img/babbo_dabbing.gif') }}" alt="logo-site">
        </a>
    </div>
    <nav class="navbar-nav container navbar-light ">
        <ul class="d-flex list-unstyled justify-content-end  text-uppercase fw-bold m-0">
            @foreach ($links as $link)
                <li class="nav-item mx-3">
                    <a class="{{ Route::currentRouteName() == $link['url'] || (Str::contains(Route::currentRouteName(), '') && $link['url'] == 'presents.index') ? 'active' : '' }} hover-underline-animation"
                        href="{{ route($link['url']) }}">{{ $link['text'] }}</a>

                </li>
            @endforeach



        </ul>
    </nav>
</div>
