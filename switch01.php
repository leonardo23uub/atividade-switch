<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>fale o seu time</h1>

<form action="" method="post">
        <label for="time">time</label>
        <input type="text" name="time" id="time">
     
        <button type="submit">enviar</button>
</form>

    <?php 

    if(isset($_POST['time'])) { 
$time = $_POST['time'];

    switch ($time) {
        case "corinthians":
            echo "voce é corinthians";
            break;
        case "palmeiras":
            echo "voce é palmerense";
            break;
        case "são paulo":
            echo "voce e são paulo";
            break;
        case "flamengo":
            echo "voce e flamengo";
            break;
        case "santos":
            echo "voce e santos";
            break;
     
        }
    }
    ?>
</body>


</html>