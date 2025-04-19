<?php   
    $title = 'While Do-While Loop';
    include './includes/header.php'   
?> 
    
    <h1>WHILE Loop </h1>
    <?php
        $grade = 0;

        // Pre-Condition Loop
        while($grade < 10){
            echo '<p>I AM LESS THAN 10 </p>';
            $grade++;
        }

        echo 'Exit Loop!';

    ?>


    <h1>Do-WHILE Loop </h1>

    <?php

        $grade = 5;
        // Post-Condition Loop
        do{
            echo '<p>I AM DO WHILE LOOP </p>';
            $grade++;
        }while($grade <10);

        echo 'Exit Loop!';
    ?>



<?php   require './includes/footer.php'   ?> 