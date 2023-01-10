<?php
    include_once 'config.php';
?>

<?php
    if (isset($_POST['register'])) {
        // Get the form data
        $firstname      = $_POST['firstname'];
        $lastname       = $_POST['lastname'];
        $email          = $_POST['email'];
        $password       = $_POST['password'];
        $password_again = $_POST['password_again'];
        $address        = $_POST['address'];
        $city           = $_POST['city'];
        $postal_code    = $_POST['postal_code'];
        $mobile_phone   = $_POST['mobile_phone'];
        
        // Hash the password
        $options            = ['cost' => 12];
        $hashed_password    = password_hash($password, PASSWORD_DEFAULT, $options);

        // Check if the passwords match
        if($password !== $password_again) {
            echo 'Passwords do not match';
            exit();
        }

        // Prepare and execute the SQL statement
        $stmt = $db ->      prepare("INSERT INTO users (firstname, lastname, email, password, address, city, postal_code, mobile_phone) VALUES (:firstname, :lastname, :email, :password, :address, :city, :postal_code, :mobile_phone)");
        $stmt       ->      bindParam(':firstname', $firstname);
        $stmt       ->      bindParam(':lastname', $lastname);
        $stmt       ->      bindParam(':email', $email);
        $stmt       ->      bindParam(':password', $hashed_password);
        $stmt       ->      bindParam(':address', $address);
        $stmt       ->      bindParam(':city', $city);
        $stmt       ->      bindParam(':postal_code', $postal_code);
        $stmt       ->      bindParam(':mobile_phone', $mobile_phone);
        try {
            $stmt   ->      execute();
            echo 'Registration successful';
        } catch (PDOException $e) {
            echo 'Error: ' . 
            $e      ->      getMessage();
        }
    }
?>
