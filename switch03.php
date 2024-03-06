<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>me diga onde voce guarda o seu dinheiro</h1>

<form action="" method="post">
    <label for="dinheiro">fala pra tropa</label>
    <input type="text" name="dinheiro" id="dinheiro">
 
    <button type="submit">mandar</button>

</form>

<?php
       if(isset($_POST['dinheiro'])) { 
      $dinheiro = $_POST['dinheiro'];

      switch($dinheiro) {
        case "banco":
            echo "ai nem da pra roubar";
            break;
            case "cofre":
                echo "passa seu endereço pai";
                break;
                case "casa":
                    echo "onde tu mora nego";
                    break;
        }
    }
?>
</body>
</html>