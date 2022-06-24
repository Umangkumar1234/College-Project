<?php
session_start();
if(!isset($_SESSION['hlo']))
{
   include 'C:\xampp\htdocs\Project\Login.php';
}
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
   if(isset($_POST['button3'])){
  echo '<script type="text/JavaScript"> 
  alert("Connection Successful!");
  </script>';
   }
  }

  if($_SERVER['REQUEST_METHOD']=='POST')
 {
     $name2  =$_POST['username2'];
     $mob2  =$_POST['mobn'];
     $email2  =$_POST['email'];
     $pin2  =$_POST['pin'];
     $add1  =$_POST['add3'];

     
    $sql = "INSERT INTO `address` (`aid`, `Name`, `Mob`, `Email`, `pincode`, `addr`) VALUES (NULL, '$name2', '$mob2', '$email2', '$pin2', '$add1');";

    $result = mysqli_query($conn,$sql);
    if($result)
    {
       header('Location:shivam.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address</title>
    <style>
        body{
  margin: 0;
  padding-top: 20px;
  background-color: #344a73;
  font-family: 'Roboto', sans-serif;
}
.sign-up{
  width: 360px;
  height: 620px;
  margin: auto;
  background-color: #fff;
  border-radius: 3px;
  /* padding-top: 20px; */
}

h1{
  text-align: center;
  padding-top: 15px;
}
form{
    width: 300px;
    margin-left: 20px;
}
form label{
        display: flex;
        margin-top: 20px;
        font-size: 18px;
}
form input{
    width: 100%;
    padding: 7px;
    border: none;
    border: 1px solid gray;;
    border-radius: 6px;
    outline: none;
}
 button{
  width: 320px;
  height: 35px;
  margin-top: 20px;
  border: none;
  background-color: #49c1a2;
  color: #fff;
  font-size: 18px;
  border-radius: 10px;
}

p{
  text-align: center;
  padding-top: 10px;
  font-size: 15px;

}
    </style>
</head>
<body>
    
        <div class="sign-up">
            <h1>Address</h1>
            <form action="/project/buy.php" method='post'>
                <label for="">Name</label>
                <input type="text" placeholder="" id='user'name='username2' required>
                <span  style="color:red" id="usr"></span>
                <label for="">Mob No</label>
                <input type="tel" placeholder="" id='mobno' name='mobn' required>
                <span  style="color:red" id="nm"></span>
                <label for="">E-mail</label >
                <input type="email" placeholder=""  id='email'name='email' required>
                <span  style="color:red" id="eml"></span>
                <label for="">Pincode</label>
                <input type="number" placeholder="Enter your Address" id='pin'name='pin' required>
                <span  style="color:red" id="pm"></span>
                <label for="">Address</label>
                <textarea cols="4" rows="2" placeholder="Address" style="Width: 307px; height:30px" id='add'required name="add3">
              </textarea>
              <span  style="color:red" id="ad"></span>
                <button type="submit" value="Submit" onclick="myFunction()" name='button3'>Submit</button>
            </form>
        </div>

        <script>
          function myFunction(){
            var username = document.getElementById("user").value;
            var mob_no = document.getElementById("mobno").value;
            var email1 = document.getElementById("email").value;
            var pin1 = document.getElementById("pin").value;
            var add1 = document.getElementById("add").value;
            if(username == ""){
      document.getElementById("usr").innerHTML = "Please Enter Your Name";
return false;
}
if(!isNaN(username)){
document.getElementById("usr").innerHTML = "Please Enter Characters only";
return false;
}

if(mob_no == ""){
document.getElementById("nm").innerHTML = "Please Enter Your Contact number";
return false;
}
var telphone = /^[0-9]{10}$/;
if(telphone.test(mob_no)){
document.getElementById('nm').innerHTML = "";
}else{
document.getElementById('nm').innerHTML = "Please enter 10 digit only!";
return false;
}

if(email1 == ""){
document.getElementById("eml").innerHTML = "Please Enter Your Email";
return false;
}
var emailformat =  /^[a-zA-Z0-9._-]*@[a-zA-Z]{1,20}.{1}[a-z]{1,4}.{1,3}$/;
if(emailformat.test(email1)){
document.getElementById("eml").innerHTML = "";
}else{
document.getElementById("eml").innerHTML = "Please Enter correct email format";
return false;
}

if(pin1 == ""){
document.getElementById("pm").innerHTML = "Please Enter your pincode";
return false;
}
var pincode = /^[0-9]{6}$/;
if(pincode.test(pin1)){
document.getElementById('pm').innerHTML = "";
}else{
document.getElementById('pm').innerHTML = "Please enter 6 digit only!";
return false;
}

if(add1 == ""){
document.getElementById("ad").innerHTML = "Please Enter your address";
return false;
}
var addr = /^[a-zA-Z0-9]{*}$/;
if(addr.test(add1)){
document.getElementById('ad').innerHTML = "";
}else{
document.getElementById('ad').innerHTML = "Please Enter character and digit only";
return false;
}
          }
        </script>
</body>
</html>