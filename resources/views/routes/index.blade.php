@extends('layouts.appadmin')

@section('content')
<!-- METODO INDEX muestra la lista de rutas con botón de editar, borrar y añadir-->
<div class="d-flex justify-content-center">
    <!-- añade -->
    <a href="{{route('routes.create')}}"><button id="save-btn" class="btn btn-primary mb-5 rounded-pill">Añadir ruta</button></a>
</div>

<div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Altitud</th>
                <th scope="col">Distancia</th>
                <th scope="col">Desnivel</th>
                <th scope="col">Tiempo</th>
                <th scope="col">Dificultad</th>
                <th scope="col">Punto de salida</th>
                <th scope="col">Descripción</th>
                <th scope="col">Foto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($routes as $route)
            <div class="col">
                <tr>
                    <!-- botón de editar ruta -->
                    <td><a class="p-2" href="{{route('routes.edit', $route)}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                            </svg></a>
                    <!-- botón de borrar ruta -->
                    <td>
                        <form action="{{route('routes.destroy', $route)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type='submit'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg></button>
                        </form>
                    </td>
            </div>
            
            <!-- recupera la info de cada ruta -->
            <th scope="row">{{ $route->id }}</th>
            <td>{{ $route->name }}</a></td>
            <td>{{ $route->altitude }}</td>
            <td>{{ $route->distance }}</td>
            <td>{{ $route->elevationgain }}</td>
            <td>{{ $route->time }}</td>
            <td>{{ $route->difficulty }}</td>
            <td>{{ $route->location }}</td>
            <td>{{ $route->description }}</td>
            <td>{{ $route->image }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

<!-- paginación -->

<div class="d-flex justify-content-center pb-5">
    {{$routes->links()}}
</div>
@endsection