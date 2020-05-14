<?php
  session_start();
  require('connect.php');
  //$loginID = $_REQUEST['loginID'];
  $query = "SELECT yearZodiac FROM users WHERE loginID ='{$_SESSION['loginID']}'";
  $result1 =mysqli_query($conn,$query);
  $row1 = mysqli_fetch_assoc($result1);
  $yearZodiac = $row1 ['yearZodiac'];
  $date = date("Y-m-d");
  $nowyear = date('Y');
  if($_SESSION["loginID"]==""){
    header("Location: login.php");
    }
    //--------------time----------------------
    date_default_timezone_set('Asia/Bangkok');
    $date = date("Y-m-d");
    //.........INSERT to daily predict...................
    $insert = "INSERT INTO yearpredict (ypName,ypYear,yploginID,date) VALUE('$yearZodiac','$nowyear', '{$_SESSION['loginID']}' ,now())";
    mysqli_query($conn, $insert);
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
        <title>Yearly</title>
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
  width: 500px;
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
</style>
<body>
<div align ="center">;
<br><br>
<img src="Yearly_head.jpg" width=30% height="30%">
<?php 
    echo "<div class="."head".">".$yearZodiac."</div>"; 
                   
  $query = "SELECT * FROM year WHERE yName ='$yearZodiac' AND yYear ='$nowyear'";
  $result2 = mysqli_query($conn,$query); ?>
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<table class="table table-borderless">
    <?php
    echo "<tr>";
    echo  "<th><p style=text-align:center><b>-Detail-</b></p>";
    echo "</tr>";
    if($result2){
        while($row = $result2->fetch_assoc()){
          echo "<tr>"; 
          echo "<td>".$row['yearDescription']."</td>";
          echo "</tr>";
        }
      }
                        ?>

</table>
</div>
<div class="ocl-sm-4"></div>
</div>
<center><a onClick ="window.location='index.php'"><button type="button" class="btn btn-lg btn-warning">menu</button></center>
  </div>
</body>
</html>