<?php
// Connect to your MySQL database
include('config.php');

// Retrieve search parameters from the query string
$origin = $_GET['origin'];
$destination = $_GET['destination'];
$date = $_GET['date'];

// Perform flight search query


$sql = "SELECT * FROM flights WHERE origin LIKE '%$origin%' OR destination LIKE '%$destination%' AND date = '$date'";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Flight Search Results</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <header>
    <h1>Flight Search Results</h1>
  </header>
  <main>
    <table>
      <tr>
        <th>Flight Number</th>
        <th>Origin</th>
        <th>Destination</th>
        <th>Date</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
      <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?php echo $row['flight_number']; ?></td>
          <td><?php echo $row['origin']; ?></td>
          <td><?php echo $row['destination']; ?></td>
          <td><?php echo $row['date']; ?></td>
          <td><?php echo $row['price']; ?></td>
          <td><a href="booking.php?flight_number=<?php echo $row['flight_number']; ?>">Book</a></td>
        </tr>
      <?php } ?>
    </table>
  </main>
</body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
