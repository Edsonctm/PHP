<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $n1 = $_GET["inicio"];
        $n2 = $_GET["final"];
        $cont = $_GET["saltador"];


    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($n1 == $n2){
            echo "Os valores escolhidos são idênticos, não há contagem a ser feita";
        } elseif ($n1 < $n2) {
            while($n1 <= $n2) {
                echo "$n1 ";
                $n1 += $cont;
            }
        } elseif ($n1 > $n2){
            while ($n1 >= $n2) {
                echo "$n1 ";
                $n1 -= $cont;
            }
        }
    ?>
    
</body>
</html>