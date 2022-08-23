<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {background-color: teal;}
        p    {
                color: white;
                font-weight: 700;
            }

    </style>
</head>
<body>
<!-- 
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. 
    Ogni punto un nuovo paragrafo. 
-->

<p>
   <?php
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim expedita et necessitatibus, saepe, accusantium, sed sunt omnis asperiores recusandae quo esse sapiente corporis amet maiores earum facere magnam iure ipsam!
    Vero quidem quos doloribus tenetur cumque expedita nisi saepe natus excepturi facilis. Repellat sit delectus est illum recusandae aut distinctio aliquid, totam, impedit cumque nam! Nisi esse repellat blanditiis quidem.
    Quaerat ipsa quidem accusamus rem quos. Rerum perferendis accusamus itaque officia aliquam unde dolorum magnam fugit laboriosam neque error provident consequuntur in, voluptatibus laudantium doloribus excepturi sequi eum qui. Nobis.
    Illo aperiam aliquid mollitia libero laboriosam recusandae accusamus sed ex quos consequatur molestiae quisquam aspernatur cumque repellat dolorem animi minima unde voluptates molestias, doloribus dolorum inventore. Vero ea similique numquam.
    Sunt quam aliquam voluptatibus tenetur quos itaque nemo dolorem porro, culpa iste esse ipsa ab. Necessitatibus veniam explicabo dolor. Enim, asperiores nobis. Saepe dolorem explicabo iste, a laboriosam ullam eveniet?
    Vel aperiam quae sapiente excepturi, id exercitationem fugiat corporis. Doloribus beatae ducimus blanditiis ipsum esse maxime excepturi quas eos saepe. Corrupti cumque dolores officia mollitia optio dignissimos ipsam suscipit et?
    Fuga, vitae nulla. Eaque consequatur asperiores amet magnam nulla, quidem dolorem aliquam repellat quaerat facilis veniam delectus cum consequuntur, itaque perferendis maiores earum harum omnis quam blanditiis molestiae? Reprehenderit, porro!
    Adipisci incidunt quibusdam eveniet repellendus praesentium blanditiis modi, fugiat minus ex nesciunt mollitia perferendis sequi corporis quo inventore hic, asperiores sint quod illum unde ea architecto impedit harum. Dicta, eveniet!';
            
    echo $text;
   ?>
</p>
<?php
    $singleP = explode('.' , $text);
    $i = 0;
    while( $i < count($singleP)-1){
?>
    <p>
        <?php
            echo $singleP[$i].'.';
            $i++;
        ?>
    </p>
<?php  
    }  
?>
</p>
</body>
</html>