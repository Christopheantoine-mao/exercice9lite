<?php
$host = 'localhost'; // or a remote IP address
$dbname = 'FormDB';
$username = 'root'; // your database username
$password = ''; // your database password

try {
    // Create a new PDO instance and set error mode to exception
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare and execute the query
    $stmt = $pdo->prepare("INSERT INTO UserInfo (firstname, lastname, email, color) VALUES (?, ?, ?, ?)");
    $stmt->execute([
        $_POST['firstname'],
        $_POST['lastname'],
        $_POST['email'],
        $_POST['color']
    ]);

    // Redirect to the display page to show results
    header('Location: display.php');
    exit;
} catch (PDOException $e) {
    // Handle connection errors or errors during query execution
    die("Database error: " . $e->getMessage());
}
?>
