<!DOCTYPE html>

<html>
    <head>
        <title>SDP - Fechas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <style>
        .navbar{
            background-color: orangered;
        }
        .btn{
            background-color: orangered;
            display: flex;
            text-align: end;
        
        }
    </style>
    <body>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
              <a class="navbar-brand text-white" href="">SDP</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{url('/inicio')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                      </svg> Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('/ajustes')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                      </svg> Ajustes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('/')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                        <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
                        <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
                      </svg> Volver</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        <br>
        <div class="text-nowrap bg-body-secondary border" style="width: 10rem;">
            Fecha: 19 Noviembre
        </div>
        <br>
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary" id="btnPrev">&lt;</button>
            <button type="button" class="btn btn-primary" id="btnNext">&gt;</button>
        </div>
        <script>
            document.getElementById('btnPrev').addEventListener('click', function () {
                window.location.href = "{{ url('empl2') }}";
            });
            document.getElementById('btnNext').addEventListener('click', function () {
                window.location.href = "{{ url('empl2') }}";
            });
        </script>
            <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Cargo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha de ingreso</th>
            <th scope="col">Fecha de salida</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1023</th>
            <td>Mesero</td>
            <td>Luis Angel</td>
            <td>6:00 AM</td>
            <td>4:35 PM</td>
            </tr>
            <tr>
            <th scope="row">1025</th>
            <td>Cajero</td>
            <td>Juan David</td>
            <td>7:20 AM</td>
            <td>5:40 PM</td>
            </tr>
            <tr>
            <th scope="row">1515</th>
            <td>Mesero</td>
            <td>Luis Manuel</td>
            <td>2:20 PM</td>
            <td>10:40 PM</td>
            </tr>
            <tr>
            <th scope="row">2051</th>
            <td>Gerente</td>
            <td>Mateo</td>
            <td>6:00 AM</td>
            <td>6:10 PM</td>
            </tr>
        </tbody>
        </table>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html> 