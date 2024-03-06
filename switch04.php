<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>seu jogador favorito</h1>

<form action="" method="post">
    <label for="jogador">fala ai</label>
    <input type="text" name="jogador" id="jogador">
 
    <button type="submit">lança</button>

    <?php
       if(isset($_POST['jogador'])) { 
      $jogador = $_POST['jogador'];

      switch($jogador) {
        case "cris":
            echo "penaldo so gol de penalti";
            break;
            case "messi":
                echo "goat, o melhor";
                break;
                case "naymar":
                    echo "esse e gordo";
                    break;
                    case "guedes":
                        echo "o melhor de todos";
                        break;
                       
        }
    }
?>

</body>
</html>