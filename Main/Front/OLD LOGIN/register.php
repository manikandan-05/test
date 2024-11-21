<?php
include 'config.php';
include 'validation_and_storage.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $mobile_no = $_POST['mobile_no'];
  $email = $_POST['email'];
  $otp = $_POST['otp'];
  $password = $_POST['password'];
  $cnf_password = $_POST['cnf_password'];
  <?php


  $msg = "";
  
   $mailp;
   $id=""; $pos; $cookieid;
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    if(isset($_POST['submit']))
    {
  
      $con = new mysqli('localhost','root','mypass','usersdb');
  
  
      $name = $con->real_escape_string($_POST['name']);
      $email = $con->real_escape_string($_POST['email']);
      $contact = $con->real_escape_string($_POST['con']);
  
  
          $con->query("INSERT INTO users (name,email,contact)
            VALUES ('$name', '$email', '$contact');
          ");
  
  
  
  
  
  
  
  
      // $password = $con->real_escape_string($_POST['password']);
  
          // $name=$_POST['name'];
          // $email=$_POST['email'];
          // $contact=$_POST['con'];
          //
           $pos=strpos($email,"@");
  
          $cookieid=substr($email,0,$pos); //store the email userid
  
          $otp=rand(1000,9999); //generate an OTP
  
  
         if(!isset($_COOKIE["uid"])){ //if cookie is set, then...
  
             session_id("otp");session_start(); //start sessiom=n
  
          setcookie("uid",$cookieid); // set cookie uid to store Userid from email
          setcookie("email",$email);  // set cookie ei=mail to store email
          setcookie($cookieid,$otp, time() +(3600*30)); //set otp cookie attached to userid
           header('Location: otp.html');
            }
  
          if(isset($_COOKIE["uid"])){
           session_id("otp");session_start(); //session starts
            $to = $email;
          $subject = "SUBJECT";
          $txt = "VERIFICATION OTP: ".$_COOKIE[$cookieid]."   Valid for 10 minutes." ;
          $headers = "From: subject@yourdomain.com" ;
          mail($to,$subject,$txt,$headers);
          header('Location: check.html');
            }
       }
  
         }
  
          $name=$_POST['name'];
          $email=$_POST['email'];
          $contact=$_POST['con'];
          
          $pos=strpos($email,"@");
          
          if(strpos($email,'.')!=-1) {$pos1=strpos($email,".");  $cookieid=substr($email,0,$pos1);}
         
         else{$cookieid=substr($email,0,$pos);}
             
         
        
          $otp=rand(1000,9999);
         
  
         if(!isset($_COOKIE["uid"])){
          session_id("otp");session_start();
          setcookie("uid",$cookieid);
          setcookie("email",$email);
          setcookie($cookieid,$otp);
          header('Location: sendmail.php');
          }
  
          if(isset($_COOKIE["uid"])){
           session_id("otp");session_start(); 
           header('Location: sendmail.php');}
   
          
  
  
  
  
  
  
  
  
?>
  


  $sql = "INSERT INTO users (name, mobile_no, email, otp, password, cnf_password) VALUES ('$name', '$moblie_no', '$email', '$otp', '$password', '$cnf_password')";

  if (mysqli_query($conn, $sql)) {
    header("Location: login.html");
    exit();
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>