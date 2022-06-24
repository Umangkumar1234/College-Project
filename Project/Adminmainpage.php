

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      *{
          margin:0;
          padding:0;
          box-sizing:border-box;
          list-style-type:none;
          text-decoration:none;
      }  
      section#sidebar{
          width:20%;
          background-image: url('c1.jpg');
          position:fixed;
          top:0;
          left:0;
          color:#fff;
          height:100%;
      }
      section#main-content{
          width:80%;
          float:right;
         
      }
    

      .sidbar-brand{
              padding:50px 40px;
      }
      .sidebar-menu ul li a{
              display:block;
              color:#fff;
              padding:10px 40px;
              
      }

      .sidebar-menu{
              margin-top:50px;
      }

      .sidebar-menu li{
              transition:all 0.5sec ease;
      }
      .sidebar-menu li:hover{
              background-color:orange;
      }
      .sidebar-menu ul li span{
              padding-left:10px;
      }
      header.main-header{
              position:fixed;
              background-color:#fff;
              box-shadow:10px 10px 20px #bbb;
              width:100%;
      }

      .header-left{
              float:left;
              width:31%;
              padding:20px;
      }
      .header-left img{
              width:15%;
              padding-right: 10px;
              float:left
      }
      .header-left p{
              color:#bbb;
      }
      input.search-bar{
              width:50%;
              border-radius:20px;
              padding:8px 12px;
              border:2px solid #fd5a5e;
              transition: with 0.5sec ease;
      }
      input.search-bar: focus{
              outline:none;
              border:2px solid #fd5a5e;
              width:95%;       
      }
      i.fa.fa-search{
              background-color:#fd5a5e;
              color:#fff;
              width:35px;
              line-height:35px;
              text-align:center;
              border-top-right-radius:50px 50px;
              border-bottom-right-radius:50px 50px;
              margin-left:-30px;
      }
      .card-box{
                float:left;
                width:21%;
                margin-top:150px;
                background-color:rgb(228, 99, 38);
                margin-left:2%;
                margin-right:2%;
                padding:25px;
                padding-left:80px;
                color:white;

      }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section id='sidebar'>
        <div class='sidbar-brand'>
            <h2><i class="fa fa-desktop"></i><span>Website Info</span></h2>
    </div>

    <div class='sidebar-menu'>
    <ul>
            <li><a href='Adminmainpage.php'><i class='fa fa-desktop'></i>
            <span>Dashboard</span>
            </li></a></li>
    </ul>
    <ul>
            <li><a href='phpdemo.php'><i class='fa fa-users'></i>
            <span>Customers</span>
            </li></a></li>
    </ul>
    <ul>
            <li><a href='#'><i class='fa fa-file-pdf-o'></i>
            <span>Orders</span>
            </li></a></li>
    </ul>
    <ul>
            <li><a href='#'><i class='fa fa-money'></i>
            <span>Income</span>
            </li></a></li>
    </ul>
    <ul>
            <li><a href='adminsession.php'><i class='fa fa-user'></i>
            <span>Account</span>
            </li></a></li>
    </ul>
    <ul>
            <li><a href='Admin.php'><i class='fa fa-sign-out'></i>
            <span>Logout</span>
            </li></a></li>
    </ul>


    </div>
    </section>

    <section id='main-content'>
        <header class='main-header'>
           <div class='header-left'>
        <h2><i class='fa fa-bars'></i>Dashboard</h2>
</div>   
<div class='header-left'>
       <input class='search-bar'type='text' placeholder='Search Here...'/>
       <i class='fa fa-search'></i>
    
</div> 
<div class='header-left'>
       <img src='W.jpeg'class='img-responsible'/>
       <h2>Website Info</h2>
       <p>Admin</p>
    
</div>   
<div class='clear'></div>
        </header>
        <div class='clear'></div>

<div class='main-content-info container'>
      <div class='card-box'>
              <h2 class='cus-num cus-h'>

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
       echo"$count";
    
    ?>
              </h2>
              <p>Customers</p>
      </div>

      <div class='card-box'>
              <h2 class='cus-num cus-pro'>

              
              <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT *  FROM `subscribe`";
    $result = mysqli_query($conn,$sql);
    $count= mysqli_num_rows($result);
       echo"$count";
    
    ?>
              </h2>
              <p>Subscribers</p>
      </div>
      <div class='card-box'>
              <h2 class='cus-num cus-ord'>03</h2>
              <p>Order</p>
      </div>
      <div class='card-box'>
              <h2 class='cus-num cus-inc'>20k</h2>
              <p>Income</p>
      </div>
      <div class='clear'></div>
</div>

      <div class='content-pro-par container'>
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

<!-- <div class='cus-table'>
<p>cust table</p>
</div> -->
<div class='clear'></div>
</div>
    </section>


</body>
</html>