<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Ticket</title>
    <link rel="stylesheet" href="{{ asset('css/styleBackEdit.css') }}" type="text/css" />
</head>
<body>
    <div id="container">
        
        <div id="izquierda">
            <h1>EDITAR TICKET</h1>
            
            <form id="formulario" action="{{ url('backend/' . $id) }}" method="post">
                @method('put')
                @csrf
                <p>Id: </p>
                <input type="text"   class="form" name=""      value="{{ $id }}" readonly/>
                <br><br><p>Tipo: </p>
                <input type="text"   class="form" name="nombre"  value="{{ $nombre }}"/>
                <br><br><p>Precio: </p>
                <input type="number" class="form" name="precio" value="{{ $precio }}"/>
                <br><br><p>Fecha: </p>
                <input type="date"   class="form" name="fecha"  value="{{ $fecha }}"/>
                <br><br><p>Hora: </p>
                <input type="time"   class="form" name="hora"  value="{{ $hora }}"/>
                <br><br><br>
                <input type="checkbox" name="allday" class="allday" id="checkB"> Visita todo el Dia
                <br><br>
                <input type="submit" value="Editar" id="btnEdit"/>
            </form>
            
        </div>
        
        <div id="derecha">
            <img src="{{ asset('imagenes/back.png') }}" alt="">
            <a href="{{ url('backend') }}"> Volver</a>
            <br><br>
            <img src="{{ asset('imagenes/ticket2.png') }}" alt="">
            <a href="{{ url('backend/' . $id) }}">Ver Ticket</a>
        </div>
        
    </div>

</body>
</html>