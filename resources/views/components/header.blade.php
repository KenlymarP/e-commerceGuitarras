<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>GuitarShop</title>
</head>

<nav class="navbar sticky-top bg-secondary mb-5">
  <div class="container">
    <a class="navbar-brand" href="/shop">
      <img src="{{ asset('storage/imagenes/logov4.png') }}" alt="Logo" width="120" height="50">
    </a>
    <div class="dropdown">
      <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="false"
        aria-expanded="false">
        <img src="{{ asset('storage/imagenes/cart3.svg') }}" alt="Logo" width="25" height="30">
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
        <li class="dropdown-item">
          <div id="carrito">
            <table id="lista-carrito" class="table">
              <thead>
                <tr>
                  <th>
                    Imagen
                  </th>
                  <th>Nombre </th>
                  <th>Precio</th>
                  <th></th>
                </tr>
              </thead>
              <tbody></tbody>

            </table>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<body>
  {{$slot}}
</body>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<script src="{{ asset('js/carrito.js') }}"></script>
<script src="{{ asset('js/pedido.js') }}"></script>



</html>