<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Data Set</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Random Data Set</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Connect to database
                $db_host = 'localhost';
                $db_user = 'root'; 
                $db_pass = ''; 
                $db_name = 'data';

                $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Query database
                $sql = "SELECT * FROM tab";
                $result = $conn->query($sql);

                if ($result) {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>0 results</td></tr>";
                    }
                } else {
                    echo "Error: " . $conn->error;
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<!-- KARANBIR SINGH -->