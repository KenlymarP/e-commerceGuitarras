<x-header>
  <div class='container'>
    <h1 class="text-center mb-5">{{$guitarrad->nombre}}</h1>
    <div class="row shadow-lg p-3 mb-5 bg-body-tertiary rounded">
      <div class="col-md-6 ">
        <img src="{{ asset('storage/imagenes/' . $guitarrad->imagen . '.jpg') }}" alt="" class="img-fluid">
      </div>
      <div class="col-md-4">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><b>Nombre:</b> {{$guitarrad->marca}}</li>
          <li class="list-group-item"><b>Marca:</b> {{$guitarrad->marca}}</li>
          <li class="list-group-item"><b>Modelo:</b> {{$guitarrad->modelo}}</li>
          <li class="list-group-item"><b>Precio:</b> {{$guitarrad->precio}}$</li>
          <li class="list-group-item"><b>Tipo:</b> {{$nombreCategoria}}</li>
          <li class="list-group-item"><b>Color:</b> {{$nombreCategoria}}</li>
          <li class="list-group-item"><b>Stock:</b> {{$guitarrad->stock}}</li>
        </ul>
        <div class="d-flex justify-content-center">
          <button class="btn btn-primary agregar bi bi-cart-plus-fill " data-id="{{$guitarrad->id}}"> Agregar al
            Carrito</button>
        </div>
      </div>
    </div>
</x-header>