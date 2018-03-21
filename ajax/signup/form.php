<!DOCTYPE html>
<html>
<head>
<title>regform</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<body>

<div sylye="width:200px; margin:auto;">

	<form action="" method="POST" role="form">

	</center><h1>SIGNUP</h1>

	<P>
		<strong>NAME</strong>
	</P>

	<p>
		<input type="text" name="username" id="username" placeholder="name">

	</p>	

	<P>
		<strong>EMAIL</strong>
	</P>

	<p>
		<input type="email" name="email" id="email" placeholder="email">

	</p>	

	<P>
		<strong>PASSWORD</strong>
	</P>

	<p>
		<input type="password" name="password" id="password" placeholder="password">

	</p>

	<p>
		<button id="btn">SIGNUP</button>
	</p>	
    </form>
</div>

</body>
<script>
$(document).ready(function(){

$('#btn').click(function(e){
e.preventdefault();
var username  = $('#username').val();
var email = $('#email').val();
var password = $('#password').val();
 $.post('register.php', {username : username, email : email password : password}, function(res, s){
            if(s === 'success')
            {
              if(res.success == true)
              {
                return alert('successfuly inserted !!');
              }
              return alert('ERROR');
            }
          }, 'json');
        });
      });
    </script>
</body>
</html>

