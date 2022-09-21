<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard KodInw</title>
</head>

<?php
 if(!isset($_SESSION['id'])) {
?>

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
    <a href="login.php" style="float: right ;">เข้าสู่ระบบ</a>
    <br><br>
    <form action="post.php" method="get">
        <ul>
            <?php 
                for($i=1; $i<=10; $i++) echo "<li><a href= post.php?id=$i > กระทู้ที่ $i </li></a>"             
            ?>
        </ul>
    </form>
</body>
<?php
    }else{
?> 
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
    <div style="float:right;">
        ผู้ใช้งานระบบ: <?php echo $_SESSION["username"]; ?>&nbsp;&nbsp;<a href="logout.php">ออกจากระบบ</a>
    </div><br>
    <a href="newpost.php">สร้างกระทู้ใหม่</a>
    <br><br>
    <form action="post.php" method="get">
        <ul>
            <?php 
                for($i=1; $i<=10; $i++){
                    if(($_SESSION['role'] == 'a')){
                        echo "<li><a href= post.php?id=$i > กระทู้ที่ $i </a>" . "&nbsp;&nbsp;<a href= delete.php?id=$i> ลบ </a></li>";
                    }
                    else echo "<li><a href= post.php?id=$i > กระทู้ที่ $i </li></a>";
                }                    
            ?>
        </ul>
    </form>
</body> 
<?php } ?>
</html>