<?php   
    $title = 'Foor Loop';
    include './includes/header.php'   
?> 
    
    <h1>For Loop Statements</h1>

    <?php

    // For Loops
    for($count=0; $count <10; $count++){
        echo "<p>HELLO WORLD!!</p>";
    }


    for($count=0; $count <10; $count++){
        echo "<p>Number = $count </p>";
    }


    ?>


<?php   require './includes/footer.php'   ?> 