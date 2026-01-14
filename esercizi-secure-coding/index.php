<?php
$conn = new mysqli(
    getenv('DB_HOST'),
    getenv('DB_USER'),
    getenv('DB_PASS'),
    getenv('DB_NAME')
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'] ?? '';
    $pass  = $_POST['password'] ?? '';

    if ($email !== '' && $pass !== '') {
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        echo "OK";
    } else {
        echo "Errore";
    }
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form di contatto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post">
    Email<br>
    <input type="email" name="email" required><br><br>

    Password<br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Invia</button>

    <input class="spunta" type="checkbox" name="privacy" required>
    Accetto la privacy<br><br>
</form>

</body>
</html>

