@extends('layouts.app')

@section('main-content')



@foreach ($trains as $train)

    <div>


        <p>Treno:</p>
        <p>azienda: {{$train->Azienda}}</p>
        <p>Stazione di partenza: {{$train->Stazione_di_partenza}}</p>
        <p>stazione di arrivo : {{$train->Stazione_di_arrivo}}</p>
        <p>codice treno: {{$train->Codice_treno}}</p>
        <p>numero carrozze: {{$train->Numero_carrozze}}</p>


    </div>

@endforeach


@endsection
