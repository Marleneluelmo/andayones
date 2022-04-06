@extends('layouts.template')

@section('content')

<p>Favoritos</p>

<div class="d-flex flex-wrap justify-content-around me-5 ms-5">
@foreach ($routes as $route)

<x-card-routes :route="$route"/>

@endforeach
</div>


<!-- paginación -->

<div id="greenlightcolor" class="d-flex justify-content-center pb-0">
    {{$routes->links()}}
</div>

@endsection