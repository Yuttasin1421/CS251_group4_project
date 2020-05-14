<!DOCTYPE html>
<html>
<head>
        <meta  http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatibl" content="ie=edge">  
        <title>registration</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>
    <?php
    require('connect.php');
    if(isset($_REQUEST['loginid'])){
        $loginid = stripcslashes($_REQUEST['loginid']);
        $loginid = mysqli_real_escape_string($conn,$loginid);
        $passwords = stripcslashes($_REQUEST['passwords']);
        $passwords = mysqli_real_escape_string($conn,$passwords);
        $email = stripcslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($conn,$email);
        $uname = stripcslashes($_REQUEST['uname']);
        $uname = mysqli_real_escape_string($conn,$uname);
        $dayss = stripcslashes($_REQUEST['dayss']);
        $dayss = mysqli_real_escape_string($conn,$dayss);
        $dayinweek = stripcslashes($_REQUEST['dayinweek']);
        $dayinweek = mysqli_real_escape_string($conn,$dayinweek);
        $months = stripcslashes($_REQUEST['months']);
        $months = mysqli_real_escape_string($conn,$months);
        $years = stripcslashes($_REQUEST['years']);
        $years = mysqli_real_escape_string($conn,$years);
        $zodiac = stripcslashes($_REQUEST['zodiac']);
        $zodiac = mysqli_real_escape_string($conn,$zodiac);
        $yearZodiac = stripcslashes($_REQUEST['yearZodiac']);
        $yearZodiac = mysqli_real_escape_string($conn,$yearZodiac);
        $query ="INSERT INTO user(loginid,passwords,email,uname,dayss,dayinweek,months,years,zodiac,yearZodiac)
                    VALUE('$loginid','".md5($passwords)."','$email','$uname',$dayss,$dayinweek,$months,$years,'$zodiac','$yearZodiac')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<div class='form'>
                <h2>register successfully</h2>
                <br>Click here to <a href='login.php'>login</a> 
                </div>";
        }  
        else{
?>
        <div class="form">
        <h1>register</h1>
        <form name="registration" action="" methos="POST">
        <input type="text" name = "loginid" placeholder="Username" require><br>
        <input type="text" name = "passwords" placeholder="password" require> <br>
        <input type="text" name = "email" placeholder="E-mail" require><br>
        <input type="text" name = "uname" placeholder="Username" require><br>
        <input type="text" name = "dayss" placeholder="date" require><br>
        <input type="text" name = "dayinweek" placeholder="วันที่เกิด(จ-อา)" require><br>
        <input type="text" name = "months" placeholder="Month" require><br>
        <input type="text" name = "years" placeholder="Year" require><br>
        <input type="text" name = "zodiac" placeholder="ราศี" require><br>
        <input type="text" name = "yearZodiac" placeholder="ปีนักษัตร" require><br>
        <input type ="submit" name="submit" value="Register"><br>

        </form>
    </div>
        <?php  }  ?>
</body>
</html>