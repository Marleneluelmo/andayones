<div>
@foreach ($routes as $route)
 
<div class="card mb-5 mt-5" style="width: 19rem;">
 
  <img src="{{ $route->image }}" class="card-img-top rounded-3" alt="cantu cabroneru">
  <div class="card-body">
    <div class="d-flex justify-content-center mb-4 fs-3 fw-bold">{{ $route->name }}</div>
    <!-- <div class="d-flex justify-content-between"> -->
 
    <div class="d-flex flex-column">
      <p class="text-muted fs-6 fw-bold">Distancia {{ $route->distance }} </p>
      <p class="text-muted fs-6 fw-bold">Desnivel {{ $route->elevationgain }} </p>
      <p class="text-muted fs-6 fw-bold">Dificultad {{ $route->difficulty }} </p>
    </div>
  </div>
</div>
 
</div>
@endforeach
</div>