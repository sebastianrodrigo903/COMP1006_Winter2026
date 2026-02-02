<?php
// Name: sebastion
// Lab 3 – Form Validation
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Form</title>
</head>
<body>

  <h1>Contact Us</h1>

  <form action="process.php" method="POST">

    <label>First Name</label><br>
    <input type="text" name="first_name" required><br><br>

    <label>Last Name</label><br>
    <input type="text" name="last_name" required><br><br>

    <label>Email</label><br>
    <input type="email" name="email" required><br><br>

    <label>Message</label><br>
    <textarea name="message" required></textarea><br><br>

    <button type="submit">Send</button>

  </form>

</body>
</html>