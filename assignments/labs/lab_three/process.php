<?php
// Name: sebastion
// Lab 3 – Form Validation

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Get form data
  $firstName = trim($_POST["first_name"]);
  $lastName  = trim($_POST["last_name"]);
  $email     = trim($_POST["email"]);
  $message   = trim($_POST["message"]);

  // Server-side validation
  if (
    empty($firstName) ||
    empty($lastName) ||
    empty($email) ||
    empty($message)
  ) {
    echo "All fields are required.";
    exit;
  }

  // Validate email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email address.";
    exit;
  }

  // Send email
  $to = "info@bakery.com"; 
  $subject = "New Contact Form Message";

  $emailBody  = "Name: $firstName $lastName\n";
  $emailBody .= "Email: $email\n\n";
  $emailBody .= "Message:\n$message";

  mail($to, $subject, $emailBody);

} else {
  echo "Form not submitted correctly.";
  exit;
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Submitted</title>
</head>
<body>

  <h1>Thank You!</h1>
  <p>Your message has been sent.</p>

  <h2>Your Submission</h2>
  <p><strong>First Name:</strong> <?php echo htmlspecialchars($firstName); ?></p>
  <p><strong>Last Name:</strong> <?php echo htmlspecialchars($lastName); ?></p>
  <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
  <p><strong>Message:</strong><br>
     <?php echo nl2br(htmlspecialchars($message)); ?>
  </p>

</body>
</html>