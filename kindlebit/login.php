<?php include('header.php'); ?>

	<div class="container">
		<div style="width: 500px; margin:0 auto; ">
			<h1 align="center">LOGIN</h1>
			
			<hr/>
			<form action="check_login.php" method="post">
				<div class="form-group">
					<label>user email</label>
					<input type="email" name="email" id="email" class="form-control" placeholder="email">
				</div>
				<div class="form-group">	
					<label>password</label>
					<input type="password" name="userpassword" id="userpassword" class="form-control" placeholder="password">
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="login" name="login" id="login">
					<input type="reset" class="btn btn-danger" value="reset" name="reset" id="reset">
				</div>
				<hr/>

					<a href="register.php">SIGNUP</a>
					<br>
					<a href="#">FORGET PASSWORD</a>

				
			</form>
		</div>
	</div>





</body>
</html>
