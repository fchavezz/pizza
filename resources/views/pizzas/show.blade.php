
<!DOCTYPE html>
<html>
<head>
    <title>Pizza #{{ $piz->id }}</title>
</head>
<body>
<h1>Pizza# {{ $piz->id }}</h1>
<ul>
    <li>Especialidad: {{ $piz->especialidad }}</li>
    <li>Tamaño: {{ $piz->tamano }}</li>
    <li>Precio: {{ $piz->precio }}</li>
</ul>
</body>
</html>