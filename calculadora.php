
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href=".//estilos.css">
  <script type="text/javascript" src=".//javascript/main.js"></script>
  <title>Diego Huaricallo Fano</title>
  <link rel="stylesheet" href=".//fontello/fontello.css">
</head>





<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $edad = (int)$_POST['edad'];

    $genero = htmlspecialchars($_POST['genero']);
    $peso = (float)$_POST['peso'];
    $altura = (float)$_POST['altura'];

    $perimetro = (float)$_POST['perimetro'];

  



    $imc = $peso / ($altura * $altura);
    $clasificacion_imc = "";

  


    if ($imc < 18.5) {
        $clasificacion_imc = "Bajo peso";
    } elseif ($imc < 24.9) {
        $clasificacion_imc = "Peso normal";
    } elseif ($imc < 29.9) {
        $clasificacion_imc = "Sobrepeso";
    } else {
        $clasificacion_imc = "Obesidad";
    }


    $clasificacion_perimetro = "";
    if ($genero == "hombre") {

        if ($perimetro < 94) {
            $clasificacion_perimetro = "Normal";
        } elseif ($perimetro <= 102) {
            $clasificacion_perimetro = "Aumento del riesgo de problemas metabólicos y cardiovasculares";
        } else {
            $clasificacion_perimetro = "Riesgo significativamente elevado";
        }

    } else {
        if ($perimetro < 80) {
            $clasificacion_perimetro = "Normal";
        } elseif ($perimetro <= 88) {
            $clasificacion_perimetro = "Aumento del riesgo de problemas metabólicos y cardiovasculares";
        } else {
            $clasificacion_perimetro = "Riesgo significativamente elevado";
        }
    }

    echo "<div class='container'>";
    echo "<h1>Resultados de IMC</h1>";
    echo "<p>Nombre: $nombre</p>";

    echo "<p>Correo: $correo</p>";
    echo "<p>Edad: $edad</p>";
    echo "<p>Género: $genero</p>";

    echo "<p>IMC: " . number_format($imc, 2) . " ($clasificacion_imc)</p>";
    echo "<p>Perímetro Abdominal: $perimetro cm ($clasificacion_perimetro)</p>";
    echo "</div>";

} else {

    echo "Método de solicitud no válido.";
    
}
?>




</html>