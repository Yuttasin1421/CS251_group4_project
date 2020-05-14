<?php
    //require ('connect.php');
    session_start();
    //$loginid=$_REQUEST['loginid'];
    require('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
        <meta  http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatibl" content="ie=edge">
        <title>gypsy card</title>
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
        <!-- image of card-->
        <img src="https://trello-attachments.s3.amazonaws.com/5e7b049835e5f953513446c8/5e81c3cf24e5e75d1ace7729/0e54c26c23f5859643d9f3ec158f3f2e/gypsy_card1.jpg" width=75% height="75%">
        <br> <br> 
            <!-- botton link to prophecy and menu-->   
            <button onclick="window.location.href = 'card.php'" class="btn btn-warning btn-lg">augur</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <a onClick ="window.location='index.php'"><button type="button" class="btn btn-lg btn-warning">menu</button>
    </div> 
</body>
</html>