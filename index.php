<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard KodInw</title>
</head>
<body>
    <h1><center>Webboard KodInw</center> <hr></h1>
    หมวดหมู่ :
    <form>
        <select name="list" >
            <option value="all"> --ทั้งหมด--</option>
            <option value="all"> เรื่องทั่วไป</option>
            <option value="all"> เรื่องเรียน</option>
        </select>
    </form>
    <a href="login.html" style="float: right ;">เข้าสู่ระบบ</a>
    <br><br>
    <form action="post.php" method="get">
        <ul>
            <?php 
                for($i=1; $i<=10; $i++) echo "<li><a href= post.php?id=$i > กระทู้ที่ $i </li></a>";                   
            ?>


            <!-- <li><a href="post.php?id=1">กระทู้ที่ 1</li></a>
            <li><a href="post.php?id=2">กระทู้ที่ 2</li></a>
            <li><a href="post.php?id=3">กระทู้ที่ 3</li></a>
            <li><a href="post.php?id=4">กระทู้ที่ 4</li></a>
            <li><a href="post.php?id=5">กระทู้ที่ 5</li></a> -->


        </ul>
    </form>
</body>
</html>