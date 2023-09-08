<?php

function add()
{
    echo "addition result";
    $num1=readline("enter the value for first number");
    $num2=readline("enter the value for first number");
    $addition=$num1+$num2;
    echo "addition result";
    echo $addition;
}
function max_3()
{
    $num1=readline("enter the value for first number");echo "\n";
    $num2=readline("enter the value for first number");echo "\n";
    $num3=readline("enter the value for first number");echo "\n";
    if($num1>$num2 && $num1>num3)
    {   echo "addition result";
        echo "MAXIMUM NUMBER IS =".$num1;
    }
    else if($num2>$num3 && $num2>$num1)
    {   echo "addition result";
        echo "MAXIMUM NUMBER IS =".$num2;
    }
    else{
        echo "addition result";
        echo "MAXIMUM NUMBER IS =".$num3;

    }
    
}
function factorial()
{
    $last=readline("enter the last number for factorial  =");
    $fact=1;
    for($i=1;$i<$last;$i++)
    {
        $fact=$fact*$i;
    }
    echo "result for factorial".$fact;
}
function swapping(&$n1,&$n2)
{

    $temp;
    $temp=$n1;
    $n1=$n2;
    $n2=$temp;

    echo "numbers after swapping";

}



$p=readline("enter first value");
$q=readline("enter second value");
swapping($p,$q);
echo "first number= ".$p;
echo "second number= ".$q;
?>