@extends('layouts.template')

@section('content')


<p>Detalles de la ruta</p>
<div>
      <div class="d-flex flex-column mb-5 mt-5">
            <div class="d-flex justify-content-evenly">
                  <div style="width:30rem;">
                        <img src="{{asset('storage/cantu cabroneru.jpg')}}" class="card-img-top rounded-3">
                  </div>
                  <div>
                        <div class="d-flex flex-column align-items-center">
                              <p class="fs-1 fw-bold">Nombre de la ruta</p>
                              <p class="fs-3">Altitud </p>
                        </div>
                        <div class="d-flex flex-column mt-5 mb-4 fs-4">
                              <p class="text-muted fs-6 fw-bold">Distancia </p>
                              <p class="text-muted fs-6 fw-bold">Desnivel </p>
                              <p class="text-muted fs-6 fw-bold">Tiempo </p>
                              <p class="text-muted fs-6 fw-bold">Dificultad </p>
                        </div>
                  </div>
            </div>

            <div>

                  <div class="d-flex flex-column mt-5 mb-4">
                        <h4 class="fw-bold">Punto de salida</h4>
                        <p class="text-muted fs-6">texto </p>
                  </div>
                  <div class="d-flex flex-column mb-4">
                        <h4 class="fw-bold">Descripción de la ruta</h4>
                        <p class="text-muted fs-6">texto </p>
                  </div>
            </div>

      </div>
</div>

@endsection