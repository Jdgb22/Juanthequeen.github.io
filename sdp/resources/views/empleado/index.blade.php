<!DOCTYPE html>
<html>
<head>
    <title>SDP - Edición y Borrado de usuario</title>
</head>
<style>
    .navbar{
        background-color: orangered
    }
</style>
<body>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Primer apellido</th>
                <th>Segundo apellido</th>
                <th>Documento</th>
                <th>Contacto</th>
                <th>Fecha de entrda</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado) 
            <tr>
                <td>{{$empleado->id}}</td>
                <td>{{$empleado->nombre}}</td>
                <td>{{$empleado->apellidop}}</td>
                <td>{{$empleado->apellidom}}</td>
                <td>{{$empleado->cedula}}</td>
                <td>{{$empleado->contacto}}</td>
                <td>{{$empleado->fechadeentrada}}</td>
                <td>
                    <a href="{{url('/empleado/'.$empleado->id.'/edit')}}">
                        Editar 
                    </a>
                    <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
                    @csrf
                    {{ method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('Seguro quieres borrar este usuario')" value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>