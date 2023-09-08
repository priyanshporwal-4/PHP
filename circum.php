<?php
function radius($r,&$area,&$circum)
{
$area=(22/7)*$r*$r;
$circum=2*(22/7)*$r;
}
$r=readline("enter radius value");
radius($r,$p,$q);
echo"area =".$p;
echo"circumferance =".$q;
?>


