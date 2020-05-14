<?php
$query ="SELECT * FROM user WHERE eid='$eid'";
require ('connect.php');
$result = mysqli_query($conn,$query);
if($$query)
$record = mysql_fetch_array($result);
?>
