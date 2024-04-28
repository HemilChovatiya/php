<?php

session_start();
// Connect to your MySQL database
include('config.php');
if(!isset($_SESSION['email']))
{
  header('Location: signin.html');
}

// Retrieve booking details from the form submission
$name = $_POST['name'];
$email = $_POST['email'];
$flight = $_POST['flight'];

// Insert the booking record into the database
$sql = "INSERT INTO bookings (name, email, flight) VALUES ('$name', '$email', '$flight')";

if (mysqli_query($conn, $sql)) {
    echo "Thank you for booking!";
} else {
    echo "Error creating booking: " . mysqli_error($conn);
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Booking Confirmation</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <header>
    <h1>Booking Confirmation</h1>
  </header>
  <main>
    <h2>Thank you for booking!</h2>
    <p>Your booking details:</p>
    <ul>
      <li><strong>Name:</strong> <?php echo $name; ?></li>
      <li><strong>Email:</strong> <?php echo $email; ?></li>
      <li><strong>Flight Number:</strong> <?php echo $flight; ?></li>
    </ul>
  </main>
</body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
