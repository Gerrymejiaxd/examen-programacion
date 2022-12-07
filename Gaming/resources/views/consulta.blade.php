@extends('plantilla')
@section('contenido')


</head>
<body>

<nav class ="navbar navbar-expand-lg navbar-dar bd-dark">
        <div class="container-fluid">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Usuario</th>
                <th scope="col">No.Computadora</th>
                <th scope="col">Tiempo</th>
                <th scope="col">Fecha</th>
            </tr>    
        </thread>
</tbody>
<tr>
    <td>Gerry</td>
    <td>12</td>
    <td>60</td>
    <td>08/11/22</td>
</tr>

<! --Contenido de la pagina-->
    @yield('contenido')

       <footer> ISC Mejia Morales Gerardo {{ date('y')}}</footer>
</body>
</html>