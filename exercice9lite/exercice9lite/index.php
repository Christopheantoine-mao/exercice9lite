<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'enregistrement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            margin-top: 10px;
            display: block;
        }
        input[type="text"],
        input[type="email"],
        input[type="color"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #5c67f2;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #5058e5;
        }
    </style>
</head>
<body>
<form action="submit.php" method="post">
    <label for="firstname">Prénom:</label>
    <input type="text" id="firstname" name="firstname" required><br>
    <label for="lastname">Nom:</label>
    <input type="text" id="lastname" name="lastname" required><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    <label for="color">Couleur préférée:</label>
    <input type="color" id="color" name="color" required><br>
    <input type="submit" value="Soumettre">
</form>
</body>
</html>

