<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "elisabetmisganew@gmail.com"; 
  $from = $_POST["email"];
  $comment = $_POST["comment"];
  $subject = "New comment from your portfolio website";
  $message = "From: $from\n\nComment: $comment";

  // Mail headers
  $headers = "From: $from\r\n";
  $headers .= "Reply-To: $from\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

  // Sending the email
  if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Failed to send email. Please try again later.";
  }
}
?>