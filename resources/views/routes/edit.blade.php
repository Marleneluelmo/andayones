@extends('layouts.appadmin')


<!-- METODO UPDATE formulario del admin para modificar una ruta -->
@section('content')

<h3>Modificar ruta</h3>

<div class="d-flex justify-content-center align-items-center mt-4">
  <div class="card" style="width: 40rem">
    <!-- ruta que Lleva al update con put para que guarde los datos en la db-->
    <form class="ms-5 me-5 mt-5 mb-3" action="{{route('routes.update', $route)}}" method="post" enctype="multipart/form-data">
      <!-- generar un token de seguridad -->
      @csrf

      @method('put')

      <div class="form-group mb-4">
        <label for="formGroupExampleInput">Nombre de ruta</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{$route->name}}">
      </div>
      <div class="form-group mb-4">
        <label for="formGroupExampleInput2">Altitud</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="altitude" value="{{$route->altitude}}">
      </div>
      <div class="form-group mb-4">
        <label for="formGroupExampleInput">Distancia</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="distance" value="{{$route->distance}}">
      </div>
      <div class="form-group mb-4">
        <label for="formGroupExampleInput">Desnivel</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="elevationgain" value="{{$route->elevationgain}}">
      </div>
      <div class="form-group mb-4">
        <label for="formGroupExampleInput2">Tiempo</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="time" value="{{$route->time}}">
      </div>
      <div class="form-group">
        <div class="col-auto my-1 mb-4">
          <label class="mr-sm-2" for="inlineFormCustomSelect">Dificultad</label>

          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="difficulty">
            <option selected>Choose...</option>
            <option value="Muy alta">Muy alta</option>
            <option value="Alta">Alta</option>
            <option value="Media">Media</option>
            <option value="Baja">Baja</option>
          </select>
        </div>
        <div class="form-group mb-4">
          <label for="formGroupExampleInput">Punto de salida</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="location" value="{{$route->location}}">
        </div>


        <div class="form-group mb-4">
          <label for="exampleFormControlFile1">Foto</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" value="{{$route->image}}">
        </div>
        <div class="form-group mb-4">
          <label for="exampleFormControlTextarea1">Descripcion</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$route->description}}</textarea>
        </div>

        <button type="submit" id="save-btn" class="btn btn-primary mt-5 me-2 rounded-pill">Update</button>
    </form>
  </div>

  <div class="d-flex justify-content-center">
    <a href="{{route('routes.index')}}"><button id="save-btn" class="btn btn-primary mt-3 mb-5 me-2 rounded-pill">Listado de rutas</button></a>
  </div>
</div>

@endsection
