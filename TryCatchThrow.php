<?php
$marks = 8;

try{if($marks>10){
    echo $marks."<br>";
}else{
throw new Exception("Enter value greater than 10 ",5);
}}
catch(Exception $e){
    echo $e -> getmessage()."<br>";
    echo $e -> getLine()."<br>";
    echo $e -> getCode()."<br>";
    echo $e -> getFile()."<br>";
}
finally{
    echo "I,m final";
}

?>