<?php
    // TD5
    $red = 255;
    $green = 255;
    $blue = 255;
    $error = "";
    if(isset($_POST["red"])){
        if(is_numeric($_POST["red"]) && is_numeric($_POST["green"]) && is_numeric($_POST["blue"] )){
            if($_POST["red"] < 256 && $_POST["green"] < 256 && $_POST["blue"] < 256 && $_POST["red"] >= 0 && $_POST["blue"] >= 0 && $_POST["green"] >= 0){
                $red = intval($_POST["red"]);
                $green = intval($_POST["green"]);
                $blue = intval($_POST["blue"]);
            }
            else $error = "<p>Veuillez rentrer une valeur comprise entre 0 et 255 !!!</p>";
        }
        else $error = "<p>Veuillez rentrer des nombres</p>";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body{
                background-color : <?= "rgb($red,$green,$blue)" ?>;
            }
        </style>
    </head>
    <body>
        <form method="POST">
            <input type="number" name="red" placeholder="Rouge"/>
            <input type="number" name="green" placeholder="Vert" />
            <input type="number" name="blue" placeholder="Bleu" />
            <button>Valider</button>
        </form>
        <?= $error ? $error : "" ?>
    </body>
</html>