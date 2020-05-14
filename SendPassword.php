<html>
<head>
<title>
</title>
</head>
<body>
    <?php
        require('connect.php');
        if(isset($_REQUEST['email'])){
        $email=stripcslashes($_REQUEST['email']);
        $email=mysqli_real_escape_string($conn,$email);
        $strSQL="SELECT *FROM user WHERE email='$email'";
        $objQuery =mysqli_query($conn,$strSQL);
        $objResult = mysqli_fetch_array($objQuery);
        if(!$objResult)
        {
            echo "Not Found Username or Email!";
        }
        else
        {
            echo "Your password send successful.<br>Send to mail : ".$objResult["email"];
            $strTo = $objResult["email"];
            $strSubject = "Your Account information username and password.";
            $strHeader = "Content-type: text/html; charset=windows-874\n";
            $strHeader .= "From: www.doodoung.com ";
            $strMessage = "";
            $strMessage .= "HELLO : ".$objResult["uname"]."<br>";
            $strMessage .= "ID : ".$objResult["loginid"]."<br>";
            $strMessage .= "Password : ".$objResult["passwords"]."<br>";
            ini_set('SMTP', "server.com");
            ini_set('smtp_port', "25");
            ini_set('sendmail_from', "klungnaja@gmail.com");
            $flgSend = mail($strTo,$strSubject,$strMessage,$strHeader);
        }
        }
        else {
            echo "error";
        }
    ?>

</body>
</html>