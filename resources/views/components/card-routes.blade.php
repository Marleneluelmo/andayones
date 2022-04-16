<div>
  <!-- lleva a la página detalle que la busca en web -->
  <a href="/routesdetails/{{ $route->id }}">

    <div class="card card-route mb-5 mt-5 me-5 ms-5" style="width: 19rem;">

      <!-- recoge los datos de la db -->
      <img src="{{ asset('storage/'.$route->image) }}" id="picradius" class="card-img-top">
      <div class="card-body">

        <div id="blacklightcolor" class="d-flex justify-content-center mb-4 fs-4 fw-bold">{{ $route->name }}</div>
        <div class="d-flex flex-column">
          <p class="text-muted fs-6 fw-bold">Distancia {{ $route->distance }} </p>
          <p class="text-muted fs-6 fw-bold">Desnivel {{ $route->elevationgain }} </p>
          <p class="text-muted fs-6 fw-bold">Dificultad {{ $route->difficulty }} </p>
        </div>
      </div>
  </a>

  <!-- favoritos -->
  <div class="d-flex justify-content-end">

    <!-- mira si el usuario está logueado -->
    @if (Auth::check())
    <!-- id de la ruta que se le pasa al favouritescontroller en el store $routeID a traves de la ruta -->
    <a href="/rutas/{{$route->id}}/favoritos/store">
      <!-- busca en la pivot que relaciona usuarios con rutas si está ese usuario, si ya le ha dado a favoritos a esta ruta-->
      @if(!$route->users->contains( Auth::user()->id )) <svg id="greendarkcolor" class="me-3 mb-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
      </svg>
      <!-- si no ha marcado esta ruta como favoritos la marca -->
      @else()<svg id="greenlightcolor" class="me-3 mb-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
      </svg>
    </a>
    @endif
    <!-- si no está logueado lo lleva a la página de login -->
    @else
    <a class="nav-link" href="{{ route('login') }}">
      <svg id="greendarkcolor" class="me-3 mb-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
      </svg>
    </a>
    @endif

    <!-- <i id="heart" class="fas fa-heart me-3 mb-3"></i> -->
  </div>
</div>
</div>