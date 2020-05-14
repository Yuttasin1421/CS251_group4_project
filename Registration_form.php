<!DOCTYPE html>
<html lang="en">
<head>
        <meta  http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatibl" content="ie=edge">  
        <title>registration</title>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/mystyle.css">
    </head>
<body>
    <?php
    require('connect.php');
    if(isset($_REQUEST['loginID'])){
        $loginID = mysqli_real_escape_string($conn,$_POST['loginID']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $dayBirth = mysqli_real_escape_string($conn,$_POST['dayBirth']);
        $dayInWeek = mysqli_real_escape_string($conn,$_POST['dayInWeek']);
        $month = mysqli_real_escape_string($conn,$_POST['month']);
        $year = mysqli_real_escape_string($conn,$_POST['year']);
        $zodiac = mysqli_real_escape_string($conn,$_POST['zodiac']);
        $yearZodiac = mysqli_real_escape_string($conn,$_POST['yearZodiac']);
        $passwordcheck = mysqli_real_escape_string($conn,$_POST['passwordcheck']);
        $check=1;
        if($password!=$passwordcheck){
            ?>
            <script>
            alert('Password is not match')
            window.history.back();
            </script>
            <?php
            $check =0 ;
            $result = false;
        }
        if($check==1){
        $password=($password);
        $query ="INSERT INTO users(loginID,password,email,username,dayBirth,dayInWeek,month,year,zodiac,yearZodiac)
                    VALUE('$loginID','$password','$email','$username',$dayBirth,'$dayInWeek',$month,$year,'$zodiac','$yearZodiac')";
         $result = mysqli_query($conn,$query);
        }
        if($result){
            echo "<div class='form'>
                <h2>register successfully</h2>
                <br>Click here to <a href='login.php'>login</a> 
                </div>";
        }
        else if(!($result&&$check==1)){?>
            <script>
            alert('Unsuccess');
            </script>
            <?php
        }
    }
    else {
?>      <div class="container">
        <br>
         <div class="row">
        <div class="col-sm-3"><!--<p class="headfont">Hello</p>--></div>
        <div class="col-sm-6"><img src="image/CreateAccount.jpg" width="500" height="100"></div>
        </div>
        <br>
        <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-5">
        <div class="form-group">
            <form name="registration" action="" method="POST">
            <div class="form-group row">
                <label for="inputName" class="col-sm-1 col-form-label col-form-label-sm ">Name</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control form-control-sm" name = "loginID" id="Name" placeholder="Name">
                </div>
            </div>
        <div class="form-group row">
                    <label for="inputday" class="col-sm-2 col-form-label col-form-label-sm">Day</label>
                    <div class="col-sm-2">
                        <select id="inputday" name="dayInWeek" >
                            <option  selected></option>
                            <option value="Monday" >M</option>
                            <option value="Tuesday">Tu</option>
                            <option value="Wednesday">Wed</option>
                            <option value="Thursday">Th</option>
                            <option value="Friday">Fri</option>
                            <option value="Saturday">Sat</option>
                            <option value="Sunday">Sun</option>
                        </select>
                    </div>
                    <label for="inputdaybirth" class="col-sm-1 col-form-label col-form-label-sm">Date</label>
                    <div class="col-sm-2">
                        <select id="inputdaybirth" name="dayBirth" >
                            <option selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <label for="inputmonth" class="col-sm-4 col-form-label col-form-label-sm">Month</label>
                        <div class="col-sm-1">
                            <select name="month" id="inputmonth" >
                                    <option></option>
                                    <option value=1>1</option>
                                    <option value=2>2</option>
                                    <option value=3>3</option>
                                    <option value=4>4</option>
                                    <option value=5>5</option>
                                    <option value=6>6</option>
                                    <option value=7>7</option>
                                    <option value=8>8</option>
                                    <option value=9>9</option>
                                    <option value=10>10</option>
                                    <option value=11>11</option>
                                    <option value=12>12</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                    <label for="inputyears" class="col-sm-2 col-form-label col-form-label-sm"> Year</label>
                    <div class="col-sm-1">
                            <select name="year" id="inputyears" >
                                    <option></option>
                                    <option value=2020>2020</option>
                                    <option value=2019>2019</option>
                                    <option value=2018>2018</option>
                                    <option value=2017>2017</option>
                                    <option value=2016>2016</option>
                                    <option value=2015>2015</option>
                                    <option value=2014>2014</option>
                                    <option value=2013>2013</option>
                                    <option value=2012>2012</option>
                                    <option value=2011>2011</option>
                                    <option value=2010>2010</option>
                                    <option value=2009>2009</option>
                                    <option value=2008>2008</option>
                                    <option value=2007>2007</option>
                                    <option value=2006>2006</option>
                                    <option value=2005>2005</option>
                                    <option value=2004>2004</option>
                                    <option value=2003>2003</option>
                                    <option value=2002>2002</option>
                                    <option value=2001>2001</option>
                                    <option value=2000>2000</option>
                                    <option value=1999>1999</option>
                                    <option value=1998>1998</option>
                                    <option value=1997>1997</option>
                                    <option value=1996>1996</option>
                                    <option value=1995>1995</option>
                                    <option value=1994>1994</option>
                                    <option value=1993>1993</option>
                                    <option value=1992>1992</option>
                                    <option value=1991>1991</option>
                                    <option value=1990>1990</option>
                                    <option value=1989>1989</option>
                                    <option value=1988>1988</option>
                                    <option value=1987>1987</option>
                                    <option value=1986>1986</option>
                                    <option value=1985>1985</option>
                                    <option value=1984>1984</option>
                                    <option value=1983>1983</option>
                                    <option value=1982>1982</option>
                                    <option value=1981>1981</option>
                                    <option value=1980>1980</option>
                                    <option value=1979>1979</option>
                                    <option value=1978>1978</option>
                                    <option value=1977>1977</option>
                                    <option value=1976>1976</option>
                                    <option value=1975>1975</option>
                                    <option value=1974>1974</option>
                                    <option value=1973>1973</option>
                                    <option value=1972>1972</option>
                                    <option value=1971>1971</option>
                                    <option value=1970>1970</option>
                                    <option value=1969>1969</option>
                                    <option value=1968>1968</option>
                                    <option value=1967>1967</option>
                                    <option value=1966>1966</option>
                                    <option value=1965>1965</option>
                                    <option value=1964>1964</option>
                                    <option value=1963>1963</option>
                                    <option value=1962>1962</option>
                                    <option value=1961>1961</option>
                                    <option value=1960>1960</option>
                                    <option value=1959>1959</option>
                                    <option value=1958>1958</option>
                                    <option value=1957>1957</option>
                                    <option value=1956>1956</option>
                                    <option value=1955>1955</option>
                                    <option value=1954>1954</option>
                                    <option value=1953>1953</option>
                                    <option value=1952>1952</option>
                                    <option value=1951>1951</option>
                                    <option value=1950>1950</option>
                                    <option value=1949>1949</option>
                                    <option value=1948>1948</option>
                                    <option value=1947>1947</option>
                                    <option value=1946>1946</option>
                                    <option value=1945>1945</option>
                                    <option value=1944>1944</option>
                                    <option value=1943>1943</option>
                                    <option value=1942>1942</option>
                                    <option value=1941>1941</option>
                                    <option value=1940>1940</option>
                                    <option value=1939>1939</option>
                                    <option value=1938>1938</option>
                                    <option value=1937>1937</option>
                                    <option value=1936>1936</option>
                                    <option value=1935>1935</option>
                                    <option value=1934>1934</option>
                                    <option value=1933>1933</option>
                                    <option value=1932>1932</option>
                                    <option value=1931>1931</option>
                                    <option value=1930>1930</option>
                                    </select>
                                </div>
                    </div>
            </div>
            <div class="from-group row">
                <div class="col-sm-6">
                        <div class="row">
                            <label for="inputzodiac" class="col-sm-4 col-form-label col-form-label-sm">Zodiac</label>
                                    <div class="col-sm-8">
                                        <select name="zodiac" id="inputzodiac" class="form-control form-control-sm" required>
                                            <option></option>
                                            <option value="Aries">Aries (March 21-April 19)</option>
                                            <option value="Taurus">Taurus (April 20-May 20)</option>
                                            <option value="Gemini">Gemini (May 21-June 20)</option>
                                            <option value="Cancer">Cancer (June 21-July 22)</option>
                                            <option value="Leo">Leo (July 23-August 22)</option>
                                            <option value="Virgo">Virgo (August 23-September 22)</option>
                                            <option value="Libra">Libra (September 23-October 22)</option>
                                            <option value="Scorpio">Scorpio (October 23-November 21)</option>
                                            <option value="Sagittarius">Sagittarius (November 22-December 21)</option>
                                            <option value="Capricorn">Capricorn (December 22-January 19)</option>
                                            <option value="Aquarius">Aquarius (January 20-February 18)</option>
                                            <option value="Pisces">Pisces (February 19-March 20) </option>
                                        </select>
                                    </div>
                            </div>
                    </div>
                <div class="col-sm-6">
                    <div class="row">
                        <label for="inputar" class="col-sm-7 col-form-label col-form-label-sm">arterism year</label>
                            <div class="col-sm-5">
                                <select name="yearZodiac" id="inputar" class="form-control form-control-sm" required>
                                        <option></option>
                                        <option value="Cow">Cow</option>
                                        <option value="Rooster">Dog</option>
                                        <option value="Tiger">Tiger</option>
                                        <option value="Rabbit">Rabbit</option>
                                        <option value="Dragon">Dragon</option>
                                        <option value="Snake">Snake</option>
                                        <option value="Horse">Horse</option>
                                        <option value="Goat">Goat</option>
                                        <option value="Monkey">Monkey</option>
                                        <option value="Rooster">Rooster</option>
                                        <option value="Pig">Pig</option>
                                        <option value="Rat">Rat</option>
                                    </select>
                                </div>
                            </div>
                    </div>
            </div>
            <br>
            <div class="form-group">
                <div class="row">
                <label for="email" class="col-sm-4 col-form-label col-form-label-sm">email</label>
                <div class="col-sm-8" id= "email">
                    <input type="text" class="form-control " name = "email" id="email" placeholder="">
                </div>
                </div>
                <div class="row">
                <label for="username" class="col-sm-4 col-form-label col-form-label-sm">Username</label>
                <div class="col-sm-8" id= "username">
                    <input type="text" class="form-control " name = "username" id="username" placeholder="">
                </div>
                </div>
                <div class="row">
                <label for="password" class="col-sm-4 col-form-label col-form-label-sm">Password</label>
                <div class="col-sm-8" id= "password">
                    <input type="password" class="form-control " name = "password" id="password" placeholder="">
                </div>
                </div>
                <div class="row">
                <label for="confirmPassword" class="col-sm-4 col-form-label col-form-label-sm">Confirm Password</label>
                <div class="col-sm-8" id= "confirmPassword">
                    <input type="password" class="form-control " name = "passwordcheck" id="confirmPassword" placeholder="">
                </div>
                </div>
            </div>
            <div align="center">
            <input type ="submit"class="btn btn-warning btn-block"  name="submit" value="Register"><br>
            </div>
        </form>
        </div>
        </div>
        <div class="col-sm-3"></div>
        </div>
        </div>
        <?php  }  ?>
</body>
</html>