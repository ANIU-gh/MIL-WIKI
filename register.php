<?php
    
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MIL-WIKI</title>
</head>
<body>
    <?php
    include 'nav.php';
    ?>
    <h1>Rejestracja</h1>
    <form method="POST" action="register.php">
        <label for="username">Nazwa użytkownika:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="email">Adres e-mail:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Hasło:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Zarejestruj się">

    
</body>
</html>