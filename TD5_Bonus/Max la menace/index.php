<?php
    require_once("../../TD4_Fonctions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="nb1" placeholder="Nombre 1" />
        <input type="number" name="nb2" placeholder="Nombre 2" />
        <input type="number" name="nb3" placeholder="Nombre 3" />
        <input type="number" name="nb4" placeholder="Nombre 4" />
        <input type="number" name="nb5" placeholder="Nombre 5" />
        <button>Récupérer le max</button>
    </form>

    <?php 
        if(isset($_POST["nb1"])){
            if(is_numeric($_POST["nb1"]) && is_numeric($_POST["nb2"]) && is_numeric($_POST["nb3"]) && is_numeric($_POST["nb4"]) && is_numeric($_POST["nb5"]))
                echo maxValue([intval($_POST["nb1"]), intval($_POST["nb2"]), intval($_POST["nb3"]), intval($_POST["nb4"]), intval($_POST["nb5"])]);
            else 
                echo "<p>On a dit que des chiffres !</p>";
        }
    ?>
</body>
</html>