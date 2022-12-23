@extends('layouts.app')
@section('content')
    <div class="my-bg position-relative snow">
        <div class="container section-snow">
            <section class="">
                <div class="row overflow-hidden">
                    <div class="my-babbo babbo-left col-6">
                        <h2 class="my-h2 my-txt-gold">I'm</h2>
                        <h3 class="my-h3 text-white">Santa Claus</h3>
                        <h4 class="text-white mb-4 text-start">oh oh oh ...</h4>
                        <button class=" button-form mt-3">Scrivi una letterina</button>
                    </div>
                    <div class="my-babbo col-6">
                        <img src="{{ Vite::asset('/resources/img/babbo_dabbing.gif') }}" alt="" width="100%">
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="bg-white">
        <section class="container my-section-text">
            <div>
                <p class="fs-3 my-txt">
                    <strong>Babbo Natale</strong>, altrimenti noto come San Nicola o Kris Kringle, ha una lunga storia ricca
                    di
                    tradizioni natalizie . Oggi è pensato principalmente come l'uomo allegro in rosso che porta i
                    giocattoli a brave ragazze e ragazzi la vigilia di Natale, ma la sua storia risale al 3° secolo, San
                    Nicola camminò sulla terra e divenne il santo patrono di bambini. <strong>Oggi i tempi sono
                        profondamente
                        cambiati e Babbo Natale, dopo un incidente in slitta per via della sua renna preferita
                        "Tuono"</strong> ,
                    pensò bene di riorganizzare la distribuzione dei doni e fu così, che il Babbo più conosciuto al
                    mondo iniziò a pianificare meglio la gestione delle letterine grazie ad un <strong>piccolo gruppo di
                        junior
                        dev dalla folle, discussa creatività!</strong> Babbo divenne il nuovo dabbing dencer più conosciuto
                    del polo
                    nord e dintorni!
                </p>
            </div>
            <div class="text-center mb-5">
                <button class=" button-form mt-4 mb-5">L'hai scritta la letterina, sì?</button>
            </div>
        </section>
    </div>
@endsection
