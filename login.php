<?php
//include 'conn.php';
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
    <form method="POST" action="login.php">
        <label for="username">Nazwa użytkownika:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Hasło:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Zaloguj się">
    
</body>
</html>