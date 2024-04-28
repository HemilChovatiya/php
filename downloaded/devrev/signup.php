<?php
// Backend form validation
$errors = [];

if ($_SERVER['REQUEST_METHOD']== 'POST') {
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $dob = trim($_POST['dob']);
    $gender = trim($_POST['gender']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirmPassword']);

    // Validate first name
    if (empty($firstName)) {
        $errors['firstName'] = 'First Name is required.';
    } elseif (strlen($firstName) < 2) {
        $errors['firstName'] = 'First Name should be at least 2 characters.';
    }

    // Validate last name
    if (empty($lastName)) {
        $errors['lastName'] = 'Last Name is required.';
    }

    // Validate date of birth
    if (empty($dob)) {
        $errors['dob'] = 'Date of Birth is required.';
    }

    // Validate gender
    if (empty($gender)) {
        $errors['gender'] = 'Gender is required.';
    }

    // Validate email
    if (empty($email)) {
        $errors['email'] = 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email address.';
    }

    // Validate password
    if (empty($password)) {
        $errors['password'] = 'Password is required.';
    } elseif (strlen($password) < 6) {
        $errors['password'] = 'Password should be at least 6 characters.';
    }

    // Validate confirm password
    if (empty($confirmPassword)) {
        $errors['confirmPassword'] = 'Confirm Password is required.';
    } elseif ($confirmPassword !== $password) {
        $errors['confirmPassword'] = 'Passwords do not match.';
    }

    // If there are no validation errors, proceed with signup logic
    if (empty($errors)) {
        // Perform signup logic, e.g., store user data in the database
        // If there are no validation errors, proceed with signup logic
   
        // Establish a database connection
        $servername = "localhost:3307";
        $username = "root";
        $psw = "";
        $database = "flight_booking";

        $conn = new mysqli($servername, $username, $psw, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Create the SQL query to insert user data
        $sql = "INSERT INTO users (first_name, last_name, dob, gender, email, password)
                VALUES ('$firstName', '$lastName', '$dob', '$gender', '$email', '$password')";

        // Execute the query
        if ($conn->query($sql) === true) {
            // Signup successful, redirect to success page
            header('Location: signin.html');
            exit();
        } else {
            // Error occurred while inserting data
            $errors['dbError'] = 'Error: ' . $conn->error;
        }

        // Close the database connection
        $conn->close();
        
        // Redirect to success page
        header('Location: signin.html');
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <header>
    <h1>Sign Up</h1>
  </header>
  <main>
    <form id="signupForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
      <label for="firstName">First Name:</label>
      <input type="text" id="firstName" name="firstName" required>
      <?php if (isset($errors['firstName'])): ?>
        <span class="error-message"><?php echo $errors['firstName']; ?></span>
      <?php endif; ?>

      <label for="lastName">Last Name:</label>
      <input type="text" id="lastName" name="lastName" required>
      <?php if (isset($errors['lastName'])): ?>
        <span class="error-message"><?php echo $errors['lastName']; ?></span>
      <?php endif; ?>

      <label for="dob">Date of Birth:</label>
      <input type="date" id="dob" name="dob" required>
      <?php if (isset($errors['dob'])): ?>
        <span class="error-message"><?php echo $errors['dob']; ?></span>
      <?php endif; ?>

      <label for="gender">Gender:</label>
      <select id="gender" name="gender" required>
        <option value="">Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>
      <?php if (isset($errors['gender'])): ?>
        <span class="error-message"><?php echo $errors['gender']; ?></span>
      <?php endif; ?>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <?php if (isset($errors['email'])): ?>
        <span class="error-message"><?php echo $errors['email']; ?></span>
      <?php endif; ?>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <?php if (isset($errors['password'])): ?>
        <span class="error-message"><?php echo $errors['password']; ?></span>
      <?php endif; ?>

      <label for="confirmPassword">Re-enter Password:</label>
      <input type="password" id="confirmPassword" name="confirmPassword" required>
      <?php if (isset($errors['confirmPassword'])): ?>
        <span class="error-message"><?php echo $errors['confirmPassword']; ?></span>
      <?php endif; ?>

      <input type="submit" value="Sign Up">
    </form>

  </main>
</body>
</html>
