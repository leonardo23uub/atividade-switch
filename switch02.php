<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>fale o seu mes favorito</h1>

    <form action="" method="post">
        <label for="mes">mes</label>
        <input type="text" name="mes" id="mes">
     
        <button type="submit">enviar</button>
</form>
        <?php
       if(isset($_POST['mes'])) { 
      $mes = $_POST['mes'];

        switch($mes) {
            case $mes:
                echo "voce gosta de $mes";
                break;
          
               default:
                echo "mes invalido";
        }
       }
        ?>
</body>
</html>