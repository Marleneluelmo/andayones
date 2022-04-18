@extends('layouts.appadmin')

@section('content')

<h3>Ruta de {{ $route->name }}</h3>

<h1>Detalles de la ruta bla bla bla</h1>
<div>
<img src="{{asset('storage/rutas.jpg')}}"; alt="" width="200 rem" height="auto"></a>

<div class="d-flex flex-column">
      <p class="text-muted fs-6 fw-bold">Distancia {{ $route->distance }} </p>
      <p class="text-muted fs-6 fw-bold">Desnivel {{ $route->elevationgain }} </p>
      <p class="text-muted fs-6 fw-bold">Dificultad {{ $route->difficulty }} </p>
</div>

</div>

@endsection