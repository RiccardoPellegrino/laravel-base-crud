@extends('layouts.app')
@section('content')
    <div class="py-5">
        <div class="container bg-form d-flex justify-content-center align-items-center ">
            <div class='col-6 me-3 '>
                <form action="{{ route('presents.store') }}" method="POST" class="">
                    @csrf
                    <h1 class="title-form mt-4">Crea la tua lettera</h1>
                    <div class="">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="">
                        <label for="cognome" class="form-label">Cognome</label>
                        <input type="text" class="form-control" id="cognome" name="cognome">
                    </div>
                    <div class="">
                        <label for="citta" class="form-label">Città </label>
                        <input type="text" class="form-control" id="citta" name="citta" placeholder="1234 Main St">
                    </div>
                    <div class="">
                        <label for="indirizzo" class="form-label">Indirizzo</label>
                        <input type="text" class="form-control" id="indirizzo" name="indirizzo"
                            placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="">
                        <label for="n_regalo" class="form-label">Numero di regalo </label>
                        <input type="number" class="form-control" id="n_regalo" name="n_regalo">
                    </div>
                    <div class="">
                        <label for="code_spedizione" class="form-label">codice spedizione </label>
                        <input type="text" class="form-control" id="code_spedizione" name="code_spedizione">
                    </div>
                    <div class="">
                        <label for="camino" class="form-label">Camino</label>
                        <select id="camino" name="camino" class="form-select">
                            <option value="1" selected>Si</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="">
                        <label for="status" class="form-label">cattivo?</label>
                        <select id="status" name="status" class="form-select">
                            <option value="1" selected>Si</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="">
                        <label for="desc_regalo" class="form-label">Nome gioco </label>
                        <input type="text" class="form-control" id="desc_regalo" name="desc_regalo">
                    </div>
                    <div class="d-flex justify-content-center py-5">
                        <a class="button-form me-5" href="{{ route('presents.index') }}">Vai indietro</a>
                        <button type="submit" class="button-form">Crea un regalo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <div class="container d-flex  "> --}}


    {{-- <div class="py-5 d-flex ">


            <div class='col-6 my-5 me-3 principal-create  '>

                <form action="{{ route('presents.store') }}" method="POST" class="row g-3">
                    @csrf

                    <div class="col-3">
                        <label for="name" class="form-label">nome</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="col-3">
                        <label for="cognome" class="form-label">cognome</label>
                        <input type="text" class="form-control" id="cognome" name="cognome">
                    </div>
                    <div class="col-3">
                        <label for="citta" class="form-label">citta</label>
                        <input type="text" class="form-control" id="citta" name="citta" placeholder="1234 Main St">
                    </div>
                    <div class="col-3">
                        <label for="indirizzo" class="form-label">indirizzo</label>
                        <input type="text" class="form-control" id="indirizzo" name="indirizzo"
                            placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-3">
                        <label for="n_regalo" class="form-label">numero di regalo </label>
                        <input type="text" class="form-control" id="n_regalo" name="n_regalo">
                    </div>
                    <div class="col-3">
                        <label for="code_spedizione" class="form-label">codice spedizione </label>
                        <input type="text" class="form-control" id="code_spedizione" name="code_spedizione">
                    </div>

                    <div class="col-md-4">
                        <label for="camino" class="form-label">camino</label>
                        <select id="camino" name="camino" class="form-select">
                            <option value="1" selected>Si</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="status"class="form-label">è cattivo?</label>
                        <select id="status" name="status" class="form-select">
                            <option value="1" selected>Si</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="desc_regalo" class="form-label">nome gioco </label>
                        <input type="text" class="form-control" id="desc_regalo" name="desc_regalo">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>

                    <span>
                        <a href="{{ route('presents.index') }}">Vai indietro</a>
                    </span>
                </form>
            </div>
            <div class=" col-6 text-center  left-create">

            </div>
        </div> --}}
    {{-- </div> --}}
@endsection
