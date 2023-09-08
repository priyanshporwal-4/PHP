<?php
function add_sub($a,$b,&$add,&$sub)
{
$add=$a+$b;
$sub=$a-$b;
}
$a=readline("enter first num");
$b=readline("enter second num");
add_sub($a,$b,$p,$q);
echo"addition =".$p;
echo"substraction =".$q;
?>


