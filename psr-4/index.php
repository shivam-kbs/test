 
<?php
 require 'vendor/autoload.php';
 ?>
 
 

 <!DOCTYPE html>  
<html>  
<head>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
<title>signup</title>  
</head>  
<body>  
 <form name="signup" method="post" action="save_queery.php">  
      <h1> Sign up </h1> 

      <p>   
         <label>Your username</label>  
         <input id="name" name="name" required="required" type="text" placeholder="name">  
      </p>  

      <p>   
         <label> Your email</label>  
         <input id="email" name="email" required="required" type="email" placeholder="email">  
     
        </div>
    </div> 
      </p> 

      <p>   
         <label>Your password </label>  
         <input id="password" name="password" required="required" type="password" placeholder="password">  
      </p>

      <p>   
         <label> Phone Number </label>  
         <input id="number" name="number" required="required" type="number" placeholder="number">  
      </p>  

      <p class="signin button">   
         <input type="submit" name="register">   
      </p> 

   </form> 

</body>  
</html>  


<script>
// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='signup']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      name: "required",
     
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    // Specify validation error messages
    messages: {
      name: "Please enter your firstname",
     
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
      phonenumber: {
        required: "Please provide a phonenumber",
        minlength: "Your password must be at least 10 number long"
      },

    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>