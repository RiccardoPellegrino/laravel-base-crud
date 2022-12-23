<?php
$links = config('navfoolink.footer');

?>

<footer>
    <div class="snow first-footer">
        <section>


            <div class="container d-flex align-items-center justify-content-between container-list ">
                <div class="box-list">
                    @foreach ($links as $link)
                        <div class="list">
                            <div>
                                <h2>{{ $link['title'] }}</h2>
                            </div>
                            <div>
                                <ul class="p-0">
                                    @foreach ($link['links'] as $list)
                                        <li>
                                            <a class="text-capitalize" href="{{ $list['url'] }}">{{ $list['text'] }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div>
                    <a class="social-ico" href="#nogo"><img src="{{ Vite::asset('/resources/img/fb.png') }}"
                            alt="Facebook"></a>
                    <a class="social-ico" href="#nogo"><img src="{{ Vite::asset('/resources/img/tw.png') }}"
                            alt="Facebook"></a>
                    <a class="social-ico" href="#nogo"><img src="{{ Vite::asset('/resources/img/printe.png') }}"
                            alt="Facebook"></a>
                    <a class="social-ico" href="#nogo"><img src="{{ Vite::asset('/resources/img/yt.png') }}"
                            alt="Facebook"></a>
                </div>


            </div>
        </section>
    </div>
</footer>




{{-- <div class="first-footer">
    <div class="container d-flex align-items-center justify-content-between container-list">
        <div class="box-list">
            @foreach ($links as $link)
                <div class="list">
                    <div>
                        <h3>{{ $link['title'] }}</h3>
                    </div>
                    <div>
                        <ul class="p-0">
                            @foreach ($link['links'] as $list)
                                <li>
                                    <a class="text-capitalize" href="{{ $list['url'] }}">{{ $list['text'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
        <div>
            {{-- <img src="{{ Vite::asset('/resources/images/dc-logo-bg.png') }}" alt="DC Logo Background"> --}}
{{-- </div>
</div>
<div class="container">
    <p>All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <a href="">noted here</a>.
        All rigths reserved.<br> <a href="">Cookies Settings</a></p>
</div>
</div> --}}
