@extends('layouts.app')

@section('content')
<section id="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h1 class="">
                    DIVENTA <strong>SVILUPPATORE WEB</strong>
                </h1>
                <p>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</p>
                <ul class="">
                    <li class="paragraph"> <strong>6 mesi</strong> di corso intensivo online in diretta</li>
                    <li class="paragraph"><strong>Nessuna competenza</strong> di programmazione richiesta</li>
                    <li class="paragraph">Siamo certi del tuo successo, altrimenti <strong>ti rimborsiamo</strong></li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-6">
                <img src="{{ asset('images/pc-black-gif.gif') }}" alt="">
            </div>
        </div>
    </div>
</section>
<section id="data">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 text-center">
                <h3>98%</h3>
                <p>La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo indeterminato.</p>
            </div>
            <div class="col-sm-12 col-md-4 text-center">
                <h3>€ 23.000</h3>
                <p>Lo stipendio medio lordo di partenza degli studenti assunti dalle nostre aziende partner.</p>
            </div>
            <div class="col-sm-12 col-md-4 text-center">
                <h3>#1</h3>
                <p>Siamo il primo istituto online in Italia per indice di gradimento e risultati conseguiti.</p>
            </div>
        </div>

    </div>

</section>


@endsection

@section('page-title', 'Il corso per diventare web developer e trovare un nuovo lavoro')
