<?php require('connect.php');
session_start();
$username = mysqli_real_escape_string($conn,$_POST['username']);
$dayBirth = mysqli_real_escape_string($conn,$_POST['dayBirth']);
$dayInWeek = mysqli_real_escape_string($conn,$_POST['dayInWeek']);
$month = mysqli_real_escape_string($conn,$_POST['month']);
$year = mysqli_real_escape_string($conn,$_POST['year']);
$zodiac = mysqli_real_escape_string($conn,$_POST['zodiac']);
$yearZodiac = mysqli_real_escape_string($conn,$_POST['yearZodiac']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$query = "UPDATE users SET username='$username',dayBirth='$dayBirth',
dayInWeek='$dayInWeek',month='$month',year='$year',zodiac='$zodiac',yearZodiac='$yearZodiac',email='$email'
WHERE loginID='{$_SESSION['loginID']}'";
$result = mysqli_query($conn, $query) or die ("Error in query: $sql " . mysqli_error());
if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Successfully');";
	echo "window.location = 'profilepage.php'";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
        echo "window.location = 'profilepage.php' ";
	echo "</script>";
}
?>