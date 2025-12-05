<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/contact-sent.php" method="post">
        <label for="name">Vārds: </label>
        <input name="name" type="text">

        <label for="email">E-pasts: </label>
        <input name="email" type="text">

        <label for="text">Atsauksme: </label>
        <input name="text" type="text">

        <input type="submit" value="Nosūtīt">
    </form>
    
    <ul>
        <li>
            <a href="index.html">Home</a>
        </li>
        <li>
            <a href="about.php">About</a>
        </li>
    </ul>
</body>
</html>