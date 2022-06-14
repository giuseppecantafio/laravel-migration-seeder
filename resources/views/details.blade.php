@extends('layout.layout')
@section('pageTitle', 'Dettagli')
@section('mainContent')
<div>
    <h2 class="text-center">Questa è la descrizione del tuo viaggio:<br />
        {{$trip->description}}</h2>
     <p class="text-center"><a href="{{route('holidays')}}">Torna ai viaggi</a></p>
</div>
 @endsection