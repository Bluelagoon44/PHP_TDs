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
        <input type="number" name="number" />
        <button>Est-il premier ?</button>
    </form>

    <?php 
        if(isset($_POST["number"])){
            if(is_numeric($_POST["number"])){
                $number = intval($_POST["number"]);
                echo prime($number) ? "<p>Il est premier !</p>" : "<p>Il n'est pas premier !</p>";
            }
            else{
                echo "<p>Veuillez rentrer un chiffre !!!!</p>";
            }
        }
    ?>
</body>
</html>