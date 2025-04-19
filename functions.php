<?php   
    $title = 'Functions';
    include './includes/header.php'   
?> 


    <h1>PHP Functions</h1>

    <?php

    //Defining a Function

    function writeMessage(){
        echo "You really are a nice Person, Have a nice Time.<br/>";
    }
        
    // Calling a Function
    writeMessage();
    writeMessage();
    writeMessage();
    writeMessage();

    // Define Function with Parameters

    function addFunction($num1, $num2){
        $sum = $num1 + $num2;
        echo "The sum of $num1 and $num2 = $sum. <br/>";
    }

    addFunction(5,7);
    $num = 500;

    // Function with Parameters and ability to change value with the & character
    // Passing by value
    
    function changeNum(&$num){
        $num = $num * 5;
    }
    
    changeNum($num);

    echo "The num is : $num. <br/>";


    // Function Prod
    function returnProduct($num1, $num2){
        $prod = $num1 * $num2;
        return $prod;
        //echo "The product of $num1 and $num2 = $prod. <br/>";
    }

    // Calling function
    $prod = returnProduct(10, 20);

     echo "The product is = $prod. <br/>";

    ?>
    

<?php   require './includes/footer.php'   ?> 