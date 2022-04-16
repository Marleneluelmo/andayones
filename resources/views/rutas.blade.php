@extends('layouts.template')

@section('content')

<div class="d-flex flex-wrap justify-content-around me-5 ms-5">
  <!-- $routes variable que viene de rutascontroler del index   -->
@foreach ($routes as $route)

<!-- $route lo pasamos al componente card-routes -->
<x-card-routes :route="$route"/>

@endforeach
</div>


<!-- paginación -->

<div id="greenlightcolor" class="d-flex justify-content-center pb-0">
    {{$routes->links()}}
</div>

@endsection