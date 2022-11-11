<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="table.css">
    <title>PACIENTE</title>
</head>
<body>
    <?php /* JHONS CAMPOS Y MIGUEL CHAMORRO 4C */ 
        $nombre = $_POST['nombre'];
        $paterno = $_POST['paterno'];
        $materno = $_POST['materno'];
        $run = $_POST['run'];
        $direccion = $_POST['direccion'];
        $nacionalidad = $_POST['nacionalidad'];
        $edad = $_POST['edad'];
        $estado = $_POST['estado'];
        $sexo = $_POST['sexo'];
        $celular = $_POST['celular'];
        $prevision = $_POST['prevision'];
        $cronico = $_POST['cronico'];
        $atencion = $_POST['atencion'];
        $doctor = $_POST['doctor'];
        $fechahora = $_POST['fechahora'];
        $observaciones = $_POST['observacion'];
    echo '<h1 id="title">Estimad@ ' . $nombre . ' ' . $paterno . ' ' . $materno . ', adjuntamos sus datos personales<br>Datos de su cita para el día: ' . $fechahora . '</h1>
    <div class="divMain">
        <table class="tablePaciente" align="center">
            <tr>
                <td colspan="3"  align="center"><b>DATOS DEL PACIENTE</b></td>
            </tr>
            <tr>
                <td rowspan="6" width="100px"><img src="resources/logooriginal.png"></td>
                <td colspan="2"><b>Nombre: </b>' . $nombre . ' ' . $paterno . ' ' . $materno . '</td>
            </tr>
            <tr>
                <td><b>Edad: </b>' . $edad . '</td>
                <td><b>RUN: </b>' . $run . '</td>
            </tr>
            <tr>
                <td><b>Nacionalidad: </b>' . $nacionalidad . '</td>
                <td><b>Estado civil: </b>' . $estado . '</td>
            </tr>
            <tr>
                <td><b>Sexo: </b>' . $sexo . '</td>
                <td><b>Previsión: </b>' . $prevision . '</td>
            </tr>
            <tr>
                <td><b>Teléfono: +56 9 </b>' . $celular . '</td>
                <td><b>Paciente crónico: </b>' . $cronico . '</td>
            </tr>
            <tr>
                <td colspan="2"><b>Dirección: </b>' . $direccion . '</td>
            </tr>
            <tr>
                <td align="center" colspan="3"  class="yellow"><b>ENFERMEDADES CRÓNICAS</b></td>
            </tr>';
            if (!empty($_POST['enfermedades'])) {
                foreach ($_POST['enfermedades'] as $tableValue) {
                    echo '<tr>
                    <td colspan="3" align="center">' . $tableValue .'</td>
                </tr>';
                }
            }
        echo '</table>
        <table class="tableAtencion" align="center">
            <tr>
                <td colspan="2" align="center"  class="yellow"><b>DATOS DE ATENCIÓN</b></td>
            </tr>
            <tr>
                <td colspan="2"><b>Tipo de atención: </b>' . $atencion .'</td>
            </tr>
            <tr>
                <td><b>Doctor/a: </b>' . $doctor . '</td>
                <td><b>Fecha y hora: </b>' . $fechahora . '</td>
            </tr>
        </table>
    </div>
    <div class="obs">
        <h2>OBSERVACIONES</h2>
        <p>
            ' . $observaciones .'
        </p>
    </div>';
    echo '<center><img src="resources/qrcode.png" style="margin: 0 auto;width: 200px;height: 200px;padding: 10px;border-radius: 20px;"></center>';
    ?>
    <div class="buttons">
        <button class="buttonPrintin" onclick="printin()">IMPRIMIR</button>
        <button class="buttonPrintin" onclick="printinPaciente()">IMPRIMIR<br>Solo paciente</button>
        <button class="buttonPrintin" onclick="printinAtencion()">IMPRIMIR<br>Solo atención</button>
        <button class="buttonPrintin" onclick="printinObservacion()">IMPRIMIR<br>Solo observación</button>
        <script src="index.js"></script>
    </div>
</body>
</html>