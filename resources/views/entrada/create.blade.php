<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear entradas</title>
</head>
<body>
    <form action="{{ route('entrada.store') }}" method="post">
        @csrf
        <label for="Placa">Placa:</label>
        <input type="text" name="placa">
        <label for="Fecha">Fecha:</label>
        <input type="datetime-local" name="fecha">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
