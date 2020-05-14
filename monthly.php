<?php
  session_start();
  require('connect.php');
    $query = "SELECT zodiac FROM users WHERE loginID = '{$_SESSION['loginID']}'";
    $result1 =mysqli_query($conn,$query);
    $row1 = mysqli_fetch_assoc($result1);
    $zodiac = $row1['zodiac'];
    $date = date("Y-m-d");
    $nowmonth = date('m');
    if($nowmonth==1)
      $nowmonth="January";
    else if($nowmonth==2)
      $nowmonth="February";
    else if($nowmonth==3)
      $nowmonth="March";
    else if($nowmonth==4)
      $nowmonth="April";
    else if($nowmonth==5)
      $nowmonth="May";
    else if($nowmonth==6)
      $nowmonth="June";
    else if($nowmonth==7)
      $nowmonth="July";
    else if($nowmonth==8)
      $nowmonth="August";
    else if($nowmonth==9)
      $nowmonth="September";
    else if($nowmonth==10)
      $nowmonth="October";
    else if($nowmonth==11)
      $nowmonth="November";
    else if($nowmonth==12)
      $nowmonth="December";
    if($_SESSION["loginID"]==""){
      header("Location: login.php");
      }
    //--------------time----------------------
    date_default_timezone_set('Asia/Bangkok');
    //.........INSERT to daily predict...................
    $insert = "INSERT INTO monthpredict(mpLoginID,mpZodiac,mpMonth,date) VALUE('{$_SESSION['loginID']}','$zodiac','$nowmonth',now())";
    mysqli_query($conn, $insert);
    $result = mysqli_query($conn,$insert);
    // if(mysqli_query($conn, $INSERT)){
    //     //echo "Records inserted successfully.";
    // } else{
    //     echo "ERROR: Could not able to execute $INSERT. " . mysqli_error($dbname);
    // }
?>
<!DOCTYPE html>
<html>
<head>
        <meta  http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatibl" content="ie=edge">
        <title>month</title>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
</head>

<style>
body {
  background-color: #fffaf0;
  margin: 0;
}
p{
    font-size:20px;
    font-family: 'THAMMASAT';
}
div.head{
  background-color: #d7dfdf;
  width: 800px;
  padding: 20px;
  margin: 10px;
  border-radius: 10px;
  font-size:30px;
}
td {
  background-color: #ffffff;
  width: 800px;
  height: 400px;
  border-spacing: 10px;
  padding: 10px;
  border-radius: 30px;
  border: 50px solid #fffaf0;
}
th{
  background-color: #ffffff;
  padding: 5px;
  border: 50px solid #fffaf0;
}
}
a{
  background-color: #fdc689 ;
  color: black;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 5px;
  font-family: 'THAMMASAT';
  font-weight: bold;
}
</style>
<body>
<div align ="center">;
<br><br>
<img src="Monthly_head.jpg" width=30% height="30%">
<?php 
    echo "<div class="."head".">".$zodiac."</div>"; 
                        ?>
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<table class="table table-borderless">
    <?php 
    $query = "SELECT careerDesC, moneyDesC, love ,health FROM month WHERE mZodiac ='$zodiac' AND mMonth = '$nowmonth'";
    $result2 = mysqli_query($conn,$query);
    echo "<tr>";
    echo  "<th><p style=text-align:center><b>love</b></p>". "<th><p style=text-align:center><b>career</b><p>".
          "<th><p style=text-align:center><b>money</b><p>". "<th><p s tyle=text-align:center><b>health</b><p>";
    echo "</tr>";
    if($result2){
        while($row2 = $result2->fetch_assoc()){
          echo "<tr>"; 
          echo  "<td>".$row2['love']."</td>".
                "<td>".$row2['careerDesC']."</td>".
                "<td>".$row2['moneyDesC']."</td>".
                "<td>".$row2['health']."</td>";
          echo "</tr>";
        }
    }
?>
</table>
</div>
<div class="col-sm-3"></div>
</div>
<center><a onClick ="window.location='index.php'"><button type="button" class="btn btn-lg btn-warning">menu</button></center>
  </div>
</body>
</html>