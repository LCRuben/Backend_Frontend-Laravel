<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>show</title>
        <link rel="stylesheet" href="{{ asset('css/styleBackSh.css') }}" type="text/css" />
    </head>
    <body>
        <h1>Show Tickets</h1>
        <div id="enlaces">
                <img src="{{ asset('imagenes/back.png') }}" alt="">
                <a href="{{ url('backend') }}"> Volver</a>
        </div>
        <div id="contenedor">
            <div id="caja">
                <h2>Ticket: {{ $id }}</h2>
                <p>{{ $nombre }}</p>
                <p>{{ $precio }}</p>
                <p>{{ $fecha }}</p>
                <p>{{ $hora }}</p>
            </div>
        </div>
        
    </body>
</html>