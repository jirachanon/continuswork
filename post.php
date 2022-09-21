<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1 align = "center" >Webboard KodInw</h1>
    
            <center><?php 

                            $i = $_GET["id"];

                            if($i%2 == 0) echo "ต้องการดูกระทู้หมายเลข  ". $_GET['id'] . "<BR>"."เป็นกระทู้หมายเลขคู่";

                            else echo"ต้องการดูกระทู้หมายเลข  " . $_GET['id'] . "<BR>"."เป็นกระทู้หมายเลขคี่";

                    ?></center><br>

        <div align = "center">
            <table style="border: 2px solid black; width: 40px;" align="center">
                <tr><td style="background-color: #6cd2fe;" colspan="2">แสดงความคิดเห็น</td></tr>
                <tr><td><textarea name="comment" id="" cols="30" rows="5"></textarea></td></tr>
                <tr><td colspan="2" align="center"><input type="submit" value="ส่งความคิดเห็น"></td></tr>
            </table> <br>
            <a href="index.php">กลับไปหน้าหลัก</a>
        </div>

</body>
</html>