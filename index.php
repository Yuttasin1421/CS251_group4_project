<?php session_start(); ?>
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
        <link rel="stylesheet" href="css/mystyle.css">
</head>
<body>
    <?php 
        require ('connect.php');
        //include_once("checklogin.php");
        if($_SESSION["loginID"]==""){
                header("Location: login.php");
                }
        else{
        //$loginID=stripcslashes($_REQUEST['loginID']);
        //$loginID=mysqli_real_escape_string($conn,$loginID);
        $query ="SELECT username,email FROM users WHERE loginID='{$_SESSION['loginID']}'";
        //echo $ses_loginid;
        $result =mysqli_query($conn,$query);
        $row=mysqli_fetch_assoc($result);
        ?>
        <div class ="container">
                <div class ="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-4"><img src = "image/menu.jpg" ></div>
                        <div class="col-sm-5"></div>
                </div>
        </div>
        <br>
        <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6" style="background-color:#ffffff">
                <table class="table">
    <tbody>
      <tr>
        <td><a onClick ="window.location='profilepage.php'"><img src ="image/account.jpg"></a></td>
        <td><a onClick ="window.location='daily.php'"><img src ="image/daily.jpg"></td>
        <td><a onClick ="window.location='monthly.php'"><img src ="image/monthly.jpg"></td>
        <td><a onClick ="window.location='yearly.php'"><img src ="image/yearly.jpg"></td>
      </tr>
      <tr>
        <td><a onClick ="window.location='color.php'"><img src ="image/color.jpg"></td>
        <td><a onClick ="window.location='poker.php'"><img src ="image/gypsy_card.jpg"></td>
        <td><a onClick ="window.location='history.php'"><img src ="image/history.jpg"></td>
        <td><a onClick ="window.location='logout.php'"><img src ="image/logout.jpg"></a></td>
      </tr>
      
    </tbody>
  </table>
                </div>
                <div class="col-sm-3"></div>
        </div>
        <?php
        }
        ?>
        <script>
        </script>
        <?php
     //echo'id ',($loginID); ?>    
</body>
</html>