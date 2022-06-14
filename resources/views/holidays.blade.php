@extends('layout.layout')
@section('pageTitle', 'I nostri non-viaggi')
@section('mainContent')
<div class="container">
    <div class="row">
        @foreach($holidaysdb as $holiday)
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $holiday->trip_name }}</h5>
                    <p class="card-text">
                        Paese: {{ $holiday->country }}<br/>
                        Città: {{ $holiday->city }}<br/>
                        Notti: {{ $holiday->days }}<br/>
                        Partenza: {{ $holiday->departue }}<br/>
                        Ritorno: {{ $holiday->return }}<br/>
                    </p>
                    <a href="{{route('details', $holiday->id)}}">Maggiori dettagli</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
 @endsection