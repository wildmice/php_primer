<?php   
    $title = 'Index';
    include './includes/header.php'   
?> 

    <!-- Basic HTM  -->
    
    <h1>Hello World - PHP Primer</h1>
   
    <!-- PHP Code -->

    <?php

    echo "<p> Hello PHP World!! </p>";
    echo "<p> Second Line </p>";

    ?>


    <?php

    $name = 'Gerardo Alcala';
    $age = 45;

    echo $name;

    echo "<h1>My Name is : $name i have $age years old</h1>"

    ?>

    <button type="button" class="btn btn-dark">Click Me!!</button>

<?php   require './includes/footer.php'   ?> 