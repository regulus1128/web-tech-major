<?php
    include('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="registration.css">
    <title>Register Now!</title>
</head>
<body>
<form action="registration.php" method="post" class="registration">
        <h2 class="text-center mt-2">Register</h2>

        <div class="name">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="fname" id="">
        </div>

        <div class="name">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="emailid" id="">
        </div>

        <div class="name">
            <label for="pword" class="form-label">Password</label>
            <input type="password" name="password" id="">
        </div>

        <div class="name">
            <label for="city" class="form-label">City</label>
            <input type="text" name="cityy" id="">
        </div>

        <div class="name">
            <label for="state" class="form-label">State</label>
            <input type="text" name="statee" id="">
        </div>

        <div class="name">
            <label for="date" class="form-label">Date of birth</label>
            <input type="date" name="dob" id="">
        </div>

        <div class="submit">
        <button type="submit" class="btn btn-primary">Register</button>
        </div>
        
    </div>
</div>
</form>
</div>
</body>
</html>


<?php
    $db_server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "company";
    $conn = "";

// Create connection
$conn = new mysqli($db_server, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$fname = $_POST['fname'];
$email = $_POST['emailid'];
$password = $_POST['password'];
$city = $_POST['cityy'];
$state = $_POST['statee'];
$dob = $_POST['dob'];
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);

// SQL query to insert data into table
$sql = "INSERT INTO company (name, email, password, city, state, dob) VALUES ('$fname', '$email', '$password', '$city', '$state', '$dob')";

if ($conn->query($sql) === TRUE) {
    echo "<br>New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>