<?php
$marks = 10;

try{if($marks>10){
    echo $marks."<br>";
}}
catch(Exception $e){
    echo $e -> getmessage();

}
finally{
    echo "I,m final";
}
