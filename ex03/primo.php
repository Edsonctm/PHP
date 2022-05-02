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
        $divisores = [];
       
        for ($n2 = 2; $n2 < $n1; $n2++){

            if ($n1 % $n2 > 0){
                
            } else {$divisores[] = $n2;}
        }

        if ($divisores == false) {
            echo "$n1 é um número primo";
        } else {
            echo "$n1 não é um número primo, ele é divisível também por ";
            for ($i = 0; ($i + 1) < count($divisores); $i++){
                echo "$divisores[$i] e ";}
                echo "$divisores[$i].";
        }
    
    ?>
    
</body>
</html>