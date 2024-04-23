<!Doctype html>
<html >
    <head>
        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="screen"/>
        <title>SDP - Codigo</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
    </head>
    <body>
        <section class="Center">
            <p><h3>SOFTWARE DE PANADERIA !Bienvenido!</h3></p>
            <div>
                <label for="codigo">Ingresa el codigo</label>
                <br>
                <input type="number" id="codigo" name="codigo">
                <form method="get" action="{{url('/inicio')}}">
                    <button type="submit">Ingresar</button>
                </form>
            </div>
        </section>
    </body>
</html>