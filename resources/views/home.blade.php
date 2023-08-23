@extends('layouts.main')

@section('title', 'Home')

@section('main')
    <section class="container-fluid mt-4 text-center">
        <h1 class="text-primary">TRENI</h1>
        <div class="row row-cols-4 justify-content-center">
            @foreach ($trains as $train)
                <div class="card bg-light">
                    <div class="card-body">
                        <h5 class="card-title">{{ $train->azienda }}</h5>
                        <p class="card-text">{{ $train->codice_treno }}</p>
                    </div>
                    <ul class="list-group list-group-flush rounded">
                        <li class="list-group-item">Partenza da: <strong>{{ $train->stazione_partenza }}</strong> alle:
                            <strong>{{ $train->orario_partenza }}</strong>
                        </li>

                        <li class="list-group-item">Arrivo a: <strong>{{ $train->stazione_arrivo }}</strong> alle:
                            <strong>{{ $train->orario_arrivo }}</strong>
                        </li>
                        <li class="list-group-item">Numero carrozze: <strong>{{ $train->numero_carrozze }}</strong></li>
                        <li class="list-group-item">Orario rispettato: <strong>{{ $train->in_orario }}</strong></li>
                        <li class="list-group-item">
                            @if (!$train->cancellato)
                                <strong>Cancellato</strong>
                            @else
                                <strong>Servizio Attivo</strong>
                            @endif
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
    </section>
@endsection
