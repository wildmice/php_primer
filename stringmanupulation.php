<?php   
    $title = 'String Manipulation';
    include './includes/header.php'   
?> 
    
        <h2>PHP String Manupulation - PHP Primer</h2>

        <?php

        // Concatenation of Strings
            $prhase1 = "student who came late";
            $prhase2 = "in class, stand with Rock";

            //$prhase3 = 

            echo $prhase1;
            echo $prhase2;
            echo "<br><br>";

            echo $prhase1 . " - " . $prhase2;
            echo "<br><br><hr/>";


            // String Transforation
            $name = "Gerardo Alcala";
            echo 'Uppercase first letter ' . ucfirst($name) . '<br>';

            echo 'Uppercase first letter of each word ' . ucwords($name) . '<br>';

            echo 'Uppercase ' . strtoupper($name) . '<br>';

            echo 'Lowercase ' . strtolower("THIS WAS ALL UPPER CASE") . '<br>';

            echo "<br><br><hr/>";

            echo 'Repeat String : ' .strtoupper(str_repeat('Gool ',10)) . '<br><br>';


            echo 'Get a Substring ' . substr($name, 2, 10) . '<br>';

            echo 'Get a position of string ' . strpos($name, 'a'). '<br>';


            // Echo Get position of string 
            echo 'Find Character "R" : ' . strchr($name, 'R') . '<br/>';
            echo 'Find Character "r" : ' . strchr($name, 'r') . '<br/>';
            echo 'Find Character "l" : ' . strchr($name, 'l') . '<br/>';
            echo 'Find Character "e" : ' . strchr($name, 'e') . '<br/>';

            echo 'Find Length of String : ' . strlen($name) . '<br/>';

            echo 'Whitout Trim : ' . "A" . " B C D ". "E" . '<br/>';
            
            echo 'Trim spaes on both sides: ' . "A" . trim(" B C D "). "E" . '<br/>';
            echo 'Trim spaes to left: ' . "A" . ltrim(" B C D "). "E" . '<br/>';
            echo 'Trim spaes to right: ' . "A" . rtrim(" B C D "). "E" . '<br/>';

            echo 'Replace string with another: ' . str_replace("stand", "sit", $prhase2) . '<br/>';

        ?>

        
<?php   require './includes/footer.php'   ?> 