$<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
<style>
 .logUpea{
    alt: 50px;
    width: 60px;
    text-align: right;
}   
.cabecera{
    text-align: center;
}
.destinatario{
    width: 400px; /* Ancho del recuadro */
    padding-left: 20px; /* Espacio a la izquierda */
    padding-right: 50%; /* Espacio a la derecha */
    font-size: 14px;
    text-align: left;
    font-family: Helvetica, sans-serif;
}
.ref{
    width: 480px; /* Ancho del recuadro */
    padding-left: 35%; /* Espacio a la izquierda */
    padding-right: 20%; /* Espacio a la derecha */
    font-size: 14px;
    text-align: left;
    font-family: Helvetica, sans-serif;
}

.body{
    text-align: center;
}
.cite{
    text-align: center;
}
.suscrito{
    text-align: right;
}
.pie{

    position: absolute;
            bottom: 0;
            width: 100%;
            padding: 10px;
            text-align: center;
   
}
.contenido{
    
    padding-left: 8%; /* Espacio a la izquierda */
    padding-right: 8%; /* Espacio a la derecha */
    font-size: 14px;
    text-align: justify;
    font-family: Helvetica, sans-serif;
}
.table{
    text-align: center;
    font-family: Helvetica, sans-serif;
    font-size: 12px;
    border-collapse: collapse;
}
.table th{
    background-color: mediumvioletred;
}

.table th, .table td {
    border: 1px solid #ddd; /* Bordes de las celdas */
    padding: 8px; /* Espacio interior de las celdas */
}
</style>


    </head>
    <div class="cabecera">
        <img class="logUpea" src="assets/logoupea.png" alt="">
        <h2>Universidad Publica de El Alto</h2>
        <h5>Creado por Ley 2115 del 5 de Septiembre de 2000 y Autonoma por Ley 2556 del 12 de Noviembre de 2003</h5>
    </div>
    <div class="body">
        <div class="area">
            <h3>AREA CIENCIAS DE LA SALUD <br>
            CARRERA DE ENFERMERIA <br>
            La Paz - El Alto/{{$Msolicitud->fecha_emision}} <br>
            {{$Msolicitud->cite}}</h3>
        </div>
      <div class="destinatario">
            <h3>Señor(a): <br>
                {{$Msolicitud->cargo}} {{$Msolicitud->dirigido}} <br>
                DIRECTOR DEL {{$Msolicitud->establecimiento}}  <br> 
                Presente.-
            </h3>
            <h3 class="ref">Ref.:{{$Msolicitud->ref}}</h3>
      </div>
      <div class="contenido">
        <p>De mi mayor consideracion:</p>
        <p>A tiempo de hacerle llegar un cordial saludo a su distinguida autoridad, deseándole éxitos en las 
            funciones que desempeña.</p>
        <p>La Dirección de la Carrera de Enfermería de la Universidad Pública de El Alto, comprometida con la 
            formación académica y con la finalidad de fortalecer el proceso practico del Estamento Estudiantil 
            como parte de su formación profesional, solicito muy respetuosamente a su autoridad autorización 
            para la realización de prácticas estudiantiles que coordinara la docente responsable con la instancias
             Pertinentes del {{$Msolicitud->establecimiento}} Se detalla al presente. </p>

        <table class="table">
            <thead>
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CARGO</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">DOCENTE</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ASIGNATURA</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">AÑO</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">FECHA DE INICIO <br>Y CULMINACION</th> 
            </tr>
            </thead>
      {{--      <tbody>
                @foreach ($nombramientos as $nombramiento)
                <tr>
                    <td>{{ $nombramiento->grado}}</td>
                    <td>{{ $nombramiento->docente }}</td>
                    <td>{{ $nombramiento->asignatura }}</td>
                    <td>{{ $nombramiento->año }}</td>
                    <td>{{ $nombramiento->año }}</td>
                </tr>
                @endforeach
            </tbody>--}}
        </table>

            <p>Para conocimiento de su autoridad la presente actividad académica está programada para ser desarrollada a partir del 7 de agosto al 24 de noviembre del presente año 2023 en los respectivos turnos de lunes a viernes.</p>
            <p>Agradeciendo de ante mano su gentil aceptación, me despido con la distinción más distinguida. Muy Atentamente,</p>

        
        </div>
    </div>
    <div class="pie">
        <h5>-------------------------------------------------------------------------------------------------------------------------------------- <br>
        Dir.: Av. Sucre A s/n Villa Esperanza   Telf:(591-2) 2-844177-Fax.:(591-2) 2-845800   www.upea.edu.bo</h5>
    </div>
    

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
