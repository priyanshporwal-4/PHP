<body>
    <form method="post">
        <center>
            <input type="number" name="num" /></br></br>
            <input value="submit" type="submit" name="submit" /></br></br>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];

        class CustomExceptionHandler extends Exception
        {
        }
        function testNumIsDividedByTwo($num)
        {
            try {
                if ($num % 2 == 0) {
                    echo "The provided number is divided by Two.";
                } else {

                    throw new CustomExceptionHandler("Provided number is not divisible by Two.", 1);
                }
            } catch (CustomExceptionHandler $handle) {
                echo $handle->getMessage();
            }
        }
        testNumIsDividedByTwo($num);
    }
    ?>
    </center>
</body>