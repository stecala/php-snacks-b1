<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: lightgreen;
        }
        h2{
            display: inline-block;
        }
        div{
            display: inline-block;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <!-- 
    Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta 
    -->
    <h2>
        Otteniamo 15 numeri randomici:
    </h2>
    <?php
            $array= [];
            while (count($array) < 15){
                $randomNumber = rand(0, 30);
                if (!in_array($randomNumber, $array)) {
                    $array[] = $randomNumber;
                    echo '<div>'.$randomNumber . "</div>";
                }
            } 
        ?>
</body>
</html>