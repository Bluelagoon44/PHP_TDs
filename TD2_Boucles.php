<?php
// EXO 1
    echo "<h2>EXO 1</h2>";
    for($i=1 ; $i<=5 ; $i++){
        echo "<p>$i</p>";
    }

// EXO 2
    echo "<h2>EXO 2</h2>";
    $number = 1;
    do{
        $lastNumber = $number;
        $number = rand(1,9);
        echo $number;
    }while(!($number%2 !== 0 && $lastNumber%2 === 0));

// EXO 3
    echo "<h2>EXO 3</h2>";
    $number = 777;
    $counter = 0;
    $random = 0;
    while($random !== $number){
        $random = rand(100,999);
        $counter++;
    }

    $number = 777;
    $counter = 0;
    for($random = 0 ; $random!==$number ; $random = rand(100,999)){
        $counter++;
    }
    echo $counter . "<br>";

// EXO 4
    echo "<h2>EXO 4</h2>";  
    $number = 1;
    while($number < 20){
        echo $number <= 10 ? "<p>$number</p>" : "<p>" . 20 - $number . "</p>";
        $number++;
    }