<?php
    //require ('connect.php');
    session_start();
    require('connect.php');
    if($_SESSION["loginID"]==""){
        header("Location: login.php");
        }
    date_default_timezone_set('Asia/Bangkok');
    $date = date("Y-m-d");
    //--------------random-------------------------
    //$date2 = ("SELECT ppNoOfCard FROM pokerpredict WHERE (pploginID='{$_SESSION['loginID']}'AND ppdate=CURRENT_DATE");
    $date2 = "SELECT ppNoOfCard FROM pokerpredict WHERE ppdate=CURRENT_DATE AND pploginID='{$_SESSION['loginID']}'";
    $result1 =mysqli_query($conn,$date2);
    $check = mysqli_num_rows($result1); 

    if(($check==0)) {
        $num = rand(0,77);
        //record history-------------------------------
        $insert = "INSERT INTO pokerpredict (pploginID,ppNoOfCard,ppdate) VALUE('{$_SESSION['loginID']}',$num ,now())";
        mysqli_query($conn, $insert);
    }
    else{
        $num = 0;
        //echo "asdas;";
        //echo mysqli_num_rows($result1);
        //$result2 = mysqli_query($conn,$date2);
        while($resultarray = $result1->fetch_assoc()){
            $num = (int)$resultarray['ppNoOfCard'];
        }
    }
    //select pokercard-----------------------------
    $result = $conn->query("SELECT cardDescription FROM pokercard WHERE pNoOfCard = $num");
    
?>
<!DOCTYPE html>
<html>
<head>
        <meta  http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatibl" content="ie=edge">
        <title>gypsy_card</title>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
</head>
<style>
body {
  background-color: #fffaf0;
}
.headfont {
    font-family: 'Dancing Script', cursive;
}
p{
    font-size:18px;
    font-family: 'kanit', 'Arial', sans-serif;
}
</style>
<body>
    <div align="center">
        <br> <br> 
        <!-- image of topic-->     
        <img src="https://trello-attachments.s3.amazonaws.com/5e7b049835e5f953513446c8/5e81c3cf24e5e75d1ace7729/c88d65bf5346182273b21f6dcaca0028/gypsy_card2.jpg" width=35% height="35%">
        <br> <br>  
        <!-- img of card-->   
        <img src="pokerCardImage/<?php echo $num ?>.png" width=10% height="10%">
        <br> <br>
        <!--prophecy-->   
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col-6">
                    <div style="border: #000000;background-color:#FFFFFF">
                        <br>
                         <div align="left">
                            <?php
                                $query = "SELECT cardDescription FROM pokercard WHERE pNoOfCard = $num";
                                $result = mysqli_query($conn,$query);
                                if($result){
                                    while($row = $result->fetch_assoc()) {
                                        echo $row["cardDescription"]. "<br>";
                                        
                                    }
                                }
                                else{
                                    echo "No data";
                                }     
                         ?>
                         </div>
                         <br> <br> <br>  
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
        <br> 
        <!-- botton link to menu-->    
        <a onClick ="window.location='index.php'"><button type="button" class="btn btn-lg btn-warning">menu</button>
    </div> 
</body>
</html>