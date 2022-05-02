<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero Primo?</title>
</head>
<body>
    <?php 
        $n1 = $_GET["numero"];
        $n2 = 2;
        while ($n1 % $n2 > 0) {
            $n2 ++;
        }
        if ($n1 == $n2){
            echo "$n1 é um número primo";
        } else {
            echo "$n1 não é primo, ele divide também por $n2";
        }
    
    ?>
    
</body>
</html>