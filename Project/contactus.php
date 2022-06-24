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
     if(isset($_POST['button1'])){
    echo '<script type="text/JavaScript"> 
   alert("Connection Successful!");
   </script>';
     }
  }
  if($_SERVER['REQUEST_METHOD']=='POST')
 {
     $name  =$_POST['username1'];
     $email  =$_POST['email1'];
     $mob1  =$_POST['mob'];
     $text= $_POST['textar'];
     
    $sql ="INSERT INTO `contact` (`cid`, `Name`, `Email`, `Mob`, `Msg`) VALUES (NULL, '$name', '$email', '$mob1', '$text')";

    $result = mysqli_query($conn,$sql);
    if($result)
    {
 echo '<script type="text/JavaScript"> 
  alert("Data entered successful");
  </script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us page</title>
    <link rel="stylesheet" href="footer.css">

    <link rel="stylesheet" href="project_home.css">

    <style>
       *{
            margin:0;
            padding:0;
            box-sizing:border-box;  
        }
        body{
            background-color: rgb(197, 222, 98);
        }
        section{
            width:100%;
            /* background-color: cyan; */
            display: flex;
            justify-content: center;
            /* border: 3px solid red; */
        }
        .abc{
            width:100%;
            height:70px;
            border:2px solid black;
            background-color: rgb(98, 202, 123);
            border-radius: 2px;
        }

        table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {

  text-align: left;
  padding: 8px;
}

.abcd{
    width:50%;
    float:left;
    height:450px;
    background:rgb(8, 6, 109);
    border:1px solid black;
    color:rgb(153, 240, 174);

 
}

.container{
    width:50%
    float:left;
    height:450px;
    background:grey;
    border:1px solid black;
}

.container1{
	position: relative;
	width: 100%;
	height: 450px;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 5px 40px;
}

.container:after{
	content: '';
	position: absolute;
	width: 100%;
	height: 450px;
	left: 0;
	top: 0;
	background: url("img/bg.jpg") no-repeat center;
	background-size: cover;
	filter: blur(50px);
	z-index: -1;
}
.contact-box{
	max-width: 850px;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	justify-content: center;
	align-items: center;
	text-align: center;
	background-color: #fff;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
}

.left{
	background: url("img/bg.jpg") no-repeat center;
	background-size: cover;
	height: 450px;
}

.right{
	padding: 25px 40px;
}

h2{
	position: relative;
	padding: 0 0 10px;
	margin-bottom: 10px;
}

h2:after{
	content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 4px;
    width: 50px;
    border-radius: 2px;
    background-color: #2ecc71;
}

.field{
	width: 100%;
	border: 2px solid rgba(0, 0, 0, 0);
	outline: none;
	background-color: rgba(230, 230, 230, 0.6);
	padding: 0.5rem 1rem;
	font-size: 1.1rem;
	margin-bottom: 22px;
	transition: .3s;
}

.field:hover{
	background-color: rgba(0, 0, 0, 0.1);
}

textarea{
	min-height: 90px;
}

.btn{
	width: 100%;
	padding: 0.5rem 1rem;
	background-color: #2ecc71;
	color: #fff;
	font-size: 1.1rem;
	border: none;
	outline: none;
	cursor: pointer;
	transition: .3s;
}

.btn:hover{
    background-color: #27ae60;
}

.field:focus{
    border: 2px solid rgba(30,85,250,0.47);
    background-color: #fff;
}

@media screen and (max-width: 880px){
	.contact-box{
		grid-template-columns: 1fr;
	}
	.left{
		height: 100px;
	}
}

#umang{
    margin-top:35px;
}

    </style>
</head>
<body>
    <section>
        <div class='abc'>
            <table>
                <tr>
           <th> <a href='session.php'><h3>MyAccount</h3></a></th>
            <th><a href='contactus.php'><h3>Contact us</h3></a></th>
            <th><a href='aboutus.php'><h3>About us</h3></a></th>
            <th><a href='#'><h3>Home Page</h3></a></th>
            <tr>         
    </table>
        </div>
    </section>

    <div class='abcd'>
        <h1>Connect with us<h1><br>
            <h4>We would love to respond to your queries and help you succeed.</h4>
            <h4>Feel free to get in touch with us.<h4>
                <table>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                    <td></td>
                        <td></td>
                    </tr>
                    <tr>
                    <td></td>
                        <td></td>
                    </tr>
                    <tr>
                    <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><h4> Reach Us</h4></td>
                        <td></td>
                        <tr>
                        <tr>
                        <td><h4> Email</h4></td>
                        <td><h4> umang.kumar17312@gmail.com</h4></td>

                        <tr>

                        <tr>
                        <td><h4> Phone</h4></td>
                        <td><h4> +91 7367833798</h4></td>
                        <tr>
                        <tr>
                        <td><h4> Address</h4></td>
                        <td><h4> Marwadi Education Foundation Group's of Institution Rajkot,Gujarat 360003</h4></td>
                        <tr>

</table>
</div>

<div class="container" >
<div class="container"1>
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
            <form action='/project/contactus.php' method='post'>
				<h2>Contact Us</h2>
				<input type="text" class="field" placeholder="Your Name" name='username1' required>
				<input type="text" class="field" placeholder="Your Email" name='email1' required>
				<input type="text" class="field" placeholder="Phone" name='mob' required>
				<textarea placeholder="Message" class="field" name='textar' required></textarea>
				<button class="btn" name='button1'>Send
                </button>
</form>
		</div>
</div>
</div>
</div>
</form>
</body>

<div class="d-grid gap-2">
        <button class="btn btn-light" type="button" id='umang'>© 2022 Company, onlineshoes.com. All rights reserved.</button>
    </div>

</html>
