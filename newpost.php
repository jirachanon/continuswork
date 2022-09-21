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
        <tr><b>ผู้ใช้ :</b><?php echo $_SESSION['username']; ?><br></tr>
    <td align = "center">
        <tr><b>หมวดหมู่</b> : 
            <select name="list" >
            <option value="all"> --ทั้งหมด--</option>
            <option value="all"> เรื่องทั่วไป</option>
            <option value="all"> เรื่องเรียน</option>
            </select><br></tr>

        <tr><b>หัวข้อ :</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"><br></tr>

        <tr><b>เนื้อหา :</b> &nbsp;&nbsp;&nbsp;&nbsp;<textarea name="" id="" cols="20" rows="2"></textarea><br></tr>

        <td><tr> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="บันทึกข้แความ"></tr></td>
    </td>

    </table>
</body>
</html>