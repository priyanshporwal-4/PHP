<body>
    <form method="post">
        <center>
            <input type="number" name="num" /></br></br>
            <input value="submit" type="submit" name="submit" /></br></br>
    </form>

    <?php

    use CustomExceptionHandler as GlobalCustomExceptionHandler;

    if (isset($_POST['submit'])) {
        $num = $_POST['num'];

        class CustomExceptionHandler extends Exception
        {
        }
        function testNumIsDividedByTwo($num)
        {
            try {
                throw new RuntimeException();
            } catch (Exception $e) {
                //Log error

                //Re-throw
                throw $e;
            }
        }
        testNumIsDividedByTwo($num);
    }
    ?>
    </center>
</body>