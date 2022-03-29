@extends('layouts.template')

@section('content')

<div class="d-flex flex-wrap justify-content-around me-5 ms-5">
@foreach ($routes as $route)
<x-card-routes :route="$route"/>
@endforeach
</div>


<!-- paginación -->

<div class="d-flex justify-content-center pb-5">
    {{$routes->links()}}
</div>

@endsection