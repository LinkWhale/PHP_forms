<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Index</title>
</head>
<body>
    <h1>Welcome to Index</h1>
    <nav class="navbar"><a href="index.php">index</a> | <a href="./sida1.php">Site1</a></nav>
    <p> The site takes a word and outputs it in many different ways</p>
    <?php 
    echo "Denna text är genererat med utskriftskommandot i PHP";
    ?>

    <form action="#" method="post">
        Name: <input type="text" name="name" placeholder="Type in your name here"><br>
        <input type="submit" name="send" value="Send">
    </form>
    <?php
    if(isset($_POST["send"])) 
    {
        if(trim($_POST['name']) == "")
        {
            $name = "NoName";
        }
        else {
        $name = $_POST["name"];
        }
        echo "Welcome ", $name, "<br>"; 
        echo "Backwards: ", strrev($name), "<br>";
        echo "Lowercase: ", strtolower($name), "<br>";
        echo "Uppercase: ", strtoupper($name), "<br>";
        echo "Length: ", strlen($name), "<br>";
    }
    include "footer.php";
    ?>

</body>
</html>