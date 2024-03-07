<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>penaldo</h1>

<form method="post">
        <label for="valor1">fale seu numero</label>
        <input type="text" name="valor1" id="valor1">
     
        <button type="submit">enviar</button>
</form>

    <?php 
if($_POST){
    $valor1 = $_POST['valor1'];

    switch ($valor1) {
        case 1:
            echo "voce esta na tabuada do:" . $valor1;
            echo"<br>";
            for($i = 1; $i <= 10; $i++) {
                echo $valor1 . "x" . $i . " = " . $valor1 * $i;
                echo '<br>';
            }
            break;
            case 2:
                echo "voce esta na tabuada do:" . $valor1;
                echo"<br>";
                for($i = 1; $i <= 10; $i++) {
                    echo $valor1 . "x" . $i . " = " . $valor1 * $i;
                    echo '<br>';
                }
                break;
                case 3:
                    echo "voce esta na tabuada do:" . $valor1;
                    echo"<br>";
                    for($i = 1; $i <= 10; $i++) {
                        echo $valor1 . "x" . $i . " = " . $valor1 * $i;
                        echo '<br>';
                    }
                    break;
                    case 4:
                        echo "voce esta na tabuada do:" . $valor1;
                        echo"<br>";
                        for($i = 1; $i <= 10; $i++) {
                            echo $valor1 . "x" . $i . " = " . $valor1 * $i;
                            echo '<br>';
                        }
                        break;
                        case 5:
                            echo "voce esta na tabuada do:" . $valor1;
                            echo"<br>";
                            for($i = 1; $i <= 10; $i++) {
                                echo $valor1 . "x" . $i . " = " . $valor1 * $i;
                                echo '<br>';
                            }
                            break;
                            case 6:
                                echo "voce esta na tabuada do:" . $valor1;
                                echo"<br>";
                                for($i = 1; $i <= 10; $i++) {
                                    echo $valor1 . "x" . $i . " = " . $valor1 * $i;
                                    echo '<br>';
                                }
                                break;
                            default:
                            echo"somente da 1 ao 6";
                            break;
        }
    }
    
                        


     
    ?>
</body>


</html>