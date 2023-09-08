<?php
$in=readline("enter the marks");
echo $in."  ";
$marks=(int)$in;

switch($marks)
{
    case ($marks<40):echo "fail";
    break;
    case ($marks<50):echo "pass";
    break;
    case ($marks<60):echo "EXCELLENT";
    break;
    default:break;
}
