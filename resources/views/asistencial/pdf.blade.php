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

.body{
    text-align: center;
}
.cite{
    text-align: left;
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

</style>


    </head>
    <div class="cabecera">
        <img class="logUpea" src="assets/logoupea.png" alt="">
        <h2>Universidad Publica de El Alto</h2>
        <h5>Creado por Ley 2115 del 5 de Septiembre de 2000 y Autonoma por Ley 2556 del 12 de Noviembre de 2003</h5>
    </div>
    <div class="body">
    <h1>AREA CIENCIAS DE LA SALUD</h1>
    <h2>CARRERA DE ENFERMERIA</h2>
    <h4 class="cite">CERT-ENF-N° 01/2023</h4>
    <p class="suscrito">La suscrita M.Sc. Beatriz Condori Cachaca <br>
        Directora de la Carrera de Enfermeria de <br>
         La Universidad Publica de EL Alto, en uso <br>
         de sus a tribuciones conferidas por el <br>
          Estatuto Organico de la U.P.E.A. y en <br>
        en cuanto pueda confiere el presente. </p>

    <h1>CERTIFICADO DE DOCENTE ASISTENCIAL</h1>
    <h2>A:CARGO NOMBRES Y APELLIDOS</h2>
    <p>Por su desprendida labor desempeñada en bien de la Carrera de Enfermería de la <br>
         Universidad Pública de El Alto, demostrando en todo momento un alto sentido de <br>
         colaboración en la formación académica de los estudiantes que realizaron sus prácticas <br>
         del Internado Rotatorio como parte de su formación profesional en el <br>
         HOSPITAL MUNICIPAL BOLIVIANO HOLANDÉS gestión 2023. <br><br>

        Es cuanto certifico en honor a la verdad para fines que convengan a la interesada. <br>
    El Alto, 23 de enero de 2024</p>

    <table class="table align-items-center mb-0">
        <thead>
          <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nombres y Apellidos</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Genero</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cargo</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CI</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Celular</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha Inicial</th> 
          </tr>
        </thead>
        <tbody>
          @foreach ($asistenciales as $asistencial)
          <tr>
            <td>
              <div class="d-flex px-2 py-1">
                  {{--mini foto--}}
                <div>
                  <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                </div>
                <div class="d-flex flex-column justify-content-center">
                  {{$asistencial->id}}
                </div>
              </div>
            </td>
              <td>{{$asistencial->nombre}}</td>
              <td>{{$asistencial->genero}}</td>
              <td>{{$asistencial->cargo}}</td>
              <td>{{$asistencial->ci}}</td>
              <td>{{$asistencial->celular}}</td>
              <td>{{$asistencial->fecha_inicial}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
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
