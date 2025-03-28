<?php
    session_start();
    if(isset($_POST["message"])){
        $_SESSION["conversation"][] = htmlspecialchars($_POST["message"]);
    }
    if(isset($_GET["deleteHistory"])){
        $_SESSION["conversation"] = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_SESSION["conversation"])){
            foreach($_SESSION["conversation"] as $message){
                echo "<p>$message</p>";
            }
        }
    ?>
    <form method="POST">
        <textarea placeholder="Votre message" name="message" ></textarea>
        <button>Envoyer</button>
    </form>

    <a href="?deleteHistory=true">Vider l'historique</a>
</body>
</html>