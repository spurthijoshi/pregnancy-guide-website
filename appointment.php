<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
//include 'login.php';

session_start();

    $to = $_SESSION["a"];
     $subject = "Appointment Reminder";
    $message = "Hola momma !\n This is remind you that you have an appointment with your gynaecologist today.\n Thanks and Regards\n Ugama Team.";
     $headers = "From: ugamahealthcare@yahoo.com";
    
     $retval = mail ($to,$subject,$message,$headers);
         
         if( $retval == true ) {
            echo "<br>An e-mail to the specified e-mail address will be sent soon!";
            echo("<br><button onclick=\"location.href='login.php'\">BACK</button>");
         }else {
            echo "<br>Message could not be sent...";
            echo("<br><button onclick=\"location.href='login.php'\">BACK</button>");
         }
   


?>