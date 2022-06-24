<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .pro-table{
              width:80%;
              float:left;
              background-color:#fff;
              box-shadow:10px 10px 20px #bbb;
              margin-top:15px;
      }
      .pro-table table tr h2{
            padding: 15px;  
      }
      .pro-table table tr th{
            padding: 15px;  
      }
      .pro-table table tr td{
              padding:15px;
      }
        </style>
</head>
<body>
<div class='pro-table'>
                     
                     <table>
                             <tr><h2>Customer Info</h2></tr>
                             <tr><th> Name</th>
                             <th>MobNO</th>
                             <th>Email</th>
                             <th>Password</th>
                     </tr>
                     
                                           <?php
                         $servername = "localhost";
                         $username = "root";
                         $password = "";
                         $dbname = "test";
                     
                         $conn = mysqli_connect($servername, $username, $password, $dbname);
                         if (!$conn) {
                           die("Connection failed: " . mysqli_connect_error());
                         }
                     
                        
                         $sql = "SELECT *  FROM `student1`";
                         $result = mysqli_query($conn,$sql);
                         $count= mysqli_num_rows($result);
                             if($count!=0)
                         {
                             while ( $row = mysqli_fetch_assoc($result))
                             {
                               echo "
                               <tr>
                               <td>".$row['Name']."</td>  
                               <td>".$row['MobNO']."</td>  
                               <td>".$row['Email']."</td>  
                               <td>".$row['pass1']."</td> 
                               </tr> <br>";    
                             }
                         } 
                         ?>
                         </table>
                     
                     
                     </div>
</body>
</html>