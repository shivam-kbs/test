<?php include('header.php'); ?>

	<div class="container">
		<div style="width: 500px; margin:0 auto; ">
			<h1 align="center">RESET PASSWORD</h1>
			
			<hr/>
			<form action="check_login.php" method="post">
				<div class="form-group">
					<label>password</label>
					<input type="password" name="password" id="password" class="form-control" placeholder="password">
				</div>
				<div class="form-group">	
					<label>confirm password</label>
					<input type="confirm password" name="confirm password" id="confirm password" class="form-control" placeholder="confirm password">
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="submit" name="submit" id="submit">
					
				</div>
				<hr/>

					
				
			</form>
		</div>
	</div>



</body>
</html>
