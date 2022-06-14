@extends('layout.layout')
@section('pageTitle', 'Welcome in Booltrips')
@section('mainContent')
<div>
    <h2 class="text-center">Questa e la descrizione del tuo viaggio:<br />
        {{$trip->description}}</h2>
     <p><a href="{{route('holidays')}}">Torna ai viaggi</a></p>
</div>
 @endsection