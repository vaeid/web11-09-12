<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body bgcolor="<?php echo $_POST["selected_color"]; ?>">
    <?php

    $captcha = $_POST["captcha"];
    if ($captcha == 17) {

        echo  $_POST["username"];
        echo "<br>";
        echo  $_POST["pass"];
    } else {
        echo "جواب سوال امنیتی اشتباه می باشد";
    }
    ?>
</body>

</html>