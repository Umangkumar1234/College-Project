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
    if(isset($_POST['button4'])){
//   echo '<script type="text/JavaScript"> 
//   alert("Connection Successful!");
//   </script>';
    }
  }

  if($_SERVER['REQUEST_METHOD']=='POST')
 {
     $cardname1  =$_POST['CardName'];
     $cvv1  =$_POST['CvvNumber'];
     $cardnum1=$_POST['cardnumber'];
  
    $sql = "INSERT INTO `payment` (`pid`, `Cardname`, `CVV`, `Cardnum`) VALUES (NULL,'$cardname1', '$cvv1', '$cardnum1');";

    $result = mysqli_query($conn,$sql);
    if($result)
    {
        echo '<script type="text/JavaScript"> 
  alert("order is placed!");
  </script>';
    //    header('Location:order.html');
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Form</title>
    <link rel="stylesheet" href="lalan.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <form action='shivam.php' method='post'>
    <div class="container">
        <h1>Make Payment</h1>
        <div class="first-row">
            <div class="owner">
                <h3>Card holder name</h3>
                <div class="input-field">
                    <input type="text" id='user' 
                    name ='CardName' required>
                </div>
                <span  style="color:red" id="usr"></span>
            </div>
            <div class="cvv">
                <h3>CVV</h3>
                <div class="input-field">
                    <input type="password" id='cvv'name='CvvNumber' required>
                </div>
                <span  style="color:red" id="cv"></span>
            </div>
        </div>
        <div class="second-row">
            <div class="card-number">
                <h3>Card Number</h3>
                <div class="input-field">
                    <input type="text" id='card'name='cardnumber' required>
                </div>
                <span  style="color:red" id="crd"></span>
            </div>
        </div>
        <div class="third-row">
            <h3>Expiry date</h3>
            <div class="selection">
                <div class="date">
                    <select name="months" id="months">
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                        <option value="Jun">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Aug">Aug</option>
                        <option value="Sep">Sep</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                      </select>
                      <select name="years" id="years">
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                      </select>
                </div>
                <div class="cards">
                    <img src="mastercard.png" alt="">
                    <img src="PayPal.png" alt="">
                    <img src="VISA.png" alt="">
                </div>
            </div>    
        </div>
        <button  style="background-color:rgb(4, 97, 121);height:50px;color:black;"  class='button' type="submit" value="Submit" onclick="val()"  name='button4'>Confirm</button>
        
    </div>
</form>

    <script>
        function val(){
        var username = document.getElementById("user").value;
        var cvv1 = document.getElementById("cvv").value;
        var card1 = document.getElementById("card").value;


        if(username == ""){
      document.getElementById("usr").innerHTML = "Please Enter Your card Name";
 return false;
}
if(!isNaN(username)){
document.getElementById("usr").innerHTML = "Please Enter Characters only";
return false;
}

if(cvv1 == ""){
document.getElementById("cv").innerHTML = "Please Enter your cvv number";
return false;
}
var cvvnum = /^[0-9]{3}$/;
if(cvvnum.test(cvv1)){
document.getElementById('cv').innerHTML = "";
}else{
document.getElementById('cv').innerHTML = "Please enter 3 digit only!";
return false;
}

if(card1 == ""){
document.getElementById("crd").innerHTML = "Please Enter your card number";
return false;
}
var cardnum = /^[0-9]{16}$/;
if(cardnum.test(card1)){
document.getElementById('crd').innerHTML = "";
}else{
document.getElementById('crd').innerHTML = "Please enter 16 digit only!";
return false;
}

        }
    </script>
</body>
</html>