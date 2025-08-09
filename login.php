<?php
$username = $_POST['username'];
$password = $_POST['password'];

$errors = [];

if (!preg_match('/^[a-zA-Z0-9._-]{2,}$/', $username)) {
    $errors[] = "Username must be at least 2 characters and use only letters, numbers, ., -, _";
}

if (strlen($password) < 8) {
    $errors[] = "Password must be at least 8 characters.";
}

if (!preg_match('/[@#$%]/', $password)) {
    $errors[] = "Password must include at least one special character (@, #, \$, %).";
}

if (count($errors) > 0) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }

} else {
    echo "Login successful.";
}

?>
