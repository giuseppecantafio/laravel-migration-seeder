@extends('layout.layout')
@section('pageTitle', 'Welcome in Booltrips')
@section('mainContent')
<h1 class="text-center">
        (NON) Viaggiare con Booltrips <i class="fa-solid fa-plane-departure"></i>
        
</h1>
<h3 class="text-center">
        <a href="{{route('holidays')}}">Consulta i viaggi disponibili</a>
</h3>
 @endsection

