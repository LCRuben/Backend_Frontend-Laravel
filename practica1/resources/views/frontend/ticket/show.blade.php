<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>show</title>
        <link rel="stylesheet" href="{{ asset('css/styleShowFront.css') }}" type="text/css" />
    </head>
    <body>
        <h1>Comprar Ticket</h1>
        <div id="enlaces">
                <img src="{{ asset('imagenes/back.png') }}" alt="">
                <a href="{{ url('frontend') }}"> Atras</a>
        </div>
        <div id="contenedor">
            <div id="caja">
                <h2>Ticket: {{ $id }}</h2>
                <p>{{ $nombre }}</p>
                <p>{{ $precio }}€</p>
                <p>{{ $fecha }}</p>
                <p>{{ $hora }}</p>
            </div>
            <br><br>
            <form id="formulario">
                <div class="ticketN">Ticket:</div>
                <br>
                <input type="number" id="cantid" name="Cantidad" value="1" class="form"/>
                <br><br>
                <input type="submit" value="Comprar" id="btnComprar"/>
            </form>
        </div>
        
    </body>
</html>