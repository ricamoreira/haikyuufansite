<?php
session_start();
if(isset($_SESSION["error"]) && $_SESSION["error"] == true){
    $_SESSION = array();
    session_destroy();
}else{
    ?>
    <script> history.go(-1); </script>
    <?php
}
?>
<!DOCTYPE html>
<html>
    <head lang="pt">
        <title>Haikyuu Fan Site</title>
        <link rel="icon" href="Midia/favicon.ico" type="image/x-icon">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles_.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="header"></div>
        <a href="index.php"><img class="logosite" src="Midia/logosite.png" width="100px"></a>
        <div id="backimgtemp">
            <div class="bannertemp"></div>
        </div>
                    
        <div class="block2" style="text-align: center;">

            <h1>Ocorreu um erro!</h1>
            <p>Pedimos desculpa pela inconveniência.<br>Tente fechar e reabrir a página.</p>

        </div>

<?php
include_once "footer.php";
?>