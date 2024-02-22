<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Site1</title>
</head>
<body>
    <h1>Array practice in PHP</h1>
    <nav class="navbar"><a href="index.php">index</a> | <a href="./sida1.php">Site1</a></nav>
    <p>This site includes some array practice</p>
    <form action="#" method="post">
        <br>
        Input your animals seperated by commas here: <br>
        <input type="text" name="animals"><br><br>
        <input type="submit" name="send">
    </form>
    <?php 
    $data = "";
    if(isset($_POST["send"])) {
        $data = $_POST["animals"];
        $array = explode(",", $data);
        print_r($array);
        echo "<br>";
        $array[2] = "Struts";
        print_r($array);
        echo "<br>";
        $array[] = "Alpacka";
        print_r($array);
        echo "<br>";
        array_splice($array, 0, 1);
        print_r($array);
        echo "<br>";
        echo $array[1];
    }
    include "footer.php";
    ?>
</body>
</html>
