<?php
    session_start();
    if(!isset($_SESSION["lang"])){
        $_SESSION["lang"] = "fr";
    }
    if(isset($_GET["lang"])){
        $_SESSION["lang"] = htmlspecialchars($_GET["lang"]);
    }
?>

<header>
    <nav>
        <ul>
            <li><a href="index.php">Inscription</a></li>
            <li><a href="accueil.php">Accueil</a></li>
            <li>
                <form method="GET">
                    <input type="hidden" name="lang" value="fr" />
                    <button>
                        <img src="src/img/fr.svg" />
                    </button>
                </form>
            </li>
            <li>
                <a href="?lang=en">
                    <img src="src/img/uk.svg" />
                </a>
            </li>
        </ul>
    </nav>
</header>