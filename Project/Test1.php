<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "test";

 $conn = mysqli_connect($servername, $username, $password, $dbname);
 if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }
 else
 {
   echo '<script type="text/JavaScript"> 
   alert("Connection Successful!");
   </script>';
  }

 if($_SERVER['REQUEST_METHOD']=='POST')
 {
     $name  =$_POST['username'];
     $mob  =$_POST['mobno'];
     $email  =$_POST['email'];
     $password  =$_POST['pass'];
     
    $sql = "INSERT INTO `student1` (`sid`, `Name`, `MobNO`, `Email`, `pass1`)  VALUES (NULL, '$name', '$mob', '$email', '$password')";

    $result = mysqli_query($conn,$sql);
    if($result)
    {
        echo '<script type="text/JavaScript"> 
        alert("Data entered successful!");
        </script>';
        include("Login.php");
    }
    
    
 }
 
?>