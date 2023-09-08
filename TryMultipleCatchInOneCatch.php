<?php
class OddNumberException extends Exception{}
class EvenNumberException extends Exception{}
function GiveNumber($num)
{

    try{
        if($num % 2 == 1){
            throw new OddNumberException("The number is odd", 1);
        }
        throw new EvenNumberException("The number is even", 2);
    }
    catch(OddNumberException | EvenNumberException $e)
    {
        $e -> getMessage();
    }
    echo "output for odd";
    GiveNumber(3);
    echo "output for even";
    GiveNumber(4);
}
?>