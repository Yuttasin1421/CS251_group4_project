<!DOCTYPE html>
<html>
<head>
        <meta  http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatibl" content="ie=edge">
        <title>ประวัติการใช้งาน</title>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/mystyle.css">
</head>
<style>
    table,
th,
td {
	font-size: 20px;
	font-family: "kanit", "Arial", sans-serif;
	border-collapse: collapse;
	border: 1px solid gray;
}
th,
td {
	padding: 20px;
	text-align: center;
}
th {
	background-color: gray;
  color: white;
  font-family: "kanit", "Arial", sans-serif;
}
td {
	background-color: #ffffff;
}
.button {
	background-color: #fdc689;
	border: none;
	color: black;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-family: "kanit", "Arial", sans-serif;
	font-size: 18px;
	margin: 4px 2px;
	cursor: pointer;
}
</style>
<body>
    <?php require('connect.php'); 
    session_start();?>
  <br><br>
  <center><img src="https://trello-attachments.s3.amazonaws.com/5e7b049835e5f953513446c8/5eafd351280d3e8e1c930169/bd4b9c587e35c50e62dc91da31fdedf6/history.png" width="674" height="238">
  <br><br><br></center> 
  <center>
    <table width="40%"; height="30px" >
    <tr>
    <th>DATE</th>
    <th>ACTIVITY</th> 
  </tr>
    <tbody>                    
      <?php 
        //$loginid=($_REQUEST['loginid']);
        $query = "SELECT * FROM colorpredict  WHERE cpLoginID= '{$_SESSION['loginID']}'";
        $result = mysqli_query($conn,$query);
        while($row = $result->fetch_assoc()){
            echo "<tr>"; 
            echo "<td width=70%>".$row['date']."</td>".
                "<td width=30%>" ."color" ;"</td>";
            echo "</tr>";
          }
      ?>
    </tbody>
  </table>
  <br>
  <table width="40%">
    <tr>
    <th>DATE</th>
    <th>ACTIVITY</th> 
  </tr>
    <tbody>                    
      <?php 
        //$loginid=($_REQUEST['loginid']);
        $query = "SELECT * FROM monthpredict  WHERE mpLoginID= '{$_SESSION['loginID']}'";
        $result = mysqli_query($conn,$query);
        while($row = $result->fetch_assoc()){
            echo "<tr>"; 
            echo "<td width=70%>".$row['date']."</td>".
                "<td width=30%>" ."monthpredict" ;"</td>";
            echo "</tr>";
          }
      ?>
    </tbody>
  </table>
    <table width="40%">
    <tr>
    <th>DATE</th>
    <th>ACTIVITY</th> 
  </tr>
  <br>
    <tbody>                    
      <?php 
        //$loginid=($_REQUEST['loginid']);
        $query = "SELECT * FROM daypredict where dpLoginID='{$_SESSION['loginID']}'";
        $result = mysqli_query($conn,$query);
        while($row = $result->fetch_assoc()){
            echo "<tr>"; 
            echo "<td width=70%>".$row['date']."</td>".
                "<td width=30%>" ."daypredict" ;"</td>";
            echo "</tr>";
          }
      ?>
    </tbody>
  </table>
  </table>
  <?php 
  //$loginid=($_REQUEST['loginid']);
  
  if(true) {?>
    <table width="40%">
    <tr>
    <th>DATE</th>
    <th>ACTIVITY</th> 
  </tr>
  <br>
    <tbody>                    
      <?php 
        $query = "SELECT * FROM yearpredict where ypLoginID ='{$_SESSION['loginID']}'";
        $result = mysqli_query($conn,$query);
        while($row = $result->fetch_assoc()){
            echo "<tr>"; 
            echo "<td width=70%>".$row['date']."</td>".
                "<td width=30%>" ."Yearpredict" ;"</td>";
            echo "</tr>";
          }
      ?>
    </tbody>
        </table><?php } ?>
        <?php 
  //$loginid=($_REQUEST['loginid']);
  
  if(true) {?>
    <table width="40%">
    <tr>
    <th>DATE</th>
    <th>ACTIVITY</th> 
  </tr>
  <br>
    <tbody>                    
      <?php $query = "SELECT * FROM colorpredict where cpLoginID='{$_SESSION['loginID']}'";
        $result = mysqli_query($conn,$query);
        while($row = $result->fetch_assoc()){
            echo "<tr>"; 
            echo "<td width=70%>".$row['date']."</td>".
                "<td width=30%>" ."colorpredict" ;"</td>";
            echo "</tr>";
          }
      ?>
    </tbody>
        </table><?php } ?></center>
  <br><br><br>
        <center><a onClick ="window.location='index.php'"><button type="button" class="btn btn-lg btn-warning">menu</button></center>
        </div>
</body>
</html>