<?php
$temp = $_GET["temp"];
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
            <div id="backtexttemp">
                <h1 class="center">Haikyuu</h1>
                <h3 class="center">Temporada <?=$temp?></h3>
            </div>
        </div>

        <div class="block1">

            <h1>Descrição</h1>

        <?php
        if($temp == 1){
            $btnant = 'class="botaoinvi"';
            $btndps = 'href="temporada.php?temp='.($temp + 1).'"><li class="inline"';
        }elseif($temp == 4){
            $btnant = 'href="temporada.php?temp='.($temp - 1).'"><li class="inline"';
            $btndps = 'class="botaoinvi"';
        }else{
            $btnant = 'href="temporada.php?temp='.($temp - 1).'"><li class="inline"';
            $btndps = 'href="temporada.php?temp='.($temp + 1).'"><li class="inline"';
        }

        switch($temp){
            case 1:
        ?>
            <p>Um evento do acaso despertou o amor de Hinata Shouyou por voleibol. Seu clube não tinha membros, mas de alguma forma perseverou e finalmente chegou a seu primeiro e último jogo normal do ensino fundamental, onde ele foi atropelado por Kageyama Tobio, um jogador exemplar conhecido como "Rei do Campo". Desejando vingança, Hinata entrou na equipa de voleibol do Colégio Karasuno apenas para enfrentar seu odiado rival, Kageyama!</p>

        </div>
    
        <div class="separador"></div>
        
        <div class="block2">
            
            <h1 class="center">Episódios</h1>
            <div id="listepmargin">
                <div class="listaep">
                    <?php
                    for($ep = 1; $ep <= 25; $ep++ ){
                        ?>
                        <a class=episodio href="episodio.php?temp=<?=$temp?>&ep=<?=$ep?>">Episódio <?=$ep?></a>
                        <?php
                        if($ep != 25){
                            ?>
                            <div class="linha"></div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>

        <?php
                break;
            case 2:
        ?>
            <p>Depois de perder para Aoba Jousai, todo o time do Karasuno se sente derrotado. Especialmente Kageyama e Hinata, que parecem ser os mais devastados após a derrota. No entanto, o time logo se anima quando aparece uma chance de irem para Tóquio. Durante seu treino lá, Karasuno conhecerá novos oponentes formidáveis.</p>

        </div>
    
        <div class="separador"></div>
        
        <div class="block2">
            
            <h1 class="center">Episódios</h1>
            <div id="listepmargin">
                <div class="listaep">
                    <?php
                    for($ep = 1; $ep <= 25; $ep++ ){
                        ?>
                        <a class=episodio href="episodio.php?temp=<?=$temp?>&ep=<?=$ep?>">Episódio <?=$ep?></a>
                        <?php
                        if($ep != 25){
                            ?>
                            <div class="linha"></div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>

        <?php
                break;
            case 3:
        ?>
            <p>Karasuno VS Shiratorizawa</p>

        </div>
    
        <div class="separador"></div>
        
        <div class="block2">
            
            <h1 class="center">Episódios</h1>
            <div id="listepmargin">
                <div class="listaep">
                    <?php
                    for($ep = 1; $ep <= 10; $ep++ ){
                        ?>
                        <a class=episodio href="episodio.php?temp=<?=$temp?>&ep=<?=$ep?>">Episódio <?=$ep?></a>
                        <?php
                        if($ep != 10){
                            ?>
                            <div class="linha"></div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>

        <?php
                break;
            case 4:
        ?>
            <p>Depois de terem ganho o torneio para seleção do representante da região de Miyagi, conseguiram lugar no Campeonato Nacional. Será que conseguirão sobreviver até ao final?!?</p>

        </div>
    
        <div class="separador"></div>
        
        <div class="block2">
            
            <h1 class="center">Episódios</h1>
            <div id="listepmargin">
                <div class="listaep">
                    <?php
                    for($ep = 1; $ep <= 25; $ep++ ){
                        ?>
                        <a class=episodio href="episodio.php?temp=<?=$temp?>&ep=<?=$ep?>">Episódio <?=$ep?></a>
                        <?php
                        if($ep != 25){
                            ?>
                            <div class="linha"></div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            
        <?php
                break;
            default:
                session_start();
                $_SESSION["error"] = true;
                header("location: error.php");;
                break;
        }
        ?>
        
            <div id="botoes">
                <a <?=$btnant?>>« Temporada <?=$temp - 1?></li></a>
                <a><li class="inline"><img id="listabotao" src=""></li></a>
                <a <?=$btndps?>>Temporada <?=$temp + 1?> »</li></a>
            </div>

        </div>
    
        <script>
            var temp = "<?=$temp?>";
            
            switch(temp){
                case "1":
                    document.getElementById('backimgtemp').style.backgroundImage = 'url("Midia/anime-volleyball-Haikyuu.png")';
                    break;
                case "2":
                    document.getElementById('backimgtemp').style.backgroundImage = 'url("Midia/Haikyuu-2-Anime-Outono-2015.jpg")';
                    break;
                case "3":
                    document.getElementById('backimgtemp').style.backgroundImage = 'url("Midia/3652673.jpg")';
                    break;
                case "4":
                    document.getElementById('backimgtemp').style.backgroundImage = 'url("Midia/haikyuu_anime.png")';
                    break;
            }
        </script>
        
        <?php
        include_once "footer.php";
        ?>