<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/styleBackIndex.css') }}" type="text/css" />
    <title>Index</title>
</head>
<body>
    <div id="container">
        
        <div id="menu">
            <h1>Index</h1>
            <img src="{{ asset('imagenes/admin.png') }}" alt=""><p>Carmelo V.</p>
            <img src="{{ asset('imagenes/ticket.png') }}" alt=""><p><a href="{{ url('backend/create') }}">Crear Nuevo Ticket</a></p>
        </div>
        
        <div id="articulo">
            <table>
                <h3>TICKETS DISPONIBLES</h3>
                <tr>
                    <th>id</th>
                    <th>Tipo</th>
                    <th>Precio</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>In the Morning</td>
                    <td>25€</td>
                    <td>15/11/2020</td>
                    <td>10:00</td>
                    
                    <td><a href="{{ url('backend/1/edit') }}"> Editar </a></td>
                    <td><a href="{{ url('backend/destroy') }}"> Eliminar </a></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>In the Afternoon</td>
                    <td>25€</td>
                    <td>15/11/2020</td>
                    <td>16:00</td>
                    
                    <td><a href="{{ url('backend/2/edit') }}">Editar</a></td>
                    <td><a href="{{ url('backend/destroy') }}">Eliminar</a></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>At Night</td>
                    <td>25€</td>
                    <td>15/11/2020</td>
                    <td>20:00</td>
                    
                    <td><a href="{{ url('backend/3/edit') }}">Editar</a></td>
                    <td><a href="{{ url('backend/destroy') }}">Eliminar</a></td>
                </tr>
                
                <tr>
                    <td>4</td>
                    <td>All day</td>
                    <td>60€</td>
                    <td>15/11/2020</td>
                    <td>10:00 - 23:00</td>
                    
                    <td><a href="{{ url('backend/4/edit') }}">Editar</a></td>
                    <td><a href="{{ url('backend/destroy') }}">Eliminar</a></td>
                </tr>
            <br><br>
        </div>
    </div>
</body>
</html>