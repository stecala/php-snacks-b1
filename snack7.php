<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        Creare un array contenente qualche alunno di un'ipotetica classe. 
        Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
         Stampare Nome, Cognome e la media dei voti di ogni alunno.
    -->
    <h1>Lista alunni classe 67</h1>
    <p>
        <ul>
    <?php
        $classe67 = [
            [
                'nome' => 'Stefano',
                'cognome' => 'Calarota',
                'voti' => [ 7 , 9 , 7, 5, 10],
            ],
            [
                'nome' => 'Giampiero',
                'cognome' => 'Fedeli',
                'voti' => [ 8 , 4 , 6 , 10 , 7],
            ],
            [
                'nome' => 'Simone',
                'cognome' => 'Rizzo',
                'voti' => [ 7 , 5 , 7, 7, 2],
            ],
            [
                'nome' => 'Andrea',
                'cognome' => 'Prina',
                'voti' => [  8, 9 , 9, 8, 10],
            ],
            [
                'nome' => 'Daniele',
                'cognome' => 'Canale',
                'voti' => [ 7 , 9 , 5, 7, 6],
            ],
        ];

        for($i=0 ; $i<count($classe67); $i++){
        
    ?>
    
            <li style="padding-top: 10px">
                <?php
                    $somma = 0;
                    for($k = 0 ; $k < count($classe67[$i]['voti']) ; $k++){
                        $somma = $somma +$classe67[$i]['voti'][$k];
                    }
                    $media = $somma / 5;

                    echo 'Nome: '.$classe67[$i]['nome'].'<br>Cognome: '.$classe67[$i]['cognome'].'<br>Media: '.$media;
                ?>
            </li>
            
            <?php
            }
            ?>
        </ul>
    </p>
    
    
</body>
</html>