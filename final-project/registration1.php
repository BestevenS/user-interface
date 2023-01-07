<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div>
	<?php
	
	?>	
</div>

<div>
	<form action="registration1.php" method="post">
		<div class="container">

            <h1>
                Registration
            </h1>
            <p>
                Please fill in this form to create an account.
            </p>

            <! -- 1 -->
            <label for="firstname"><b>First Name</b></label>
            <input type="text" id="firstname" name="firstname" required>

            <! -- 2 -->
            <label for="lastname"><b>Lastname</b></label>
            <input type="text" id="lastname" name="lastname" required>

            <! -- 3 -->
            <label for="email"><b>Email</b></label>
            <input type="email" id="email" name="email" required>

            <! -- 4a -->
            <label for="pwd"><b>Password</b></label>
            <input type="password" id="pwd" name="pwd" required>

            <! -- 4b -->
            <label for="pwd"><b>Retype password</b></label>
            <input type="password" id="pwd" name="pwd" required>

            <! -- 5 -->
            <label for="address"><b>Address</b></label>
            <input type="text" id="address" name="address" required>

            <! -- 6 -->
            <label for="city"><b>City</b></label>
            <input type="text" id="city" name="city" required>

            <! -- 7 -->
            <label for="postalcode"><b>Postal code</b></label>
            <input type="text" id="postalcode" name="postalcode" required>

            <! -- 8 -->
            <label for="mobilephone"><b>Mobile phone</b></label>
            <input type="text" id="mobilephone" name="mobilephone" required>

            <input type="submit" id="register" name="create" value="Sign Up">
            
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process1.php',
					data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>
</body>
</html>