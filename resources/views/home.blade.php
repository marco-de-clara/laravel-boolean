@extends('layouts.app')

@section('content')
    <div id="jumbo">
        <div class="container">
            <div class="row">
                <div class="col-12 jumbo-wrapper">
                    <div class="col-6">
                        <div class="jumbo-title">
                            DIVENTA
                            <strong>SVILUPPATORE WEB</strong>
                        </div>
                        <p class="subtitle">
                            <strong>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</strong>
                        </p>
                        <ul class="list-p">
                            <li class="paragraph">
                                <strong>6 mesi</strong>
                                di corso intensivo online in diretta
                            </li>
                            <li class="paragraph">
                                <strong>Nessuna competenza</strong>
                                di programmazione richiesta
                            </li>
                            <li class="paragraph">
                                Siamo certi del tuo successo, altrimenti 
                                <strong> ti rimborsiamo</strong>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 wrapper-right">
                        <img id="pc-demo" src="{{ asset('images/pc-black-gif.gif') }}" alt="pc demo">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('home_partials.data')
@endsection

@section('page-title', 'Homepage')

@section('body-class', 'homepage')