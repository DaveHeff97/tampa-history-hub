<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $site_name = htmlspecialchars($_POST['site_name']);
  $address = htmlspecialchars($_POST['address']);
  $description = htmlspecialchars($_POST['description']);
  
  // Save to a text file (replace with database in production)
  $file = 'sites.txt';
  $data = "Submitted by: $name\nSite Name: $site_name\nAddress: $address\nDescription: $description\n\n";
  file_put_contents($file, $data, FILE_APPEND);
  
  // Redirect back with success message
  header("Location: tampahistorywebsite.html?success=1");
  exit;
}
?>