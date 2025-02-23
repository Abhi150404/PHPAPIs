<!DOCTYPE html>
<html>
    <head>Front Page</head>
    <body>
        <form action="back.php" method ="post">
            <input type ='text' required name ='a1'/>
            <input type ='submit' value ='Click'>
</form>
<h1>
    <?php
    if(isset($_GET['ab'])){
        
    $n =$_GET['ab']; // super global variable
    echo $n;

    }




    ?>
</body>
    </html>