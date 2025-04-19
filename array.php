<?php   
    $title = 'Array';
    include './includes/header.php'   
?> 

    <h1>Arrays</h1>

    <?php
        // a variable
        $num = 3;

        /// an array
        // Only one datatype
        $numbers = array (1,2,3,4,5,6,7,8,9,10,11,22,25,29,31,33);
        $size = count(value: $numbers);

        echo "<p>Array Numbers is size : $size</p>";

        echo $numbers[5];

        echo "<p> $numbers[9]</p>";

        for($count = 0; $count < $size; $count++){
            echo "<p> Item:$count   Value: $numbers[$count]</p>";
        }
    ?>

<?php   require './includes/footer.php'   ?> 