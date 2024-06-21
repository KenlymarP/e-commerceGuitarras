<x-header>
  <div class="container">
    <section id="ofertas">
      <h2 class="text-center mb-5">Ofertas de la Semana</h2>
      <div class="row mb-5">
        @foreach($ofertad as $oferta)
        <div class="col-md-4">
          <div class="card  h-100 shadow-lg p-3 bg-body-tertiary rounded" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ asset('storage/imagenes/' . $oferta->imagen . '.jpg') }}" class="img-fluid rounded-start"
                  alt="..." style="height: 210px;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h3 class="card-title">{{$oferta->nombre}}</h3>
                  <p class="card-text text-end fs-4">{{$oferta->descuento}}</p>
                  <p class="card-text"><small class="text-body-secondary">{{$oferta->descripción}}</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    <br>
    <div class="row">
      <section id="guitarras" class='col'>
        @if($categoryName)
        <h2 class="text-center mb-5">Guitarras {{$categoryName}}</h2>
        @else
        <h2 class="text-center mb-5">Guitarras</h2>
        @endif
        <div class="row row-cols-1 row-cols-md-3 g-4">
          @foreach($guitarrad as $guitarra)
          <div class="col">
            <div class="card h-100 shadow p-3 bg-body-tertiary rounded" style="width: 18rem;">
              <img src="{{ asset('storage/imagenes/' . $guitarra->imagen . '.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="text-center">{{$guitarra->nombre}}</h3>
                <p class="card-text text-center fs-3 ">{{$guitarra->precio}}&dollar;</p>
                <div class="d-flex justify-content-evenly">
                  <a href="/shop/guitarra/{{$guitarra->id}}" class="btn btn-primary bi bi-search"></a>
                  <button class="btn btn-primary agregar bi bi-cart-plus-fill " data-id="{{$guitarra->id}}"></button>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </section>
      <section class="col col-lg-2" id="filtrar">
        <div class="accordion " id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                aria-controls="panelsStayOpen-collapseOne">
                Categorias
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
              <div class="accordion-body">
                <div class="d-flex flex-column mb-3">
                  @foreach($categories as $category)
                  <a href="/shop/categoria/{{$category->id}}">{{$category->nombre}}</a>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</x-header>