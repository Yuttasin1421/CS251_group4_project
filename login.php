<!DOCTYPE html>
<html>
<head>
        <meta  http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatibl" content="ie=edge">
        <title>Login</title>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" href="css/mystyle.css">
</head>
<style>
.headfont {
    font-family: 'Dancing Script', cursive;
}
</style>
<body>
    <?php
    require('connect.php');
    session_start();
    if(isset($_POST['loginID'])){
        $loginID = mysqli_real_escape_string($conn,$_POST['loginID']);
        $password =($_POST['password']);
        //$password=md5($password);
        $query = "SELECT * FROM users WHERE loginID ='$loginID' AND (password)=('$password')";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result)){
            $_SESSION['loginID']=$row['loginID'];
            header("Location:index.php");?>
            <?php
        }
        else{
            echo '<script type="text/javascript">
            swal("loginไม่สำเร็จ","", "error");
            </script>';
            echo '<meta http-equiv="refresh" content="1;url=login.php" />';
        }
    }
    else{
        ?>
        <div class="container">
        <div class="row">
        <div class="col-sm-3"><!--<p class="headfont">Hello</p>--></div>
        <div class="col-sm-9"><img src="image/dooduang.jpg" width="500" height="200"></div>
        </div>
        <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class ="form-group">
                    <form action="" method="post" name="login">
                    <input type="text" class="form-control" name=loginID placeholder="username" required>
                    <br><input type="password" class="form-control" name=password placeholder="password" required>
                    <div align="right">
                    <a href='ForgotPassword.php'>forgot password</a>
                    </div>
                    <br>
                    <input type="submit"class="btn btn-warning btn-block" name=submit value="LOGIN">
            </form>
            <br>
            <div align="center">
                    <p>or</p>
                    </div>
                    <button onclick="window.location.href = 'Registration_form.php';" class="btn btn-outline-warning  btn-block">CREATE ACCOUNT</button>
            </div>
        </div>
        </div>
        <div class="col-sm-4"></div>
        </div>
    <?php } ?>
</body>
</html>