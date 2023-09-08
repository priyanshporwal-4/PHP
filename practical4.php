<body>
    <form method="post">
        <center>
            Enter no : <input type="number" name="num" /></br></br>
            Enter URL : <input type="text" name="url" /></br></br>
            Enter Mail : <input type="text" name="mail" /></br></br>
            <input value="submit" type="submit" name="submit" /></br></br>
    </form>

    <?php

    use CustomExceptionHandler as GlobalCustomExceptionHandler;

    if (isset($_POST['submit'])) {
        $num = $_POST['num'];
        $url = $_POST['url'];
        $mail = $_POST['mail'];

        class ImplementsFiltersInPhp
        {
        }
        function Filters($num, $url, $mail)
        {
            $sanitizedNum = filter_var($num, FILTER_SANITIZE_NUMBER_INT);
            echo "Sanitized INT : " . $sanitizedNum;
            echo "</br></br>";

            $sanitizedUrl = filter_var($url, FILTER_SANITIZE_URL);
            echo "Sanitized URL : " . $sanitizedUrl;
            echo "</br></br>";


            $sanitizedMail = filter_var($mail, FILTER_SANITIZE_EMAIL);
            echo "Sanitized EMAIL : " . $sanitizedMail;
            echo "</br></br>";
            if (filter_var($num, FILTER_VALIDATE_INT)) {
                echo "Valid Integer";
                echo "</br></br>";
            } else {
                echo "Invalid Integer";
                echo "</br></br>";
            }

            if (filter_var($url, FILTER_VALIDATE_URL)) {
                echo "Valid URL";
                echo "</br></br>";
            } else {
                echo "Invalid URL";
                echo "</br></br>";
            }

            if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                echo "Valid EMAIL";
                echo "</br></br>";
            } else {
                echo "Invalid EMAIL";
                echo "</br></br>";
            }
        }
        Filters($num, $url, $mail);
    }
    ?>
    </center>
</body>