<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create</title>
    <link rel="stylesheet" href="{{ asset('css/styleBackCreate.css') }}" type="text/css" />
</head>
<body>
    <div id="container">
        <h1>Crear Ticket</h1>
        
        <div id="seccion">
            <form id="formulario" action="{{ url('backend') }}" method="post">
                <h2>Nuevo Ticket</h2>
                @csrf
                <input type="text" class="form" name="nombre" placeholder="Tipo"  value="{{ old('nombre') }}"/>
                <br><br>
                <input type="number" class="form" name="precio" placeholder="Precio €" value="{{ old('precio') }}"/>
                <br><br>
                <input type="date"   class="form" name="fecha"  placeholder="Fecha" value="{{ old('fecha') }}"/>
                <br><br>
                <input type="time"   class="form" name="hora"  placeholder="Hora" value="{{ old('hora') }}"/>
                <br><br>
                <input type="submit" value="Crear Ticket" id="btnSubmit"/>
                
                <input type="checkbox" name="allday" class="allday" id="checkB"> Visita todo el Dia
            </form>
            <img src="{{ asset('imagenes/back.png') }}" alt="">
            <a href="{{ url('backend') }}">Volver</a><br>
        </div>
    </div>
    
</body>
</html>