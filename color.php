<?php
    //require ('connect.php');
    session_start();
    require('connect.php');
    if($_SESSION["loginID"]==""){
        header("Location: login.php");
        }
    //--------------time----------------------
    date_default_timezone_set('Asia/Bangkok');
    $date =date("Y-m-d");
    $nowyear = date('Y');
    if(!isset($_REQUEST['day'])){ 
    $day = 'Sunday';
    }
    else{
        $day = $_GET['day'];
    }

    $insert = "INSERT INTO colorpredict(cpName,cpDayinWeek,cpYear,cpLoginID,date) VALUE('black','$day','$nowyear','{$_SESSION['loginID']}',now())";
    mysqli_query($conn, $insert);
    $result = mysqli_query($conn,$insert);
    //$date = date('w', strtotime('2013-12-14'));
    //$color = $conn->query("SELECT Color.ColorName,Type.TypeName FROM Color WHERE cDayinWeek = $date INNER JOIN Type ON Color.typeID = Type.typeID ");
   
    //echo $day;
?>
<!DOCTYPE html>
<html>
<head>
        <meta  http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatibl" content="ie=edge">
        <title>Color</title>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <meta charset="utf-8">
        </style>
</head>
<style>
body {
  background-color: #fffaf0;
}
</style>
    <body>
        <!-- head -->  
        <div class="container">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-5">
                    <div class="col-sm-6">
                        <br> <img src="color.jpg" width="350" height="120">
                    </div>
                    <div class="col-sm-6"></div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        <br>
        <!-- botton link to menu-->  
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-sm-">     
                <!-- botton day--> 
                <div align="left">
                    <div class="container">  
                            <div class="row">
                                <br><button class="w3-bar-item w3-button tablink btn btn-light btn-lg" onclick="openCity(event, 'sun','Sunday')">วันอาทิตย์&nbsp;&nbsp;&nbsp;&nbsp;</button>
                            </div>
                            <h6></h6>
                            <div class="row">
                                <br><button class="w3-bar-item w3-button tablink btn btn-light btn-lg" onclick="openCity(event, 'mon','Monday')">วันจันทร์&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                            </div>
                            <h6></h6>
                            <div class="row">
                                <br><button class="w3-bar-item w3-button tablink btn btn-light btn-lg" onclick="openCity(event, 'tue','Tuesday')">วันอังคาร&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                            </div>
                            <h6></h6>
                            <div class="row">
                                <br><button class="w3-bar-item w3-button tablink btn btn-light btn-lg" onclick="openCity(event, 'wed','Wednesday')">วันพุธ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button> 
                            </div>
                            <h6></h6>
                            <div class="row">
                                <br><button class="w3-bar-item w3-button tablink btn btn-light btn-lg" onclick="openCity(event, 'thu','Thursday')">วันพฤหัสบดี</button>
                            </div>
                            <h6></h6>
                            <div class="row">
                                <br><button class="w3-bar-item w3-button tablink btn btn-light btn-lg" onclick="openCity(event, 'fri','Friday')">วันศุกร์&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button> 
                            </div>
                            <h6></h6>
                            <div class="row">
                                <br><button class="w3-bar-item w3-button tablink btn btn-light btn-lg" onclick="openCity(event, 'sat','Saturday')">&nbsp;วันเสาร์&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>  
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
            <div >
                    <div style="border: #000000; background-color:#FFFFFF">   
                        <div >
                            <div class="w3-container city" style="height:400px">
                                <table class="table table-borderless">
                                    <tr>
                                        <?php 
                                        $query="SELECT * FROM color INNER JOIN types ON color.cTypeID =types.typeID WHERE color.cDayinWeek='$day' AND color.ctypeID='1' AND color.cYear='$nowyear' ";
                                        $result = mysqli_query($conn,$query);
                                        $row1 = mysqli_fetch_assoc($result);
                                        $result = mysqli_query($conn,$query);
                                        $rowcount = mysqli_num_rows($result);
                                        if($rowcount==2)
                                        $w=2;
                                        else
                                        $w=1;
                                        while($row=$result->fetch_assoc()){
                                        $bg=$row['cName'];
                                        echo "<td align=center>"."<img src='colorphoto/".$bg.".jpg' width='80' height='75'>"."</td>";
                                        
                                        echo "<td height=100% align=left>"."<h3>".$row1['typeName']."</h3>"."</td>";
                                        }
                                        
                                        ?>
                                    </tr>

                                    <tr>
                                    <?php 
                                        $query="SELECT * FROM color INNER JOIN types ON color.ctypeID =types.typeID WHERE color.cDayinWeek='$day' AND color.ctypeID='2' AND color.cYear='$nowyear' ";
                                        $result = mysqli_query($conn,$query);
                                        $row1 = mysqli_fetch_assoc($result);
                                        $result = mysqli_query($conn,$query);
                                        $rowcount = mysqli_num_rows($result);
                                        if($rowcount==2)
                                        $w=2;
                                        else
                                        $w=1;
                                        while($row=$result->fetch_assoc()){
                                        $bg=$row['cName'];
                                        echo "<td align=center>"."<img src='colorphoto/".$bg.".jpg' width='80' height='75'>"."</td>";
                                        
                                        echo "<td height=100% align=left>"."<h3>".$row1['typeName']."</h3>"."</td>";
                                        }
                                        
                                        ?>
                                    </tr>   
                                    
                                    <tr>
                                        <?php 
                                        $query="SELECT * FROM color INNER JOIN types ON color.ctypeID =types.typeID WHERE color.cDayinWeek='$day' AND color.ctypeID='3' AND color.cYear='$nowyear' ";
                                        $result = mysqli_query($conn,$query);
                                        $row1 = mysqli_fetch_assoc($result);
                                        $result = mysqli_query($conn,$query);
                                        $rowcount = mysqli_num_rows($result);
                                        if($rowcount==2)
                                        $w=2;
                                        else
                                        $w=1;
                                        while($row=$result->fetch_assoc()){
                                        $bg=$row['cName'];
                                        echo "<td align=center>"."<img src='colorphoto/".$bg.".jpg' width='80' height='75'>"."</td>";
                                        
                                        echo "<td height=100% align=left>"."<h3>".$row1['typeName']."</h3>"."</td>";
                                        }
                                        
                                        ?>
                                    </tr>

                                    <tr>
                                    <?php 
                                        $query="SELECT * FROM color INNER JOIN types ON color.ctypeid =types.typeid WHERE color.cDayinWeek='$day' AND color.ctypeid='4' AND color.cYear='$nowyear' ";
                                        $result = mysqli_query($conn,$query);
                                        $row1 = mysqli_fetch_assoc($result);
                                        $result = mysqli_query($conn,$query);
                                        $rowcount = mysqli_num_rows($result);
                                        if($rowcount==2)
                                        $w=2;
                                        else
                                        $w=1;
                                        while($row=$result->fetch_assoc()){
                                        $bg=$row['cName'];
                                        echo "<td align=center>"."<img src='colorphoto/".$bg.".jpg' width='80' height='75'>"."</td>";
                                        
                                        echo "<td height=100% align=left>"."<h3>".$row1['typeName']."</h3>"."</td>";
                                        }
                                        
                                        ?>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            //value = sunday 
                function openCity(evt, cityName,day) {
                var i, x, tablinks;
                x = document.getElementsByClassName("city");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                window.location.href="http://localhost/cs251/color.php?day="+day;
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " w3-red";
                }
        </script>
            

     </script>
        <br><br>
        <!-- botton link to menu-->  
        <div align="center">
        <a onClick ="window.location='index.php'"><button type="button" class="btn btn-lg btn-warning">menu</button>
        </div>
        <br><br>
    </body>
</html>