@extends('layouts.app')
@section('content')
    <div class="container edit-alt p-5">
        <div class="blog-slider">
            <div class="blog-slider__wrp swiper-wrapper">
                <div class="blog-slider__item swiper-slide mt-5">
                    <div class="blog-slider__img">
                        @if ($present->status)
                            <img src="{{ Vite::asset('/resources/img/regalino.png') }}"
                                class="img-1  d-flex justify-content-center align-items-center" alt="">
                        @else
                            <img src="{{ Vite::asset('/resources/img/carbonevero.png') }}" alt=""
                                class="img-1 carbon d-flex justify-content-center align-items-center">
                        @endif
                    </div>
                    <div class="blog-slider__content">
                        <ul>
                            <li class="my-list">Nome & Cognome:
                                {{ $present->name }} {{ $present->cognome }}
                            </li>
                            <li class="my-list">Regalo:
                                {{ $present->desc_regalo }}
                            </li>
                            <li class="my-list">Città :
                                {{ $present->citta }}
                            </li>
                            <li class="my-list">Indirizzo:
                                {{ $present->indirizzo }}
                            </li>
                            <li class="my-list">Numero di regali:
                                {{ $present->n_regalo }}
                            </li>

                            <li class="my-list">Code-sped:
                                {{ $present->code_spedizione }}
                            </li>
                            <li class="my-list">
                                camino :@if ($present->camino)
                                    presente
                                @else
                                    assente
                                @endif
                            </li>
                            <li class="my-list">
                                status: @if ($present->status)
                                    buono
                                @else
                                    cattivo
                                @endif
                            </li>
                        </ul>

                        <img class="my-gif2" src="{{ Vite::asset('../../img/santa-claus-26.gif') }}" alt="">
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-4 py-5">
                    <a class="button-form me-5" href="{{ route('presents.index') }}">Torna alla lista</a>
                </div>
            </div>
        </div>

    </div>
@endsection
