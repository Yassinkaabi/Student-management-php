<?php
    include ("config/db.php");
    // Check for form submission
    
    if (isset($_POST['submit'])) {
        // Get the user's input
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Check if the user's credentials are valid
        $sql = "SELECT * FROM etudiant WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            // Set session variables and redirect to the home page
            $_SESSION['email'] = $email;
            header('Location:' .SITEURL. 'index.php');
            exit();
        } else {
            // Display an error message
            echo "Invalid email or password.";
        }
    }
?>