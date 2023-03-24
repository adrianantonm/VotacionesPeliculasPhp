<!doctype html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
    <style>
        body{
            padding: 50px;
        }
    </style>
</head>
<body>
    <h1>Votación de la mejor película</h1>

    <form action="index.php" method="post">
        <label for="primera">Todo a la vez en todas partes</label>
        <input type="text" name="primera" id="primera">
        <label for="segunda">Sin novedad en el frente</label>
        <input type="text" name="segunda" id="segunda">
        <label for="tercera">Almas en pena de Inisherin</label>
        <input type="text" name="tercera" id="tercera">

        <button>Votar</button>
        <button>Borrar</button>
    </form>

</body>
</html>

<?php
$primera = $_POST["primera"];
$segunda = $_POST["segunda"];
$tercera = $_POST["tercera"];

if ((is_numeric($primera) && is_numeric($segunda) && is_numeric($tercera))){
    echo "<h1>Resultados</h1>";
    echo "<p>Todo a la vez en todas partes: " . $primera . " votos</p>";





    if ($primera==1){
        echo "<div style='background-color: red; width: 10%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($primera==2){
        echo "<div style='background-color: red; width: 20%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($primera==3){
        echo "<div style='background-color: red; width: 30%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($primera==4){
        echo "<div style='background-color: red; width: 40%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($primera==5){
        echo "<div style='background-color: red; width: 50%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($primera==6){
        echo "<div style='background-color: red; width: 60%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($primera==7){
        echo "<div style='background-color: red; width: 70%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($primera==8){
        echo "<div style='background-color: red; width: 80%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($primera==9){
        echo "<div style='background-color: red; width: 90%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($primera==10){
        echo "<div style='background-color: red; width: 100%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }




    echo "<p>Sin novedad en el frente: " . $segunda . " votos</p>";
    if ($segunda==1){
        echo "<div style='background-color: green; width: 10%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($segunda==2){
        echo "<div style='background-color: green; width: 20%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($segunda==3){
        echo "<div style='background-color: green; width: 30%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($segunda==4){
        echo "<div style='background-color: green; width: 40%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($segunda==5){
        echo "<div style='background-color: green; width: 50%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($segunda==6){
        echo "<div style='background-color: green; width: 60%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($segunda==7){
        echo "<div style='background-color: green; width: 70%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($segunda==8){
        echo "<div style='background-color: green; width: 80%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($segunda==9){
        echo "<div style='background-color: green; width: 90%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($segunda==10){
        echo "<div style='background-color: green; width: 100%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }




    echo "<p>Almas en pena de Inishen: " . $tercera . " votos</p>";
    if ($tercera==1){
        echo "<div style='background-color: blue; width: 10%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($tercera==2){
        echo "<div style='background-color: blue; width: 20%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($tercera==3){
        echo "<div style='background-color: blue; width: 30%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($tercera==4){
        echo "<div style='background-color: blue; width: 40%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($tercera==5){
        echo "<div style='background-color: blue; width: 50%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($tercera==6){
        echo "<div style='background-color: blue; width: 60%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($tercera==7){
        echo "<div style='background-color: blue; width: 70%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($tercera==8){
        echo "<div style='background-color: blue; width: 80%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($tercera==9){
        echo "<div style='background-color: blue; width: 90%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }
    elseif ($tercera==10){
        echo "<div style='background-color: blue; width: 100%; height: 15px; margin-bottom: 15px; margin-top: -25px'></div>";
    }


}
else{
    echo "<h1>Error</h1>";
    echo "<p style='color: red'>Los valores deben ser numéricos</p>";
}
?>