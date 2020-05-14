<!DOCTYPE html>
<html>
<head>
        <meta  http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatibl" content="ie=edge">  
        <title>profile</title>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet' type='text/css'>
</head>
<style>
body{
  background-color: #fffaf0;
}
.headfont {
    font-family: 'kanit', 'Arial', sans-serif;
}
p{
    style="color:#fff2f1"
    font-family: 'kanit', 'Arial', sans-serif;
}
h2{
    style="color:blue"
    font-family: 'kanit', 'Arial', sans-serif;
}
</style>
<body>
<?php 
        session_start();
        //$loginID = $_GET['loginid'];
        require ('connect.php');
        if($_SESSION["loginID"]==""){
            header("Location: login.php");
            }
        else{
            //$loginID=stripcslashes($_REQUEST['loginID']);
            //$loginID=mysqli_real_escape_string($conn,$loginID);
            //echo $_SESSION['ses_loginid'];
            //$ses_loginid = $_SESSION['loginID'];
            //echo $_SESSION['loginID'];
            $query ="SELECT *FROM users WHERE loginID='{$_SESSION['loginID']}'";
            $result =mysqli_query($conn,$query);
            $row=mysqli_fetch_assoc($result);
            //echo 
        ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8"><img src="myaccount.jpg"></div>
                <div class="col-sm-4"></div>;
            </div>
        </div>
        
        <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                <h4><u>INFORMATION</u></h4>
                <p >name :<b><?php echo " ".$row['username'];?></b></p>
                <p>username :<b><?php echo " ".$row['loginID'];?></b></p>
                <p>day :<b><?php echo " ".$row['dayInWeek'];?></b> date : <b><?php echo " ".$row['dayBirth'];?></b> month : <b><?php echo " ".$row['month'];?></b> year : <b><?php echo " ".$row['year'];?></b>  </p>
                <p>zodiac :<b><?php echo " ".$row['zodiac'];?></b> asterism year : <b><?php echo " ".$row['yearZodiac'];?></b></p>
                <p>mail :<b><?php echo " ".$row['email'];?></b></p>
                </div>
                <div class="col-sm-3"></div>;
        
        </div>
        
        <div class="row">
        <div class="col-sm-5"></div>
        <div class="col-sm-3">
            <td><a onClick ="window.location='editpage.php'"> <button type="button" class="btn btn-primary btn-lg">edit</button> </a><a onClick ="window.location='index.php'"><button type="button" class="btn btn-lg btn-warning">menu</button></td>
        </div>
        <div class="col-sm-4"></div>;
        
        
        </div>
        
        <?php 
        }
        
            ?>
</body>
</html>