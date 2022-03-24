@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
<div class="d-flex flex-column">
  <div class="mb-5">
    <a href="{{route('routes.index')}}" class="btn btn-primary btn-lg">Listado de Rutas</button></a>
  </div>
  <div>
  <div class="mb-5">
    <a href="#" class="btn btn-primary btn-lg">Listado de Picos de Europa</button></a>
  </div>
  <div>
  <div class="mb-5">
    <a href="#" class="btn btn-primary btn-lg">Listado de Vias ferratas</button></a>
  </div>
  <div>
  <div class="mb-5">
    <a href="#" class="btn btn-primary btn-lg">Listado de Viajes</button></a>
  </div>
  <div>
  <div class="mb-5">
    <a href="#" class="btn btn-primary btn-lg">Nosotros</button></a>
  </div>
</div>
</div>
@endsection




<!-- <div class="container">
    <p>home blade</p> -->
<!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body"> -->
<!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->

<!-- {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> -->
<!-- </div> -->
