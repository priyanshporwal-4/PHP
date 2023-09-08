<?php
class OddNumberException extends Exception{}
class Code{
function testEven($num)
{
    try{
        if($num % 2 == 1){
            throw new OddNumberException;
            echo "After throw this will not execute"."<br>";
            
        }
        echo "If tou see this text, the passed value is even number"."<br>";
    }

catch(OddNumbaerException $ex){
    echo "Exception message : ODD Number"."<br>";
}
catch(Exception $e){
    echo "Exception message". $e -> getMessage()."<br>";

}
}function Main(){
echo "output for even number"."<br>";
testEven(28);
echo "<br><br>";
echo "output for odd numbers"."<br>";
testEven(17);}
}
?>