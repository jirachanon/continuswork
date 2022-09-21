<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Post</title>
</head>
<body>
    <h1><center>Webboard KodInw</center> <hr></h1>
    <table>
        <tr><td><b>ผู้ใช้ :</b><?php echo $_SESSION['username']; ?><br></td></tr>

        <tr>
            <td><b>หมวดหมู่</b> :</td> 
            <td>
                <select name="list" >
                <option value="all"> --ทั้งหมด--</option>
                <option value="all"> เรื่องทั่วไป</option>
                <option value="all"> เรื่องเรียน</option></select><br>
            </td>
        </tr>

        <tr>
            <td><b>หัวข้อ :</td>
            <td></b><input type="text"></td>
        </tr>

        <tr>
            <td><b>เนื้อหา :</b></td>
            <td><textarea name="" id="" cols="20" rows="2"></textarea><br></td>
        </tr>

        <tr><td><td><input type="submit" value="บันทึกข้แความ"></tr></td>

    </table>
</body>
</html>