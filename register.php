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
    <form action="register_controll.php" method="post" id="register_form">
        <input type="text" name="username" id="username" placeholder="نام کاربری"><br>
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
        <input type="password" name="pass1" id="pass1" placeholder="پسورد را وارد کنید"><br>
        <input type="password" name="pass2" id="pass2" placeholder="تکرار پسور ">
        <br>
        <p>40 + 5 ?</p>
        <input type="number" name="captcha" id="captcha" placeholder="جواب سوال را وارد کنید">
        <input type="number" name="swi">
    </form>
    <button onclick="submit_form()">عضویت</button>

    <?php
    include("footer.php");
    ?>
</body>
<script>
    function submit_form() {

        var captcha = document.getElementById("captcha").value;
        if (captcha == 45) {
            var username = document.getElementById("username").value;
            if (username == '') {
                alert('نام کاربری را وارد کنید');
            } else {
                var pass1 = document.getElementById("pass1").value;
                var pass2 = document.getElementById("pass2").value;
                if (pass1 != '' && pass1 == pass2) {

                    document.getElementById("register_form").submit();

                    console.log('ok');
                } else {
                    alert('پسورد و تکرار پسورد را به درستی وارد کنید!');

                }

            }
        } else {
            alert('سوال امنیتی اشتباه است');

        }



    }
</script>

</html>