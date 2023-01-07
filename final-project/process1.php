<?php
require_once('config.php');
?>

<?php

    if(isset($_POST)){

        $firstname      = $_POST['firstname'];
        $lastname       = $_POST['lastname'];
        $email          = $_POST['email'];
        $pwd            = sha1($_POST['pwd']);
        $address        = $_POST['address'];
        $city           = $_POST['city'];
        $postalcode     = $_POST['postalcode'];
        $mobilephone    = $_POST['mobilephone'];

		$sql    =   " 
                    INSERT INTO users   (firstname, lastname, email, pwd, 
                                            address, city, postalcode, mobilephone) 
                    VALUES              (:firstname, :lastname, :email, :pwd, 
                                            :address, :city, :postalcode, :mobilephone)
                    ";

        $stmt   =   $db   -> prepare($sql);
        $result =   $stmt -> execute([

            ':firstname'    => $firstname, 
            ':lastname'     => $lastname, 
            ':email'        => $email, 
            ':pwd'          => $pwd, 
            ':address'      => $address, 
            ':city'         => $city, 
            ':postalcode'   => $postalcode, 
            ':mobilephone'  => $mobilephone

        ]);
        
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}