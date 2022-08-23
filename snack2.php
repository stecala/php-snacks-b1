<!-- 
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
        che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
        Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"

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
        
        error_reporting(E_ALL ^ E_NOTICE);  

        if(is_null($_GET['name']) || is_null($_GET['email']) || is_null($_GET['age']))
        {
            echo '<h1>Inserisci valori</h1>';
        }
        else{
            $userName = $_GET['name'];
            $email = $_GET['email'];
            $age = $_GET['age'];
            
            if (strlen($userName) > 3 && strpos($email, '@') !== false && strpos($email, '.') !== false && is_numeric($age)) {
                echo "<h1>Welcome, " . $userName . "</h1>";
            } else {
                echo "<h1>Error</h1>";
            }
        }
    ?>
</body>
</html>