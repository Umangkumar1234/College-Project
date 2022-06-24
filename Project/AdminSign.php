<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
            font-family:poppins;
            text-decoration:none;
        }
        body{
            margin:12%;
            background-color:rgb(209, 235, 144);
            margin-left:350px;
        }
        div.login-form{
            width:450px;
            background-color:rgb(194, 230, 129);;
            box-shadow:0px 5px 10px black;

          
        }
        div.login-form  h2{
            text-align:center;
            background-color:#204969;
            padding 12px 0px;
            color:white; 
        }
        div.login-form form{
            padding :30px 60px;
        }
        div.login-form form div.input-field{
            display:flex;
            flex-direction:row;
        }

        div.login-form form div.input-field i{
           color:darkslategrey;
           padding :10px 14px;
           background-color:#f2f4f6;
           margin-right:4px;

        }
        div.login-form form div.input-field input{
            background-color:#f2f4f6;
            padding:10px;
            border:1px ;
            width:100%;
            padding-left:105px;
        }
        div.login-form form button{
            width:100%;
            background-color:#5bd1d7;
            padding:8px;
            border:none;
            font-size:16px;
            font-weight:500;
            color:white;
            margin:15px 0;
            transition:background-color 0.4s;
        }
        div.login-form form button:hover{
            background-color:#41b6e6;
        }
        



    

        </style>
</head>
<body>
    <div class='login-form'>
        <h2>ADMIN SIGNUP</h2>
        <form method='POST'action='AdminInsertData.php'>
        <div class="input-field">
          
            <input type='text' placeholder='Enter Username'name='username' required>
        </div>
        <div class="input-field">
          
          <input type='text' placeholder='Enter Mobile NO'name='mobno' required>
      </div>

      <div class="input-field">

<input type='email' placeholder='Enter Email'name='email' required>
</div>
        <div class="input-field">
            <input type='password' placeholder='Enter Password' name='pass'required>
        </div>
         <div class="input-field">
            <input type='password' placeholder='Enter Confirm Password'required>
        </div>
        <button> Sign In</button>
</form>
</div>
</body>
</html>