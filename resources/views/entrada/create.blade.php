<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear entrada</title>
</head>
<body>
    <form action="{{ route('entrada.store') }}" method="post">
        @csrf
        <label for="placa">Placa</label>
        <select name="placa" id="placa" required>
            @foreach($vehiculos as $vehiculo)
                <option value="{{ $vehiculo->placa }}">{{ $vehiculo->placa }}</option>
            @endforeach
        </select>

        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" id="fecha" required>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>
