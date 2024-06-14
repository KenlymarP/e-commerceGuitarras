<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guitars</title>
</head>

<body>
  @foreach($guitarrad as $guitarra)
  <div>
    <img src="{{ asset('storage/imagenes/' . $guitarra->imagen . '.jpg') }}" alt="" width="300" height="200">
    <p>{{$guitarra->nombre}}</p>
    <p>{{$guitarra->precio}}<span>&dollar;</span></p>
    <a href="/shop/guitarra/{{$guitarra->id}}" class="btn btn-primary">Ver Detalles</a>
  </div>
  @endforeach
</body>

</html>