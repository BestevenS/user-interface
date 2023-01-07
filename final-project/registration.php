<?php
    include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"              href="index.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js">          </script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js">   </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11">            </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- <script src="index.js"></script> -->
    <title>User Registration</title>
</head>
<body>

    <div>
        <?php
        
        ?>
    </div>
    
    <div>
        <form action="registration.php" method="post">
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
    <script type="text/javascript">
        $(function() {
            $("#register").click(function(e){

                var valid = this.form.checkValidity();

                
                if(valid){

                    var firstname   = $('#firstname').val();
                    var lastname    = $('#lastname').val();
                    var email       = $('#email').val();
                    var pwd         = $('#pwd').val();
                    var address     = $('#address').val();
                    var city        = $('#city').val();
                    var postalcode  = $('#postalcode').val();
                    var mobilephone = $('#mobilephone').val();

                    e.precentDefault();

                    $.ajax({
                        type    :   'POST',
                        url     :   'process.php',
                        data    :   $(this).serialize(),
                        success :   function(data){
                                        Swal.fire({
                                            'title' :   'Congratulations!',
                                            'text'  :   'Registered!',
                                            'type'  :   'success'
                                        })
                                        console.log(data);
                                    },
                        error   :   function(data){
                                        Swal.fire({
                                            'title' :   'Error!',
                                            'text'  :   'Not Registered!',
                                            'type'  :   'error'
                                        })
                                        console.log(data);
                                    }
                    });
                }


                console.log("form is not filled out!");
                if( firstname   == '' || 
                    lastname    == '' || 
                    email       == '' || 
                    pwd         == '' || 
                    address     == '' || 
                    city        == '' || 
                    postalcode  == '' || 
                    mobilephone == '' ){
                    
                    Swal.fire({
                        'title' :   'Error!',
                        'text'  :   'Please fill out the form!',
                        'type'  :   'error'
                    })

                }
            });
        });
    </script>

</body>
</html>