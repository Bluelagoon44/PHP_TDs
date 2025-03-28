<?php
    session_start();
    if(isset($_POST["message"])){
        $_SESSION["conversation"][] = [
            "message" => htmlspecialchars($_POST["message"]), 
            "user" => htmlspecialchars($_POST["user"])
        ];
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
    <link rel="stylesheet" href="index.css" />
</head>
<body>
    <div id="conversation">
        <?php
            if(isset($_SESSION["conversation"])){
                foreach($_SESSION["conversation"] as $message){
                    echo "<p class='" . $message["user"] . "'>" . $message["message"] . "</p>";
                }
            }
        ?>
    </div>
    <form method="POST" action="index.php">
        <textarea placeholder="Votre message" name="message" ></textarea>
        <input type="radio" name="user" id="user1" value="user1" />
        <label for="user1">User 1</label>
        <input type="radio" name="user" id="user2" value="user2" />
        <label for="user2">User 2</label>
        <button>Envoyer</button>
    </form>

    <a href="?deleteHistory=true">Vider l'historique</a>
</body>
</html>