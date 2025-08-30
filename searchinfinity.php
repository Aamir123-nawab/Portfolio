<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search_input = trim($_POST['search']);

    // Database credentials for InfinityFree
    $host = "sql306.infinityfree.com"; // Your MySQL Hostname
    $username = "if0_38198798"; // Your MySQL Username
    $password = "cvNmCtcW4Oqjf"; // Your MySQL Password (Change it ASAP for security)
    $database = "if0_38198798_clients"; // Your Database Name

    // Create a connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die('<p class="error">Database connection failed: ' . $conn->connect_error . '</p>');
    }

    // Prepare and execute query
    $sql = "SELECT * FROM id WHERE cnic = ? OR number = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ss", $search_input, $search_input);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $id = htmlspecialchars($row['id']);
            $name = htmlspecialchars($row['name']);
            $number = htmlspecialchars($row['number']);
            $cnic = htmlspecialchars($row['cnic']);
            $tehsil = htmlspecialchars($row['tehsil']);
            $district = htmlspecialchars($row['district']);
            $address = $tehsil . ', ' . $district;
            $latitude = htmlspecialchars($row['lat']);
            $longi = htmlspecialchars($row['longi']);
            $district_name = ($district == '68.62') ? 'Khairpur' : $district;
            $deh = ($tehsil == 'Mirwah') ? 'Mangho Shar' : htmlspecialchars($row['deh']);

            echo '<p><strong>ID:</strong> ' . $id . '</p>'; 
            echo '<p><strong>Name:</strong> ' . $name . '</p>';
            echo '<p><strong>Number:</strong> ' . $number . '</p>';
            echo '<p><strong>CNIC:</strong> ' . $cnic . '</p>';
            echo '<p><strong>Address:</strong> ' . $address . '</p>';
            echo '<p><strong>Latitude:</strong> ' . $latitude . '</p>';
            echo '<p><strong>Longitude:</strong> ' . $longi . '</p>';
            echo '<p><strong>District:</strong> ' . $district_name . '</p>';
            echo '<p><strong>Tehsil:</strong> ' . $tehsil . '</p>';
            echo '<p><strong>Deh:</strong> ' . $deh . '</p>';
        } else {
            echo '<p class="error">No records found for: ' . htmlspecialchars($search_input) . '</p>';
        }

        $stmt->close();
    } else {
        echo '<p class="error">Query preparation failed: ' . $conn->error . '</p>';
    }

    $conn->close();
}
?>
