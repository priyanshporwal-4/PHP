<body>
    <form method="post">
        <center>
            <input type="number" name="num1" /></br></br>
            <input type="number" name="num2" /></br></br>
            <input value="submit" type="submit" name="submit" /></br></br>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        class HandleExceptionInPhp
        {
        }
        function Division($num1, $num2)
        {
            try {
                if ($num2 == 0) {
                    throw new Exception("Num 2 value is Zero, please change it.");
                } else {
                    echo "Division is : ";
                    echo $num1 / $num2;
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        Division($num1, $num2);
    }
    ?>
    </center>
</body>