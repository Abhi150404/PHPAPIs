<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <select style="color:<?php echo $i;?>">
            <?php
            $color = array("red","green","blue","lime","yellow");
            foreach($color as $i){

                ?>
                <option  style="color:<?php echo $i;?>">
                    <?php echo $i; ?>
                </option>
                <?php } ?>
            </select>
</body>

    </html>