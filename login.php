<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include("topbar.php");
    ?>
    <form action="login_controll.php" method="post">
        <input type="color" name="selected_color">
        <input type="text" name="username" placeholder="نام کاربری را وارد کنید">
        <input type="password" name="pass" placeholder="رمز عبور را وارد کنید">
        <p>12+5=?</p>
        <input type="number" name="captcha" placeholder="جواب سوال">

        <button type="submit"> login </button>

    </form>

    <?php
    include("footer.php");
    ?>
</body>

</html>