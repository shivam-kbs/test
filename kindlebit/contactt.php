<?php include('header.php'); ?>

<script type="text/javascript" src="js/script.js"></script>

		<br>
		<!-- <contact form> -->

			<div class="container-fulid">
				<div class="row">
					<div class="col-md-6" style="margin-left: 40px;">
						<h4>KINDLEBIT SOLUTIONS PVT. LTD.</h4>
						<p>India<br>
						J-7, Second Floor<br>
						Rajiv Gandhi Information and Technology Park<br>
						Chandigarh(UT)-INDIA<br>
						Phone : +91-172-4026970
						</p>

						<br>
						<br>

						<h4>KINDLEBIT GLOBAL INC</h4>
						<p>Canada<br>
						200-8661 201ST<br>
						Langley, BC V2Y 0G9<br>
						Phone : +1-604-356-4141<br>
						Phone : +91-172-4026970</p>

						<br>
						<br>

						<h4>KINDLEBIT SOLUTIONS PTY. LTD..</h4>
						<p>Australia<br>
						JSuite 2.2,6 Reliance Drive<br>
						Tuggerah NSW 2259<br>
						Phone : +61-433258822 </p>

					</div>

					<div class="col-md-4">
						<center><h1>CONTACT US</h1></center>
						<form name="myform" action="contact.php" onsubmit="return validate()" method="post">
							<div class="form-group">
								<p>USERNAME &#42;</p>
								<input type="text" name="name" id="name" class="form-control text"  placeholder="enter username">				
							</div>

							<div class="form-group">
								<p>EMAIL &#42;</p>
								<input type="email" name="email" id="email" class="form-control text" placeholder="email">						
							</div>

							<div class="form-group">
								<p>PASSWORD &#42;</p>
								<input type="password" name="password" id="password" class="form-control text" placeholder="password">			
							</div>

							<div class="form-group">
								<p>PHONE NUMBER &#42;</p>
								<input type="number" name="phone_number" id="phone_number" class="form-control text" placeholder="phone number">
							</div>

							<div class="form-group">
								<p>DATE OF BIRTH &#42;</p>
								<input type="date" name="dob" id="dob" class="form-control text" placeholder="dob">						
							</div>

							<div class="form-group">
								<p>SELECT GENDER &#42;</p>
								<select class="form-control text" name="gender">
									<option value="male">male</option>
									<option value="female">female</option>
								</select>
							</div>


							<div class="form-group">
								<p>TYPE YOUR MASSAGE HERE &#42;</p>
								<textarea class="form-control" rows="2" cols="20" placeholder="enter your massage" name="massage"></textarea>	
							</div>

							<div class="form-group">
								<input type="submit" class="btn btn-primary" value="submit">
								<input type="reset" class="btn btn-danger" value="reset">
							</div>

						</form>

					</div>

				</div>
			</div>


		</body>
</html>
