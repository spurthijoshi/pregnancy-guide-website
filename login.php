<?php
session_start();
?>
<html>
  <style>
    ul{
      width: 35vw;
      display:flex;
      flex-direction:row;
      padding : 0 40%;
    }
    .top-bar{
      background:#FFB6C1;
    }
    li{
      padding: 10%;
      }
    </style>
  <body>
  <div class="top-bar">
    <ul>
    <li><a href="login.php"> HOME</a></li>
    <li><a href="faq.php">FAQ</a></li>
    <li><a href="download.php">Download the App!</a></li>
  </ul>
</div>
</body>
</html>
<?php
 
 $username = $_POST["uname"];
 $password = $_POST["password"];
 
 $con = mysqli_connect("localhost","id9301272_spurthi","spurthi28","id9301272_project");
 if(mysqli_connect_errno()){
   printf("connection failed".mysqli_connect_error());
 }
 else{
  
 $query= "Select uname,upass,date,umail from users where uname = '$username' and upass = '$password'";
 $result= mysqli_query($con,$query);
 $row = mysqli_fetch_array($result);
 $date=$row['date'];
 $umail=$row['umail'];
 $_SESSION["a"]=$umail;
 $_SESSION["uname"]=$username;
 //$_SESSION["uname"]=$username;
 $date = strtotime(date("Y-m-d", strtotime($date)) . " +9 month");
 $date = date("Y-m-d",$date);
 
 if(strtoupper($row['uname']) == strtoupper($username) and strtoupper($row['upass']) == strtoupper($password))
 {
   echo '<h1 style="text-align:center">Welcome '.strtoupper($username).'</h1>';
   //echo $umail;
   echo "<br>Motherhood is a beautiful phase in a woman's life.<br>";
   echo"We  will take care of you and your baby!";
    echo"<br> <h3>Your Due Date is ".$date."</h3>";
    echo"<br>So dear mamma-to-be , let's get started ";
    echo("<br><button onclick=\"location.href='fpage.html'\">Get Started!</button>");
   echo "<br> <br>Do you happen to forget your appointments?";
   echo "<br>Don't worry! We have it sorted.";
   echo("<br><button onclick=\"location.href='appointment.php'\">Appointment Notifications!</button>");
   }
 else{
     echo "Wrong Username or Password";
 }
 
 }
 //mysqli_close($con);
?>
</html>