<?php
$db_server = "localhost";
$username = "root";
$password = "";
$db_name = "company";
$conn = "";

try {
    $conn = mysqli_connect($db_server, $username, $password, $db_name);
} catch (mysqli_sql_exception $e) {
    echo 'Database is not connected';
}


if ($conn) {

    
    $sql = "SELECT name, city, state, logindate FROM company";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Check if there are any records
        if (mysqli_num_rows($result) > 0) {

            
            // Displaying table headers
            echo '<style>
                    table {
                        display: flex;
                        justify-content: center;
                        width: 100%;
                        border-collapse: collapse;
                        font-family: Arial, sans-serif;
                    }

                    body{
                        background: rgb(0,149,27);
background: -moz-linear-gradient(90deg, rgba(0,149,27,1) 41%, rgba(186,225,0,1) 100%);
background: -webkit-linear-gradient(90deg, rgba(0,149,27,1) 41%, rgba(186,225,0,1) 100%);
background: linear-gradient(90deg, rgba(0,149,27,1) 41%, rgba(186,225,0,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#00951b",endColorstr="#bae100",GradientType=1);
                    }

                    h2 {
                        font-size: 26px;
                        text-transform: uppercase;
                        text-align: center;
                        margin: 20px;
                    }

                    th, td {
                        border: 1px solid #dddddd;
                        text-align: left;
                        padding: 10px;
                    }
                    th {
                        color: white;
                        text-align: center;
                        font-weight: bold;
                        font-size: 20px;
                    }
                    
                    
                  </style>';

            echo '<h2>Active users</h2>';
            echo '<table>
                    <tr>
                        <th>Name</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Login Date</th>
                    </tr>';

            // Fetching and displaying each row of the result
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>
                        <td>' . $row['name'] . '</td>
                        <td>' . $row['city'] . '</td>
                        <td>' . $row['state'] . '</td>
                        <td>' . $row['logindate'] . '</td>
                    </tr>';
            }

            echo '</table>';
        } else {
            echo 'No records found';
        }
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }

    // Free result set
    mysqli_free_result($result);

    // Close connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Active Users</title>
</head>
<body>
        <a href="home.php">
            Click here to go back to home
        </a>
    
</body>
</html>
