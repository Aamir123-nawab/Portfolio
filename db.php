$host = "sqlXXX.infinityfree.com"; // Use your actual DB host from InfinityFree
$username = "localhost"; // Found in MySQL Databases
$password = "root"; // The password you set
$database = "clients"; // Your InfinityFree database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database connected successfully!";
}
