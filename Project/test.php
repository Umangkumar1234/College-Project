<?php 
  session_start();
?>
 <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    if($_SERVER['REQUEST_METHOD']=='POST')
 {
    
     
     $user_name =$_POST['username'];
     $password  =$_POST['pass'];
     
    $sql = "SELECT *  FROM `student1` where Name= '$user_name' and pass1='$password' ";
    $result = mysqli_query($conn,$sql);
    $count= mysqli_num_rows($result);

  
    
        if($count>0)
    {
      $row = mysqli_fetch_assoc($result);
        $_SESSION['mobno1']=$row['MobNO'];
        $_SESSION['emial1']=$row['Email'];  
        $_SESSION['hlo']=$row['Name'];


      header("location:project_home.php");
    }else{
      header("location:fail.html");
    }
    
    
 }
    ?>

