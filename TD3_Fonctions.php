<?php
$tableau = ['infos' => ['nom' => 'Pesto', 'prenom' => 'Julia', 'age' => 30],
'films' => ['action' => ['Piège de cristal', 'Mad Max', 'Terminator', 'Matrix'],
            'comédie' => ['Brice de Nice', 'Les Visiteurs', 'Le Dîner de cons', 'Neuilly sa mère !']]];
//VERSION 1
echo "<h2>Versions 1</h2>";
    foreach($tableau["infos"] as $key => $value){
        echo "<p>$key : $value</p>";
    }
    
    foreach($tableau["films"] as $key => $value){
        foreach($value as $movie){
            echo "<p>$key : $movie</p>";
        }
    }
//VERSION 2
echo "<h2>Versions 2</h2>";
    foreach($tableau as $key => $values){
        foreach($values as $keyBis => $valuesBis){
            if(!is_array($valuesBis)) echo "<p>$keyBis : $valuesBis</p>";
            else{
                foreach($valuesBis as $movie){
                    echo "<p>$keyBis : $movie</p>";
                }
            }
        }
    }