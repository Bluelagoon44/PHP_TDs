

<?php
    if(isset($_POST["email"])){
        if(preg_match("/^(?!.*\.\.)(?!.*\.$)(?!^\.)[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,63}$/", htmlspecialchars($_POST["email"]))){
            echo "<p>Champ email valide</p>";
        }
        else
            echo "<p>Champ email non valide</p>";

        if(preg_match("/^[A-Z]([a-zà-ÿ ]*[\-']?(?! )[a-zà-ÿ ]+)+$/", htmlspecialchars($_POST["firstName"])))
            echo "<p>Champ firstName valide</p>";
        else
            echo "<p>Champ firstName invalide</p>";

        if(preg_match("/^[A-Z]([a-zà-ÿ ]*[\-']?(?! )[a-zà-ÿ ]+)+$/", htmlspecialchars($_POST["lastName"])))
            echo "<p>Champ lastName valide</p>";
        else 
            echo "<p>Champ lastName invalide</p>";

        if(preg_match("/^(\+33|0)[1-9][0-9]{8}$/", htmlspecialchars($_POST["phone"])))
            echo "<p>Champ téléphone valide</p>";
        else 
            echo "<p>Champ téléphone invalide</p>";

        if(preg_match("/^[^<>]*$/", $_POST["message"]))
            echo "<p>Champ message valide</p>";
        else 
            echo "<p>Champ message invalide</p>";
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
    <form method="POST">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="firstName" placeholder="First name">
        <input type="text" name="lastName" placeholder="Last name">
        <input type="tel" name="phone" placeholder="Phone number">
        <textarea name="message" placeholder="Votre message"></textarea>
        <button>Valider</button>
    </form>
</body>
</html>