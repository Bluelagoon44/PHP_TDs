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
        <input type="number" name="HT" />
        <input type="number" name="TVA" />
        <button>Calculer</button>
    </form>

    <?php
        if(isset($_POST["HT"])){
            if(!empty($_POST["HT"]) && !empty($_POST["TVA"])){
                if(is_numeric($_POST["HT"]) && is_numeric($_POST["TVA"])){
                    echo calculTTC(intval($_POST["HT"]), intval($_POST["TVA"]));
                }
                else{
                    echo "<p>On a dit des chiffres</p>";
                }
            }
            else{
                echo "<p>Veuillez renseigner tous les champs</p>";
            }
        }
    ?>
</body>
</html>