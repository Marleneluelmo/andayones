@extends('layouts.template')

@section('content')
<div>
    <div class="d-flex justify-content-center flex-wrap mb-2 mt-4">
        <div class="me-3 mb-3">
            <a href="{{route('rutas')}}"><img src="{{asset('storage/rutas.jpg')}}" ; alt="rutas" width="200em" height="auto"></a>
        </div>
        <div class="ms-3 mb-3">
            <a href="{{route('picos')}}"><img src="{{asset('storage/picos.jpg')}}" ; alt="picos de europa" width="200em" height="auto"></a>
        </div>
    </div>
    <div class="d-flex justify-content-center flex-wrap mb-2">
        <div class="me-3 mb-3">
            <a href="{{route('ferrata')}}"><img src="{{asset('storage/rutas.jpg')}}" ; alt="vias ferratas" width="200em" height="auto"></a>
        </div>
        <div class="ms-3 mb-3">
            <a href="{{route('viaje')}}"><img src="{{asset('storage/rutas.jpg')}}" ; alt="viajes" width="200em" height="auto"></a>
        </div>
    </div>
</div>
    @endsection