<?php 
    session_start();
    if(isset($_SESSION['id'])) header("location:index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <h1><center>สมัครสมาชิก</center></h1>
    <hr>
    <center><table style="border: 2px solid black; width: 40%;" align="center">
        <tr><td style="background-color: #6cd2fe;" colspan="2"> กรอกข้อมูล</td></tr>
        <tr><td>ชื่อบัญชี:</td> <td><input type="text" name="login" size="40"></td></tr>
        <tr><td>รหัสผ่าน:</td> <td><input type="text" name="Password" size="40"></td></tr>
        <tr><td>ชื่อ-นามสกุล:</td> <td><input type="text" name="Password" size="40"></td></tr>
        <tr><td>เพศ:</td><td><input type="radio" name="gender" value="m">
                                ชาย:<br>
                            <input type="radio" name="gender" value="f">
                                หญิง:<br>
                            <input type="radio" name="gender" value="f">
                                อื่นๆ:<br></td></tr>
        <tr><td>อีเมล:</td> <td><input type="text" name="Password" size="40"></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="สมัครสมาชิก" style="color=lightgreen;"></td></tr>
    </table> <br>
    <a href="index.php" target="_blank"> กลับไปหน้าหลัก </a></center><br>
</body>
</html>