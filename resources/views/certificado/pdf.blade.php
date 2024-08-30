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

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<style>

.cuerpo{
    
    padding-left: 30px; /* Espacio a la izquierda */
    padding-right: 30px; /* Espacio a la derecha */
    
}
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
    width: 330px; /* Ancho del recuadro */
    
    padding-left: 50%; /* Espacio a la izquierda */
    padding-right: 20px; /* Espacio a la derecha */
    
    text-align: justify;
    font-family: Helvetica, sans-serif;

}

.parrafo{
    text-align: justify;
    font-family: Helvetica, sans-serif;
    font-size: 16px;
}
.certi{
    text-align: center;
    font-family: Georgia, 'Times New Roman', Times, serif;
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
    <div class="cuerpo">
        <div class="cabecera">
            <img class="logUpea" src="assets/logoupea.png" alt="">
            <h2>Universidad Publica de El Alto</h2>
            <h5>Creado por Ley 2115 del 5 de Septiembre de 2000 y Autonoma por Ley 2556 del 12 de Noviembre de 2003</h5>
        </div>
        <div class="body">
            <h1>AREA CIENCIAS DE LA SALUD</h1>
            <h2>CARRERA DE ENFERMERIA</h2>
            <h4 class="cite">CERT-ENF-N° {{$certificado->cite}}</h4>
            <p class="suscrito">La suscrita M.Sc. Beatriz Condori Cachaca 
                Directora de la Carrera de Enfermeria de
                La Universidad Publica de EL Alto, en uso 
                de sus a tribuciones conferidas por el 
                    Estatuto Organico de la U.P.E.A. y en 
                en cuanto pueda confiere el presente. </p>
                <h1 class="certi">CERTIFICADO DE {{$certificado->caso}}</h1>
                <h2>A:{{$certificado->cargo}} {{$certificado->nombre}}</h2>
                @if($certificado->caso === 'DOCENTE ASISTENCIAL')
                <div class="letras">
                    <p class="parrafo">
                        Por su desprendida labor desempeñada en bien de la Carrera de Enfermería de la 
                        Universidad Pública de El Alto, demostrando en todo momento un alto sentido de 
                        colaboración en la formación académica de los estudiantes que realizaron sus prácticas 
                        del {{$certificado->estudiante_de}} como parte de su formación profesional en el 
                        {{$certificado->establecimiento}} gestión 2023.
                        <br><br>
                        Es cuanto certifico en honor a la verdad para fines que convengan a la interesada.
                    </p>
                    <p>El Alto, {{$certificado->fecha_emision}}</p>
                </div>
            @elseif($certificado->caso === 'AGRADECIMIENTO')
                <div class="letras2">
                    <p class="parrafo">
                        Por brindar su invaluable colaboración, apoyo en la formación académica de los estudiantes 
                        de pre grado de la Carrera de Enfermería de la Universidad Pública de El Alto, que realizaron 
                        sus prácticas en el {{$certificado->establecimiento}} como parte de su formación profesional gestión 2023.
                       
                        <br><br>
                        Es cuanto certifico en honor a la verdad para fines que convengan a la interesada.
                    </p>
                    <p>El Alto, {{$certificado->fecha_emision}}</p>
                </div>
            @endif
        </div>
        <div class="pie">
            <h5>-------------------------------------------------------------------------------------------------------------------------------------- <br>
            Dir.: Av. Sucre A s/n Villa Esperanza   Telf:(591-2) 2-844177-Fax.:(591-2) 2-845800   www.upea.edu.bo</h5>
        </div>
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
