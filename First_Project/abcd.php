<!DOCTYPE html>
<html>
    <hrad>
    <title>
        PHP
</title>
</head>
<body>
    <?php
    $color =array("red","blue","Yellow","Lime","green");
    foreach($color as $i)
    {

        ?>
        <h1 style="color:<?php echo $i;?>"> <?php echo $i;?></h1>
        <?php     }    ?>
        
</body>
</html>