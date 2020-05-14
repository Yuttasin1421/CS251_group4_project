<?php require('connect.php');
?>
<html>
<head>
        <meta  http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatibl" content="ie=edge">  
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
    $result=mysqli_query($conn,"SELECT *FROM user");
    $row=$result->fetch_all(MYSQLI_ASSOC);
    echo '<pre>',print_r($row);
    /* while($row=$result->fetch_assoc()){
    echo 'id:',$row['loginid'],' pass:',$row['passwords'],'<pre>';
        //echo 'pre',print_r($row),'</pre>';
}*/
    ?>
</body>
</html>