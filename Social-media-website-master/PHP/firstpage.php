<?php 

session_start();

include("connect_page.php");
include("fun_page.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: ../html/index.html");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login page by Simarjot</title>
</head>
<body>

	<style type="text/css">
		* {
  font-family: "Poppins";
}

body {
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  overflow-y: hidden;
  
  justify-content: center;
  align-items: center;
  background: #dde5f4;
  height: 100vh;
}

	
	#text{

		height: 30px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin black;
		width: 100%;
	}

	#button{

		padding: 20px;
		width: 200px;
		color: white;
		background-color: black;
		border: 2px black;
	}

	#box{
		background-color:#303245;
		margin: auto;
		width: 500px;
		padding: 110px 100px;
        display: -webkit-flex;
        display: -ms-flex;
        flex-direction: column;
        border-radius: 12px;
	}
	sign{
		padding: 20px;
		width: 100px;
		border-radius: 12px;
		border: 2px black;
	}

	a {
		padding: 10px;
		border-radius: 12px;
		color: white;
		background-color: black;
		text-decoration: none;
	}
    #button{
		border-radius: 12px;
        font-size: 14px;
	}


	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 30px;margin: 16px;color: white; justify-content: center;">Login Page by Simarjot </div>

			<input id="text" type="text" placeholder=" Enter UserName" name="user_name"><br><br>
			<input id="text" type="password" placeholder=" EnterPassword" name="password"><br><br>
			<input id="button" onclick="window.location.href='\Social-media-website-master\Social-media-website-master\html\index.html'" type="submit" value="Login for FACEBOOK CLONE"><br><br>
			
	        
			<a href="sign_page.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>