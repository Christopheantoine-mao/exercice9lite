<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage des Données</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
        }
        input[type="color"] {
            border: none;
            padding: 0;
        }
    </style>
</head>
<body>
<?php
$host = 'localhost';
$dbname = 'FormDB';
$username = 'root';
$password = '';

$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

$stmt = $pdo->query("SELECT firstname, lastname, email, color FROM UserInfo");
echo "<table>";
echo "<tr><th>Prénom</th><th>Nom</th><th>Email</th><th>Couleur</th></tr>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['firstname']) . "</td>";
    echo "<td>" . htmlspecialchars($row['lastname']) . "</td>";
    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
    echo "<td><input type='color' value='" . htmlspecialchars($row['color']) . "' disabled></td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
