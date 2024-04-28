<?php
session_start();
// Perform authentication check, e.g., check if the user is logged in with appropriate session variables, etc.

if(!isset($_SESSION['email']))
{
  header('Location: signin.html');
}

// If not authenticated, redirect to sign-in page
// ...
include('config.php');
//$em=$_SESSION['email'];
$sql = "SELECT * FROM users where email='janesmith@example.com'";
$usr = mysqli_query($conn, $sql);
$userData = $usr->fetch_assoc();
$user = [
  'name' => $userData['first_name'] . ' ' . $userData['last_name'],
  'email' => $userData['email'],
];

// Example code to retrieve flight data from the database
$flights = [
    [
        'flight_number' => 'FL001',
        'origin' => 'New York',
        'destination' => 'London',
        'date' => '2023-07-10',
        'price' => 250.00
    ],
    [
        'flight_number' => 'FL002',
        'origin' => 'Paris',
        'destination' => 'Tokyo',
        'date' => '2023-07-12',
        'price' => 350.00
    ],
    [
        'flight_number' => 'FL003',
        'origin' => 'Los Angeles',
        'destination' => 'Sydney',
        'date' => '2023-07-15',
        'price' => 450.00
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Flight Booking Dashboard</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
}

h1 {
  margin: 0;
}

p {
  margin-top: 5px;
}

a {
  color: #fff;
  text-decoration: none;
}

main {
  padding: 20px;
}

h2 {
  margin-top: 0;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #333;
  color: #fff;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}

td a {
  display: inline-block;
  padding: 5px 10px;
  background-color: #333;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
}

.error-message {
  color: red;
  margin-top: 5px;
}
</style>
<body>
  <header>
    <h1>Welcome, <?php echo $user['name']; ?>!</h1>
    <p>Email: <?php echo $user['email']; ?></p>
    <a href="logout.php">Logout</a>
  </header>
  <main>
    <h2>Available Flights</h2>
    <table>
      <tr>
        <th>Flight Number</th>
        <th>Origin</th>
        <th>Destination</th>
        <th>Date</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
      <?php foreach ($flights as $flight): ?>
        <tr>
          <td><?php echo $flight['flight_number']; ?></td>
          <td><?php echo $flight['origin']; ?></td>
          <td><?php echo $flight['destination']; ?></td>
          <td><?php echo $flight['date']; ?></td>
          <td><?php echo $flight['price']; ?></td>
          <td><a href="booking.php?flight_number=<?php echo $flight['flight_number']; ?>">Book</a></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </main>
</body>
</html>
