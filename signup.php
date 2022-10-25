

<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
        $email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($email) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "INSERT INTO users2 (user_id, user_name, email, password) VALUE ('$user_id','$user_name', '$email', '$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width:device-width,initial-scale:1.0">
            <title>SIGN UP</title>
            <link rel="stylesheet" href="main.css">
        </head>
        <body>
            <form action="signup.php" method="post">
                <div>
                    <div style="margin-top:-20%; margin-bottom:-12%;">
                    <h1>SIGN UP</h1>
                    </div>
                    <div class="textboxdiv">
                    <label for="name">FULL NAME</label>
                    <input type="text" placeholder="Surname First" name="user_name" required>
                </div>
                <div class="textboxdiv">
                    <label for="email">Email</label>
                    <input type="email" name="email" required>
                </div>
                <div class="textboxdiv">
                    <label for="password">Password</label>
                    <input type="password" name="password" required>
                </div>
                <div class="textboxdiv">
                    <label for="comfirm_password">Comfirm Password</label>
                    <input type="password" name="password2" required>
                </div>
                
                    <input type="submit" value="SIGN UP" class="loginBtn" name="signup_Btn" style="margin-top:-10px;">

                    <div class="signup" style="margin-top:7%;">
                    <p>Already have an account?</p>
                    <a href="login.php">Login</a>
                </div>
                
                </div>
            </form>
        </body>
    </html>