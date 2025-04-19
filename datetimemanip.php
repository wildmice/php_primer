<?php   
    $title = 'Date / Time';
    include './includes/header.php'   
?> 
    
    <h1>Hello World - PHP Primer</h1>

    <?php

        $datenow = getdate();
        echo date('Y-M');
        echo '<br/>';


        echo $datenow['mday'] . "</p>";
        echo $datenow['mon'] . "</p>";
        echo $datenow['year'] . "</p>";

        echo "Todays Date : " .  $datenow['mday'] . '/' .  
        $datenow['mon'] . '/' .  $datenow['year'] . '<br/><br/>';

        echo time();



    ?>

<?php   require './includes/footer.php'   ?> 