<?php
session_start();
$msg=$_POST["umessage"];
$username=$_SESSION["uname"];
$con = mysqli_connect("localhost","id9301272_spu","spurthi28","id9301272_chat");
if(mysqli_connect_errno()){
  printf("connection failed".mysqli_connect_error());
}
else{
$query= "insert into message values('$msg','$username')";
$result=mysqli_query($con,$query);
if($result=TRUE){
$q1="Select * from message";
    $r1=mysqli_query($con,$q1);
    while($row = mysqli_fetch_assoc($r1)) {
    echo '<h4 style="color:red">'.strtoupper($row['uname']).'</h4>';
    echo "<p>".$row['message']."</p>";
}
echo("<br><button onclick=\"location.href='faq.php'\">BACK</button>");
}
else{
    echo "something went wrong";
    echo("<br><button onclick=\"location.href='faq.php'\">BACK</button>");
}
}
 



?>