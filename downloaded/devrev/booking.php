<?php
// Connect to your MySQL database
include('config.php');
// Retrieve flight number from the query string
$flightNumber = $_GET['flight_number'];
session_start();
// Perform authentication check, e.g., check if the user is logged in with appropriate session variables, etc.

if(!isset($_SESSION['email']))
{
  header('Location: signin.html');
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Flight Booking</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <header>
    <h1>Flight Booking</h1>
  </header>
  <main>
    <form action="confirmation.php" method="POST">
      <label for="name">Passenger Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="flight">Flight Number:</label>
      <input type="text" id="flight" name="flight" value="<?php echo $flightNumber; ?>" readonly>

      <input type="submit" value="Book Flight">
    </form>
  </main>
</body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
