<?php
    // EXO 1
        $age = 20;
        if($age >= 18)
            echo "<p>Bienvenue sur notre site.</p>";
        else
            echo "<p>Vous n'êtes pas autorisé.</p>";

    // EXO 2
        $nombre = 4;
        if($nombre % 2 === 0){
            echo "<p>Le nombre est pair.</p>";
        }
        else{
            echo "<p>Le nombre est impair</p>";
        }
        echo $nombre % 2 === 0 ? "<p>Le nombre est pair.</p>" : "<p>Le nombre est impair</p>";

    // EXO 3
        $age = 25;
        $salaire = 60000;
        if($age<=30 && $salaire>=50000){
            echo "<p>Admissible à l'emprunt</p>";
        }
        else
            echo "<p>Non admissible à l'emprunt</p>";


    // EXO 4
        $age = 20;
        switch($age){
            case 12:
                echo "<p>Trop jeune</p>";
                break;
            case 16:
                echo "<p>On y est presque !</p>";
                break;
            case 18:
                echo "<p>Bravo !</p>";
                break;
            default:
                echo "<p>Dommage...</p>";
        }
?>