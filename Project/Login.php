
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to shoes shopping</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
    <div class="shoes">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="signup()">Sign Up</button>
            </div>
            <div class="social-icons">
                <a href="https://www.facebook.com/"><img src="fb.png" alt=""></a>
                <a href="https://accounts.google.co.in"><img src="google.png" alt=""></a>
                <a href="https://www.instagram.com/"><img src="insta.png" alt=""></a>
                <a href="https://twitter.com/"><img src="tw.png" alt=""></a>
            </div>
            <form id="log-in" class="input-group" action="test.php" method="POST">
                <input type="text" class="input-field" placeholder="Enter user name" name="username" required>
                <input type="password" class="input-field" placeholder="Enter Password" name="pass" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <a href="Forgot_Password.html" class="check-box forget">forget password</a>
                <input type="submit"class="submit-btn" value="Login">
            </form>
                
            <form id="sign-up" class="input-group" action="Test1.php" method="POST">
                <input type="text" class="input-field" placeholder="Username" name="username" required>
                <input type="phone" class="input-field" placeholder="Mobile Number" name="mobno" required>
                <input type="email" class="input-field" placeholder="E-mail" name="email" required>
                <input type="password" class="input-field" placeholder="Enter Password" name="pass" required>
                <input type="password" class="input-field" placeholder="Confirm Password" name="cnfpass" required>
                <input type="submit"class="submit-btn" value="Submit">
            </form>
        </div>
    </div>

    <script>
        var x = document.getElementById("log-in");
        var y = document.getElementById("sign-up");
        var z = document.getElementById("btn");

        function signup(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
       

    </script>


</body>
</html>
