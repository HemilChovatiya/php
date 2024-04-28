<?php
session_start();

// Backend form validation
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Validate username
    if (empty($username)) {
        $errors['username'] = 'Username is required.';
    }

    // Validate password
    if (empty($password)) {
        $errors['password'] = 'Password is required.1';
    }

    // If there are no validation errors, proceed with sign-in logic
    if (empty($errors)) {
        // Perform sign-in logic, e.g., verify credentials, set session, etc.
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['username']);
            $password = trim($_POST['password']);

            // Validate form data
            // Validate email
            if (empty($email)) {
                $errors['email'] = 'Email is required.';
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Invalid email address.';
            }

            // Validate password
            if (empty($password)) {
                $errors['password'] = 'Password is required.2';
            }

            // If there are no validation errors, proceed with sign-in logic
            if (empty($errors)) {
                // Establish a database connection
                include('config.php');

                // Create the SQL query to retrieve user data based on email
                $sql = "SELECT * FROM users WHERE email = '$email'";

                // Execute the query
                $result = $conn->query($sql);

                if ($result->num_rows === 1) {
                    // User found, verify password
                    $row = $result->fetch_assoc();
                    $storedPassword = $row['password'];
                   
                    if ($password===$storedPassword) {
                        // Password is correct, set session variables
                        $_SESSION=[];
                        $_SESSION['user_id'] = $row['id'];
                        $_SESSION['email'] = $row['email'];
                        
                        // Redirect to the dashboard or authenticated page
                        header('Location: dashboard.php');

                    } else {
                        // Invalid password
                        $errors['password'] = 'Invalid password.';
                    }
                } else {
                    // User not found
                    $errors['email'] = 'User not found.';
                }

                // Close the database connection
                $conn->close();
            }
        
        // Redirect to dashboard or other authenticated page
        //header('Location: signin.html');
        //exit();
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <header>
        <h1>Sign In</h1>
    </header>
    <main>
        <form id="signinForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <?php if (isset($errors['username'])): ?>
                <span class="error-message">
                    <?php echo $errors['username']; ?>
                </span>
            <?php endif; ?>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <?php if (isset($errors['password'])): ?>
                <span class="error-message">
                    <?php echo $errors['password']; ?>
                </span>
            <?php endif; ?>

            <input type="submit" value="Sign In">
        </form>
    </main>
</body>

</html>