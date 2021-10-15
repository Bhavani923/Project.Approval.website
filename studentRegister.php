<?php include('studentAuth.php') ?>

<!DOCTYPE html>
<head>
<title>authentication page</title>
<link rel="stylesheet" type="text/css" href="studentRegister.css?v=<?php echo time(); ?>">
 <link rel="shortcut icon" href="imageL.png">
</head>

<body>
	<div class="container">
		<div class="card">
			<div class="inner-box" id="card">
				<div class="card-front">
					<h1>LOGIN</h1>
					<form method="post" action="studentRegister.php">
						
						
						<input type="text" class="input-box" name="username"
						placeholder="Username" required>
						
						<input type="password" class="input-box" name="password"
						placeholder="Password" required>
						
						
						
						<button type="submit" class="submit-btn" name="login" >
						Submit</button>
						
						<input type="checkbox" class="rememberme"> <span class="xy">Remember me</span>
						
						<button type="button" class="btn1" onclick="openRegister()">New here? Register</button>
						<a href="#">Forget password</a>
					</form>
				
				</div>
				<div class="card-back">
					<h1>REGISTER</h1>
					<form method="post" action="studentRegister.php">
						<input type="text" class="input-box" name="username"
						placeholder="Username" required>
						
						<input type="email" class="input-box" name="email"
						placeholder="Email Id" required>
						
						<input type="password" class="input-box" name="password"
						placeholder="Password" required>
						
						<input type="password" class="input-box" name="confirmpassword"
						placeholder="Confirn Password" required>
					
						<button type="submit" class="submit-btn"  name="register">
						Submit</button>
						<input type="checkbox" class="remember me"> <span>Remember me</span>
						
						<button type="button" class="btn" onclick="openLogin()">Already a member? Login</button>
					</form>
				
				</div>
			</div>
		</div>
	</div>
	
	
		<script>
		var card = document.getElementById("card");
		
		function openRegister(){
			card.style.transform = "rotateY(-180deg)";
		}
		
		function openLogin(){
			card.style.transform = "rotateY(0deg)";
		}
	
		</script>
	
			
</body>
</html>