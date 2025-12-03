<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $variable = $_POST["swi"];
    switch ($variable) {
        case '2':

            $captcha = $_POST["captcha"];
            if ($captcha == 45) {
                $pass1 = $_POST["pass1"];
                $pass2 = $_POST["pass2"];
                if ($pass1 == $pass2) {
                    echo  $_POST["username"];
                    echo "<br>";
                    echo  $_POST["pass1"];
                    echo "<br>";
                    echo  $_POST["f_name"];
                    echo "<br>";
                    echo  $_POST["l_name"];
                    echo "<br>";
                    echo  $_POST["day"];
                    echo "<br>";
                    echo  $_POST["month"];
                    echo "<br>";
                    echo  $_POST["year"];
                } else {
                    echo '<p style="color:red">   رمز عبور یکسان نمی باشد ، دقققت کن!!!</p>';
                }
            } else {
                echo '<p style="color:red"> سوال امنیتی اشتباه می باشد ، دقققت کن!!!</p>';
            }

            break;
        case '3':
            echo "B";
            break;
        case '4':
            echo "C";
            break;
        case '5':
            echo "E";
            break;
        default:
            echo "unKnow";
            break;
    }


    ?>

</body>

</html>