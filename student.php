<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:skyblue;"><center>
    <form method="get">
        <pre>Physics Number :</pre><input type="number" name="phy"><br>
       <pre>Mathematics Number :</pre><input type="number" name="maths"><br>
       <pre> Chemistry Number :</pre><input type="number" name="che"><br>
        <pre>English  Number :</pre> <input type="number" name="english"><br>
        <pre>Computer Number :</pre><input type="number" name="comp"><br>
        <pre>Give Maximum Marks Of One Subject :</pre><input type="number" name="total"><br>
        <pre>Give Subject Name For You Want To Know The Information :</pre><input type="text" name="subject"><br><br>             
        <input type="submit" name="submit" value="submit"><br><br>
    </form>
    <?php
    if(isset($_GET['submit']))
    {
        $subject=$_GET['subject'];
        $tot=$_GET['total']; 
        $n1=$_GET['phy'];
        $n2=$_GET['maths'];
        $n3=$_GET['che'];
        $n4=$_GET['english'];
        $n5=$_GET['comp'];
        $total=5*$tot;
        $sum=$n1+$n2+$n3+$n4+$n5;
        $average=$sum/5;
        $percentage=($sum/$total)*100;
        echo "sum        = ".$sum."<br><br>";
        echo "average    = ".$average."<br><br>";
        echo "percentage = ".$percentage."<br><br><br> ";
        switch($percentage)
        {
            case $percentage>=90:echo "Grade = A+<br><br>";echo "OUTSTANDING";
            break;
            case $percentage>=80:echo "Grade = A<br><br>";echo "EXCELLENT";
            break;
            case $percentage>=70:echo "Grade = B+<br><br>";echo "BEST";
            break;
            case $percentage>=60:echo "Grade = B<br><br>";echo "GOOD";
            break;
            case $percentage>=50:echo "Grade = C<br><br>";echo "NEED PRACTICE";
            break;
            case $percentage>=35:echo "Grade = D<br><br>";echo "PASS";
            break;
            case $percentage<35:echo "Grade = E<br><br>";echo "FAIL<br><br>";
            break;
            
        }echo"<br><br>";
        if($subject=="physics" || $subject=="Physics" || $subject=="PHYSICS")
        {
            $percent=($n1/$tot)*100;
            echo "marks of ".$subject." is = ".$n1."<br>";
            echo "percentage of ".$subject." is = ".$percent."<br>";
            switch($percent)
        {
            case $percent>=90:echo "Grade = A+<br><br>";echo "OUTSTANDING";
            break;
            case $percent>=80:echo "Grade = A<br><br>";echo "EXCELLENT";
            break;
            case $percent>=70:echo "Grade = B+<br><br>";echo "BEST";
            break;
            case $percent>=60:echo "Grade = B<br><br>";echo "GOOD";
            break;
            case $percent>=50:echo "Grade = C<br><br>";echo "NEED PRACTICE";
            break;
            case $percent>=35:echo "Grade = D<br><br>";echo "PASS";
            break;
            case $percent<35:echo "Grade = E<br><br>";echo "FAIL<br><br>";
            break;
            
        }
            
        }
        elseif($subject=="maths" || $subject=="MATHS" || $subject=="Maths" || $subject=="Mathematics" || $subject=="MATHEMATICS" || $subject=="mathematics")
        {
            $percent=($n2/$tot)*100;
            echo "marks of ".$subject." is = ".$n2."<br>";
            echo "percentage of ".$subject." is = ".$percent."<br>";
            switch($percent)
        {
            case $percent>=90:echo "Grade = A+<br><br>";echo "OUTSTANDING";
            break;
            case $percent>=80:echo "Grade = A<br><br>";echo "EXCELLENT";
            break;
            case $percent>=70:echo "Grade = B+<br><br>";echo "BEST";
            break;
            case $percent>=60:echo "Grade = B<br><br>";echo "GOOD";
            break;
            case $percent>=50:echo "Grade = C<br><br>";echo "NEED PRACTICE";
            break;
            case $percent>=35:echo "Grade = D<br><br>";echo "PASS";
            break;
            case $percent<35:echo "Grade = E<br><br>";echo "FAIL<br><br>";
            break;
            
        }
            
        }

        elseif($subject=="chemistry" || $subject=="Chemistry" || $subject=="CHEMISTRY")
        {
            $percent=($n3/$tot)*100;
            echo "marks of ".$subject." is = ".$n3."<br>";
            echo "percentage of ".$subject." is = ".$percent."<br>";
            switch($percent)
        {
            case $percent>=90:echo "Grade = A+<br><br>";echo "OUTSTANDING";
            break;
            case $percent>=80:echo "Grade = A<br><br>";echo "EXCELLENT";
            break;
            case $percent>=70:echo "Grade = B+<br><br>";echo "BEST";
            break;
            case $percent>=60:echo "Grade = B<br><br>";echo "GOOD";
            break;
            case $percent>=50:echo "Grade = C<br><br>";echo "NEED PRACTICE";
            break;
            case $percent>=35:echo "Grade = D<br><br>";echo "PASS";
            break;
            case $percent<35:echo "Grade = E<br><br>";echo "FAIL<br><br>";
            break;
            
        }
            
        }
        elseif($subject=="english" || $subject=="English" || $subject=="ENGLISH")
        {
            $percent=($n4/$tot)*100;
            echo "marks of ".$subject." is = ".$n4."<br>";
            echo "percentage of ".$subject." is = ".$percent."<br>";
            switch($percent)
        {
            case $percent>=90:echo "Grade = A+<br><br>";echo "OUTSTANDING";
            break;
            case $percent>=80:echo "Grade = A<br><br>";echo "EXCELLENT";
            break;
            case $percent>=70:echo "Grade = B+<br><br>";echo "BEST";
            break;
            case $percent>=60:echo "Grade = B<br><br>";echo "GOOD";
            break;
            case $percent>=50:echo "Grade = C<br><br>";echo "NEED PRACTICE";
            break;
            case $percent>=35:echo "Grade = D<br><br>";echo "PASS";
            break;
            case $percent<35:echo "Grade = E<br><br>";echo "FAIL<br><br>";
            break;
            
        }
            
        }
        elseif($subject=="computer" || $subject=="Computer" || $subject=="COMPUTER")
        {
            $percent=($n5/$tot)*100;
            echo "marks of ".$subject." is = ".$n5."<br>";
            echo "percentage of ".$subject." is = ".$percent."<br>";
            switch($percent)
        {
            case $percent>=90:echo "Grade = A+<br><br>";echo "OUTSTANDING";
            break;
            case $percent>=80:echo "Grade = A<br><br>";echo "EXCELLENT";
            break;
            case $percent>=70:echo "Grade = B+<br><br>";echo "BEST";
            break;
            case $percent>=60:echo "Grade = B<br><br>";echo "GOOD";
            break;
            case $percent>=50:echo "Grade = C<br><br>";echo "NEED PRACTICE";
            break;
            case $percent>=35:echo "Grade = D<br><br>";echo "PASS";
            break;
            case $percent<35:echo "Grade = E<br><br>";echo "FAIL<br><br>";
            break;
            
        }
            
        }
        else{
            echo "WRONG INPUT--PLEASE CHECK THE SUBJECT NAME";
        }
    }
    ?></center>
</body>
</html>