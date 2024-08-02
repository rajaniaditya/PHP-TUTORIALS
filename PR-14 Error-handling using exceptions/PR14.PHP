<?php
    echo "<h1> Error-Handling Using Exception </h1>";
    echo "<h3>";
    try{
        $a = 2;
        $b = -1;
        if($a < 0 || $b < 0){
            throw new Exception("Entered Number is less than 0!");
        } else {
            echo $a*$b;
        }
    } catch(Exception $ex) {
        echo "Error_Message -> ".$ex->getMessage()."<br>";
        echo "Error_Code -> ".$ex->getCode()."<br>";
        echo "Error_File -> ".$ex->getFile()."<br>";
        echo "Error At Line -> ".$ex->getLine()."<br>";
    }
    echo "</h3>";
?>
