
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>LOGIN</title>
</head>
<body>
    
    <form Action="login.php" method="post">
        <h1>LOGIN</h1>
        <div class="textboxdiv">
            <input type="text" placeholder="Username" name="username">
        </div>    
        <div class="textboxdiv">
            <input type="password" placeholder="Password" name="password">
        </div >
        <input type="submit" value="Login" class="loginBtn" name="login_Btn">
        <div class="signup">
            <p>Don't have an Account?</p>
            <a href="signup.php">Sign Up</a>
        </div>
    </form>
</body>
</html>