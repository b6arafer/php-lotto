<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Ez az index.php
        <?php
            include("fgv.php");
            $sorsolt=sorsolas();
            var_dump($sorsolt);
            lottoszelveny($sorsolt);
            
            
            include("lottosorsolas.php");
            $friss=new lottosorsolas(5);
            $friss->lottoszelveny($sorsolt);
        ?>
    </body>
</html>
