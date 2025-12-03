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
    <form action="register_controll.php" method="post">
        <input type="text" name="username" placeholder="نام کاربری"><br>
        <input type="text" name="f_name" placeholder="نام"><br>
        <input type="text" name="l_name" placeholder="نام خانوادگی"><br>
        <select name="year">
            <option>سال تولد</option>
            <?php for ($i = 1404; $i >= 1330; $i--) {
                echo '<option value="';
                echo  $i;
                echo  '">';
                echo  $i;
                echo '</option>';
            } ?>
        </select>
        <br>
        <select name="month">
            <option>ماه تولد</option>

            <?php
            $months =  array("فروردین",  "خرداد", "تیر", "مرداد", "شهریور", "مهر", "آبان", "آذر", "دی", "بهمن", "اسفند");
            $counter = 1;
            foreach ($months as $x) {
                echo '<option value="';
                echo  $counter;
                echo  '">';
                echo  $x;
                echo '</option>';
                $counter++;
            } ?>
        </select>
        <br>
        <select name="day">
            <option>روز تولد</option>
            <?php for ($i = 1; $i <= 31; $i++) {
                echo '<option value="';
                echo  $i;
                echo  '">';
                echo  $i;
                echo '</option>';
            }
            ?>
        </select>
        <input type="password" name="pass1" placeholder="پسورد را وارد کنید"><br>
        <input type="password" name="pass2" placeholder="تکرار پسور ">
        <br>
        <p>40 + 5 ?</p>
        <input type="number" name="captcha" placeholder="جواب سوال را وارد کنید">
        <input type="number" name="swi">
        <button type="submit">عضویت</button>
    </form>
    <?php
    include("footer.php");
    ?>
</body>

</html>