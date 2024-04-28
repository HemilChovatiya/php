<!DOCTYPE html>
<html>
<head>
  <title>Flight Search</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <header>
    <h1>Flight Search</h1>
  </header>
  <main>
    <form action="search.php" method="GET">
      <label for="origin">Origin:</label>
      <input type="text" id="origin" name="origin" required>

      <label for="destination">Destination:</label>
      <input type="text" id="destination" name="destination" required>

      <label for="date">Date:</label>
      <input type="date" id="date" name="date" required>

      <input type="submit" value="Search Flights">
    </form>
  </main>
</body>
</html>
