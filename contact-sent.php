<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/contact.php">Contact</a>

    <h1>Dati nosūtīti!</h1>

    <?php
    
    echo "<h3>Dati:</h3>";
    echo "<p>$_POST[name]</p>";
    echo "<p>$_POST[email]</p>";
    echo "<p>$_POST[text]</p>";

    ?>

</body>
</html>