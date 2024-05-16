<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">

</head>
<body>
<div class="header">
        <nav>
            <a href="#" class="text-decoration-none">Home</a>
            <a href="#" class="text-decoration-none">About</a>
            <a href="#" class="text-decoration-none">Contact Us</a>
        </nav>
    </div>
  <div class="login">
    <h2 class="d-flex justify-content-center m-4">Login to your account</h2>
    <form action="login.php" method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" required class="form-control w-2" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" required class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  </body>
</html>

<?php

if(isset($_POST['email']) && isset($_POST['password'])) {
  $db_server = "localhost";
  $username = "root";
  $password = "";
  $db_name = "company";

  // Create connection
  $conn = new mysqli($db_server, $username, $password, $db_name);

  // Check connection
  if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }

  // Sanitize user inputs to prevent SQL injection
  $email = $conn->real_escape_string($_POST['email']);
  $password = $conn->real_escape_string($_POST['password']);

  // Query to check if the email and password exist in the database
  $sql = "SELECT * FROM company WHERE email='$email'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verify the password using password_verify() function if password is hashed
    if ($row['password'] == $password) {
      // Start the session and store user data
      $_SESSION['email'] = $email;
      // Redirect to profile.php
      header("Location: profile.php");
      exit(); // Prevent further execution of the script
    } else {
      echo '<br>Invalid email or password!<br>';
    }
  } else {
    echo '<br>Invalid email or password!<br>';
  }

  // Close connection
  $conn->close();
}





?>
