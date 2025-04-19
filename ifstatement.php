<?php   
    $title = 'If Statement';
    include './includes/header.php'   
?> 


        <h1>If-Else Statements</h1>

        <?php

        // An If statement that will carry out an action based on the value of the variable.

        echo "<h2>If Statement</h2>";

        $grade = 58;

        if ($grade >= 50) {
            echo "<h3 style='color:green'>You have Passed</h3>";
        } else {
            echo "<h3 style='color:red'>You have Failed</h3>";
        }


        $grade = 'Z';

        if ($grade == 'A') {
            echo "<h2 style='color:green'>YOU ARE A SUPERSTAR!</h2>";
        } elseif ($grade == 'B'){
            echo "<h2 style='color:green'>YOU DID WELL!</h2>";
        } elseif ($grade == 'C'){
            echo "<h2 style='color:green'>YOU CAN DO IT !</h2>";
        } else {
            echo "<h3 style='color:red'>You have Failed</h3>";
        }




        ?>


<?php   require './includes/footer.php'   ?> 