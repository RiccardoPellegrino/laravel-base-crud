<div class='jumbocontainer'>
    <div id='jumbo'>
        <div class="jumbo-video">
            <div class="video-absolute">
                <video style="width:100%;height:100%" autoplay loop controls>
                    <source src="{{ URL::asset('../videos/BuonAnno-3565.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
    <div class="bg-text">
        @if (Str::contains(Route::currentRouteName(), 'presents.show'))
            <h1 style="font-size:50px">Ecco il dettaglio del tuo regalo</h1>
            <p>Controlla se sono giusti</p>
        @endif
        @if (Str::contains(Route::currentRouteName(), 'presents.edit'))
            <h1 style="font-size:50px">Non ti garba? Modifica il tuo regalo</h1>
        @endif

        @if (Route::currentRouteName() == 'presents.index')
            <h1 style="font-size:50px">Ecco la lista di Babbo Natale</h1>
            <p>Scopri il tuo regalo ... sei stato buono o cattivo?</p>
        @endif
        @if (Route::currentRouteName() == 'presents.create')
            <h1 style="font-size:50px">Inizia subito a scrivere la lettera per Babbo Natale</h1>
        @endif
        @if (Route::currentRouteName() == 'tour')
            <h1 style="font-size:50px">La vera storia di Babbo Natale</h1>
            <p>Babbo Natale 3.0, l'evoluzione di una storia di successo ...</p>
        @endif

        @if (Route::currentRouteName() == 'welcome')
            <h1 style="font-size:50px">Benvenuti sul sito ufficiale di Babbo Natale</h1>
            <h4 class="text-white fw-bold">Su questo sito hai la possibilit&agrave; di scrivere la tua letterina a babbo
                natale
                inizia subito !!!
            </h4>
        @endif




    </div>
</div>
