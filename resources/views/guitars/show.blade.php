<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guitars</title>
</head>

<body>

  <div>
    <img src="{{ asset('storage/imagenes/' . $guitarrad->imagen . '.jpg') }}" alt="" width="300" height="200">
    <p><b>Nombre:</b>{{$guitarrad->nombre}}</p>
    <p><b>Precio</b>{{$guitarrad->precio}}<span>&dollar;</span></p>
    <p><b>Marca</b>{{$guitarrad->marca}}</p>
    <p><b>Modelo:</b>{{$guitarrad->modelo}}</p>
    <p><b>Tipo:</b>{{$guitarrad->tipo}}</p>
    <p><b>Color</b>{{$guitarrad->color}}</p>
    <p><b>stock:</b>{{$guitarrad->stock}}</p>
  </div>

</body>

</html>