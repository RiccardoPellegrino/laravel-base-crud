@extends('layouts.app')
@section('content')
    <section class="container py-5 ">
        <div class="mb-5 text-center">

            @if (session()->has('message'))
                <div class="alert alert-success mb-3 mt-3">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div>
                <form action="{{ route('presents.index') }}" class="" method="GET">
                    <select name="search" id="search" class="rounded-pill p-2" id="select">
                        <option value="1">Buono

                        </option>
                        <option value="0">Cattivo

                        </option>

                    </select>
                    <button type="submit" class="btn button-form mx-3 p-2">Cerca</button>
                    <a href="{{ route('presents.index') }}" class="btn button-form p-2">Tutti i regali</a>
                </form>
            </div>
        </div>
        <div class="row">
            {{-- col-sm-6 col-md-4 --}}
            @foreach ($presents as $present)
                <div class="col-4  mb-4">
                    <div class="card-body">
                        <img class="my-gif" src="{{ Vite::asset('/resources/img/christmas-elf-unscreen.gif') }}"
                            alt="">
                        <div class="text-center">
                            @if ($present->status)
                                <img src="{{ Vite::asset('/resources/img/regalino.png') }}"
                                    class="img-1  d-flex justify-content-center align-items-center" alt="">
                            @else
                                <img src="{{ Vite::asset('/resources/img/carbonevero.png') }}" alt=""
                                    class="img-1 carbon d-flex justify-content-center align-items-center">
                            @endif

                        </div>

                        <hr>
                        <h1 class="mb-4 card-title">{{ $present->name }} {{ $present->cognome }}</h1>
                        <hr>


                        <div id="" class=" my-2 align-items-center position-relative">

                            <div class="d-flex justify-content-around">
                                <a href="{{ route('presents.show', $present->id) }}" class="">
                                    <button class="tuono_button my-3 tuono_btn_r"><i
                                            class="fa-solid fa-circle-info"></i></button>
                                </a>
                                <a href="{{ route('presents.edit', $present->id) }}" class="">
                                    <button class="tuono_button my-3 tuono_btn_r"><i
                                            class="fa-solid fa-wand-magic-sparkles"></i></button>
                                </a>
                                <button class="tuono_button my-3 tuono_btn_r btn-modal"><i
                                        class="ms-1 fa-solid fa-trash "></i></button>



                            </div>

                        </div>
                    </div>







                </div>
                <div id="" class="modal-modal myModal-modal">

                    <!-- Modal content -->
                    <div class="modal-modal-content">
                        <span class="close-modal">CHIUDITI </span>
                        <br>
                        <form action="{{ route('presents.destroy', $present->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="title-delete">sei sicuro di eliminare il regalo di :
                                <strong>{{ $present->name }} {{ $present->cognome }}
                                </strong>
                            </div>
                            <button type="submit" class='btncancella mt-3 btn btn-danger'>cancella</button>

                        </form>
                    </div>

                </div>
            @endforeach


        </div>

    </section>
@endsection
