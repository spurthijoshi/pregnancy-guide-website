<?php
$uname=$_POST["rname"];
$upass=$_POST["rpass"];
$rdate=$_POST["rdate"];
$uphno=$_POST["rphno"];
$umail=$_POST["rmail"];
$con = mysqli_connect("localhost","id9301272_spurthi","spurthi28","id9301272_project");
if(mysqli_connect_errno()){
  printf("connection failed".mysqli_connect_error());
}
else{
$query= "insert into users values('$uname','$upass','$rdate','$uphno','$umail')";
$result= mysqli_query($con,$query);
echo "Registered successfully.<br>";
echo("<button onclick=\"location.href='index.html'\">Back to Home</button>"); 

}

 

?>
