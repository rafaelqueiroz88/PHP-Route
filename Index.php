<?php
    session_start();
    include "Helpers/MainHelper.php";
    $helper = new Helper();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="Public/css/style.css">
    </head>
    <body>

        <div class="row">
            <div class="cell">
                <?php
                    $helper->AddSchemata();
                ?>            
            </div>
        </div>

    </body>
</html>