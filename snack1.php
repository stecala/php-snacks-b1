<!--  
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $matches = [ 
            [ 
                'team-1' => 'Bologna',
                'team-2' => 'Milano',
                'score-1' => '50',
                'score-2' => '10',
            ],
            [
                'team-1' => 'Roma',
                'team-2' => 'Lecce',
                'score-1' => '40',
                'score-2' => '30',
            ],
            [
                'team-1' => 'Trento',
                'team-2' => 'Palermo',
                'score-1' => '40',
                'score-2' => '38',
            ], 
        ];    
        for($i = 0 ; $i<count($matches); $i++){
    ?>
    <p>
        <?php
            $game = $i+1;
            echo 'Incontro '.$game.': '.$matches[$i]['team-1'] .'-'.$matches[$i]['team-2'].' con un punteggio '.$matches[$i]['score-1'].'-'.$matches[$i]['score-2'];
        ?>
    </p>

    <?php
        }
    ?>
</body>
</html>