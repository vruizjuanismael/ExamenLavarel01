<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear vehículo</title>
</head>
<body>
    <form action="{{ route('vehiculo.store') }}" method="post">
        @csrf
        <label for="placa">Placa</label>
        <input type="text" name="placa" id="placa" required>
        
        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" id="modelo" required>
        
        <label for="propietario">Propietario</label>
        <input type="text" name="propietario" id="propietario" required>
        
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
