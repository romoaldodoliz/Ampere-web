<?php
session_start();

// Change this to your connection info.
$DATABASE_HOST = 'localhost:8889';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'root';
$DATABASE_NAME = 'ampere-web';

// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if (!isset($_POST['username'], $_POST['password'])) {
    // Could not get the data that should have been sent.
    exit('Please fill both the username and password fields!');
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT id, username, password FROM admin WHERE username = ?')) {
    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    // Store the result so we can check if the account exists in the database.
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Bind the result variables.
        $stmt->bind_result($id, $username, $hashed_password);
        $stmt->fetch();

        // Verify the password using SHA-256.
        if (hash('sha256', $_POST['password']) === $hashed_password) {
            // Password is correct, so start a new session and save the user ID to the session.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $username;
            header('Location: ../home.php');
        } else {
            // Password is not correct.
            echo 'Palavra passe incorrecta!';
        }
    } else {
        // Username not found.
        echo 'Utilizador incorrecto!';
    }

    $stmt->close();
}
?>
