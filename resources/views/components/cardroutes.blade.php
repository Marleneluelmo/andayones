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




<!-- <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="{{asset('storage/cantu cabroneru.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card" style="width: 25rem;">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{asset('storage/cantu cabroneru.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a short card.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{asset('storage/cantu cabroneru.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div> -->