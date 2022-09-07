<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
   <h1 align = "center ">Webboard KodInw</h1>
   <hr>
   <div align = "center">

        <?php
            $login = $_POST["login"];
            $password = $_POST["password"];

            if($login == "admin" && $password == "ad1234") echo "ยินดีต้อนรับคุณ ADMIN";
            elseif($login == "member" && $password == "mem1234")  echo "ยินดีต้อนรับคุณ MEMBER";
            else echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";

        ?>
        <br>
        <!-- Login = <?php echo "$_POST[login]"; ?> <br>
        Password = <?php echo "$_POST[password]"; ?> -->

        <a href="login.html">กลับไปยังหน้าหลัก</a>
   </div>
</body>
</html>