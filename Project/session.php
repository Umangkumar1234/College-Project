<?php
session_start();
if(!isset($_SESSION['hlo']))
{
   include 'C:\xampp\htdocs\Project\Login.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
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
        section div{
            width:30%;
            padding: 10px;
            border:3px solid black;
            background-color: rgb(98, 202, 123);
            border-radius: 5px;
            margin-top: 30px;
         
           
        }
        .container{
            color: rgb(5, 83, 114);
            justify-content: center;
        }
    </style>
</head>

<body>
    <section>
        <div calss="container">
           
         <h1>Welcome- <?php echo  $_SESSION['hlo']?></h1>
         <h4>          <?php echo  $_SESSION['mobno1']?></h4>
         <h4>          <?php echo  $_SESSION['emial1']?></h4>

         <form method='POST'>
          <button name='logout' >LOG OUT</button>

        </form>
  
        <?php 
          if(isset($_POST['logout']))
          {
            session_destroy();
            header("location:Login.php");
          }
          ?>


        </div>
    </section>
</body>
</html>