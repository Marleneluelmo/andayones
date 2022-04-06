@extends('layouts.template')

@section('content')
<div>
      <div class="d-flex flex-column mb-2 mt-5">
            <div class="d-flex justify-content-evenly flex-wrap">
                  <div style="width:30rem;">
                        <img src="{{asset('storage/'.$route->image)}}" id="shadowdetail" class="card-img-top">
                  </div>
                  <div>
                        <div id="blacklightcolor" class="d-flex flex-column align-items-center">
                              <p class="fs-2 fw-bold mt-3 mb-2">{{ $route->name }}</p>
                              <p class="fs-4 fw-bold">{{ $route->altitude }} </p>
                        </div>

                        <div id="blacklightcolor" class="d-flex flex-column mt-3 mb-4 fs-4">         
                                    <p class="text-muted fs-6 fw-bold mb-2">Distancia {{ $route->distance }} </p>
                                    <p class="text-muted fs-6 fw-bold mb-2">Desnivel {{ $route->elevationgain }} </p>
                                    <p class="text-muted fs-6 fw-bold mb-2">Tiempo {{ $route->time }}</p>
                                    <p class="text-muted fs-6 fw-bold mb-2">Dificultad {{ $route->difficulty }}</p> 
                        </div>
                  </div>
            </div>

            <div>

                  <div id="blacklightcolor" class="d-flex flex-column mt-5 mb-4">
                        <h4 class="fw-bold">Punto de salida</h4>
                        <p class="text-muted fs-5">{{ $route->location }} </p>
                  </div>
                  <div id="blacklightcolor" class="d-flex flex-column mb-4">
                        <h4 class="fw-bold">Descripción de la ruta</h4>
                        <p class="text-muted fs-5">{{ $route->description }} </p>
                  </div>
            </div>

      </div>
</div>

@endsection