<?php
$GETname = $_GET["name"];

switch($GETname){
    case 'Sawamura':
        $personaname = "Sawamura Daichi";
        $genero = 'Masculino';
        $idade = 18;
        $altura = 176.7;
        $peso = 70.1;
        $num = 1;
        $posicao = 'Capitão e<br>Atacante de Ponta';
        $txt = 'A arma de Daichi não é seu ataque, mas sua recepção sólida. Ele é considerado um especialista defensivo e, junto com Nishinoya, é frequêntemente encarregado de lidar com recepções difíceis ou cobrir os erros de outro companheiro de equipa. Daichi também comandou mudanças de formação para cobrir os ataques dos oponentes. Seu conhecimento do jogo resultou de ter que aprender muitas táticas sozinho durante o primeiro ano devido à falta de um treinador.';
        break;
    case 'Sugawara':
        $personaname = "Sugawara Koshi";
        $genero = 'Masculino';
        $idade = 18;
        $altura = 174.6;
        $peso = 63.5;
        $num = 2;
        $posicao = 'Distribuidor';
        $txt = 'Quando não está em jogo, Sugawara presta bastante atenção ao modo o qual o time adversário joga, frequentemente podendo dar aos seus companheiros dicas de como derrotá-los. Quando ele tem a chance de entrar, consegue transportar o que ele aprendeu enquanto assistia e melhorar o time em geral. No entanto, ele rapidamente fica estressado com o calor do jogo e acaba pensando muito nas coisas.';
        break;
    case 'Azumane':
        $personaname = "Azumane Asahi";
        $genero = 'Masculino';
        $idade = 18;
        $altura = 186.4;
        $peso = 75.2;
        $num = 3;
        $posicao = 'Ás e Atacante<br>de Ponta';
        $txt = 'Em contraste com a sua aparência, Azumane Asahi é bastante calmo e gentil e tem suas dificuldades em perceber que ele é o ás de Karasuno, pois inicialmente não se sente assim. Ele mostra ser fraco de vontade no início, quando ele deixa a equipe antes dos primeiros anos, sentindo que ele decepcionou toda a sua equipe quando eles perderam contra Date Tech High, embora eles contassem com ele. Depois de voltar para Karasuno, ele percebe que sua vontade de jogar vôlei é muito mais forte do que ele pensava e com a ajuda de seus companheiros, ele reconhece sua posição como craque de Karasuno e ganha autoconfiança.';
        break;
    case 'Nishinoya':
        $personaname = "Nishinoya Yu";
        $genero = 'Masculino';
        $idade = 17;
        $altura = 160.5;
        $peso = 51.1;
        $num = 4;
        $posicao = 'Líbero';
        $txt = '';
        break;
    case 'Tanaka':
        $personaname = "Tanaka Ryunosuke";
        $genero = 'Masculino';
        $idade = 16;
        $altura = 178.2;
        $peso = 68.8;
        $num = 5;
        $posicao = 'Atacante de Ponta';
        $txt = '';
        break;
    case 'Ennoshita':
        $personaname = "Ennoshita Chikara";
        $genero = 'Masculino';
        $idade = 17;
        $altura = 176.1;
        $peso = 66.4;
        $num = 6;
        $posicao = 'Atacante de Ponta';
        $txt = 'Os fundamentos de Ennoshita são intermediários e ele tem um estilo de jogo decente, mas suas habilidades não são excelentes no geral. Ele é predominantemente um ponta-de-lança de esquerda. Ennoshita é sensato e bom em análise durante os jogos, o que lhe permite ver com frequência os planos de seus oponentes. Esta capacidade confere-lhe uma presença estável na equipa, à semelhança de Daichi, razão pela qual Ennoshita foi escolhido como capitão no próximo ano.';
        break;
    case 'Kinoshita':
        $personaname = "Kinoshita Hisashi";
        $genero = 'Masculino';
        $idade = 16;
        $altura = 175.8;
        $peso = 65.5;
        $num = 7;
        $posicao = 'Atacante de Ponta e Servidor';
        $txt = 'É um bom jogador no geral, sua principal força reside em sua habilidade de apontar com precisão pontos específicos na quadra com seus saques. Ele tem experiência no saque flutuante de salto e é um dos servidores de Karasuno, junto com Yamaguchi.';
        break;
    case 'Narita':
        $personaname = "Narita Kazuhito";
        $genero = 'Masculino';
        $idade = 17;
        $altura = 180.9;
        $peso = 70.2;
        $num = 8;
        $posicao = 'Bloqueador Central';
        $txt = '';
        break;
    case 'Tobio':
        $personaname = "Kageyama Tobio";
        $genero = 'Masculino';
        $idade = 16;
        $altura = 180.6;
        $peso = 66.3;
        $num = 9;
        $posicao = 'Distribuidor';
        $txt = 'Kageyama é conhecido por ser o "Rei do Campo" e um génio do voleibol, devido as suas técnicas e seu senso de jogo. Como um levantador de alto calibre, Kageyama possui a habilidade de unir seu time com o seu maior potencial, mas só o consegue depois que se esforça para se comunicar corretamente com a sua equipa. Ele é capaz de analisar as condições do atacante para que possa ajustar os seus lançamentos de acordo, ao invés de forçar como fazia anteriormente.';
        break;
    case 'Hinata':
        $personaname = "Hinata Shoyou";
        $genero = 'Masculino';
        $idade = 16;
        $altura = 164.2;
        $peso = 51.9;
        $num = 10;
        $posicao = 'Bloqueador Central';
        $txt = 'Hinata é frequentemente descrito como alguém desajeitado, mas incrivelmente atlético. Quando entrou para a Karasuno ele não sabia nada sobre vôlei e seu foco era apenas em fazer ataques. Mas com a ajuda de seus colegas ele conseguiu aprender o básico das técnicas. Apesar da sua falta de experiência, Hinata sempre tenta achar uma forma de ajudar seu time durante a partida. Ele não tem medo de tentar coisas novas e não se importa se as coisas não seguem o planejado. Hinata aprende rápido e consegue improvisar suas habilidades apenas por assistir outra pessoa e tentando copiar os movimentos, mesmo que ele sempre falhe nas primeiras tentativas. Hinata também é um dos poucos jogadores que conseguem ver toda a quadra ao saltar e chegar no ponto mais alto.';
        break;
    case 'Tsukishima':
        $personaname = "Tsukishima Kei";
        $genero = 'Masculino';
        $idade = 16;
        $altura = 190.1;
        $peso = 68.4;
        $num = 11;
        $posicao = 'Bloqueador Central';
        $txt = 'A arma de Daichi não é seu ataque, mas sua recepção sólida. Ele é considerado um especialista defensivo e, junto com Nishinoya, é frequêntemente encarregado de lidar com recepções difíceis ou cobrir os erros de outro companheiro de equipa. Daichi também comandou mudanças de formação para cobrir os ataques dos oponentes. Seu conhecimento do jogo resultou de ter que aprender muitas táticas sozinho durante o primeiro ano devido à falta de um treinador.';
        break;
    case 'Yamaguchi':
        $personaname = "Yamaguchi Tadashi";
        $genero = 'Masculino';
        $idade = 16;
        $altura = 180.0;
        $peso = 73.0;
        $num = 12;
        $posicao = 'Bloqueador Central e Servidor';
        $txt = 'Yamaguchi torna-se um servidor confiável com seu serviço flutuante. Logo no início, Yamaguchi começou a praticar a técnica de saque com flutuação em salto, não querendo ser deixado para trás pelos outros primeiros anos. Apesar de tentar e falhar no saque contra Aobajōsai em um momento difícil da partida, ele trabalha muito para melhorá-lo. Ele é inicialmente prejudicado por sua falta de experiência e coração fraco, mas, desde então, tornou-se muito mais assertivo e confiante em seu papel.';
        break;
    default:
        session_start();
        $_SESSION["error"] = true;
        header("location: error.php");
        break;
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
        <div id="personagempage" class="block2">
            <h1 class="titlepersona"><?=$personaname?></h1>
            <div class="personaimg">
                <img class="personaimgperfil" src="Midia/<?=$GETname?>.png">
            </div>
            
            <div class="info">   
                <div class="personainfo">
                    <h3 style="text-decoration: underline;">Informações Biográficas:</h3>
                    <ul class="left">
                        <li><b>Género</b>: <?=$genero?></li>
                        <li><b>Idade</b>: <?=$idade?> anos</li>
                        <li><b>Altura</b>: <?=$altura?> cm</li>
                        <li><b>Peso</b>: <?=$peso?> kg</li>
                    </ul>
                </div>
                <div class="personainfo">
                    <h3 style="text-decoration: underline;">Estado na Equipa:</h3>
                    <ul class="left">
                        <li><b>Número</b>: <?=$num?></li>
                        <li><b>Posição</b>: <?=$posicao?></li>
                    </ul>
                </div>               
                <div id="status">
                    <img id="estatisticas" src="Midia/<?=$GETname.'-status'?>.png">
                </div>
            </div>
            
        </div>
        
        <div id="nonfooter" class="separador"></div>
        
        <div id="curiosidades" class="block1">
            <h1 class="left">Curiosidades...</h1>
            <p><?=$txt?></p>

            <div class="voe">
                <img class="voeimg" src="Midia/fly-banner.png">
            </div>
        </div>

        <script>
            var persona = '<?=$GETname?>';

            if(persona == 'Narita'){
                document.getElementById('curiosidades').style.display = 'none';
                document.getElementById('status').style.display = 'none';
                document.getElementById('nonfooter').style.display = 'none';
            }else if(persona == 'Nishinoya' || persona == 'Tanaka' || persona == 'Tsukishima'){
                document.getElementById('curiosidades').style.display = 'none';
                document.getElementById('nonfooter').style.display = 'none';
            }
        </script>
        
<?php
include_once "footer.php";
?>