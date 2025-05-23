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
        <?php
        $temp = $_GET["temp"];
        $ep = $_GET["ep"];

        if($ep == 1){
            $btnant = 'class="botaoinvi"';
            $btndps = 'href="episodio.php?temp='.$temp.'&ep='.($ep + 1).'"><li class="inline"';
        }elseif($ep == 25 || ($temp == 3 && $ep == 10)){
            $btnant = 'href="episodio.php?temp='.$temp.'&ep='.($ep - 1).'"><li class="inline"';
            $btndps = 'class="botaoinvi"';
        }else{
            $btnant = 'href="episodio.php?temp='.$temp.'&ep='.($ep - 1).'"><li class="inline"';
            $btndps = 'href="episodio.php?temp='.$temp.'&ep='.($ep + 1).'"><li class="inline"';
        }

        switch($temp){
            case 1:
                switch($ep){
                    case 1:
                        $eplink = "https://mega.nz/embed/JNszSaQb#FvzxNoqf-ULyHn1QK4xLfbbUGhW_MOwwSrHvAeTEi1A";
                        break;
                    case 2:
                        $eplink = "https://mega.nz/embed/UA1DDKjC#vQegZoOoTFU_H3Bp1ZrkOYV3q9h-hXmI3xxtbAkMD3Y";
                        break;
                    case 3:
                        $eplink = "https://mega.nz/embed/sd8DlIhQ#CZshesdigx8zx8D08Og-6slhnSc45_WBTDkgAqhJJJs";
                        break;
                    case 4:
                        $eplink = "https://mega.nz/embed/9Y1xBCbR#AnuuVl68LuXEZD1_nWQgUfY_XL6qcTTMdXvvikUw46A";
                        break;
                    case 5:
                        $eplink = "https://mega.nz/embed/sJ0XHYiS#nB5sCWzIGA59ELyMae8Hmsbu0Rz22wKQ1VTrWSMJIPw";
                        break;
                    case 6:
                        $eplink = "https://mega.nz/embed/VE9nyISR#exkHhaTlw0fNTTOkfdvvOCJDMXUPqUNpFNpPVnZ0efU";
                        break;
                    case 7:
                        $eplink = "https://mega.nz/embed/lUkjhYhZ#jaAXlKTYULAz7zf2RTmU8506s-Y692OIniWo1_A4rgc";
                        break;
                    case 8:
                        $eplink = "https://mega.nz/embed/FEkxmIwT#vTpj2oRLP4_8U1gdF_G8JbWVYNJAR3wDjU6H3vfLZ30";
                        break;
                    case 9:
                        $eplink = "https://mega.nz/embed/1Mlx2Y7Z#kdsqehFhWO6b2oYriOT2syFYVo0sHXmdy23Kx9CCIHo";
                        break;
                    case 10:
                        $eplink = "https://mega.nz/embed/8Mt3iIAR#hGzrY_IWFZOGqH5fxOGPtIoCU-kUgl9JFN2_jtF3Bvg";
                        break;
                    case 11:
                        $eplink = "https://mega.nz/embed/VNs1jKJL#8O5ELIwlNfSi_oddluI96_IItFwPK_R5Uv8vgTRs6z8";
                        break;
                    case 12:
                        $eplink = "https://mega.nz/embed/FNlj2CJD#9x5zPqKgmXyhsb67cW4sKr1XkzYLE3z9Sv_dqNNoSD8";
                        break;
                    case 13:
                        $eplink = "https://mega.nz/embed/BFsnxIiS#xopbnF01y467J7hpLYZHXT9WyUkx2X6YLxREPVUUMd4";
                        break;
                    case 14:
                        $eplink = "https://mega.nz/embed/4N9R3YLB#AcpxqIaSc5-AASW2qQoJWt4a9TFiHO-NWG_HGj4YeBU";
                        break;
                    case 15:
                        $eplink = "https://mega.nz/embed/BQkXAaTZ#Q5Lgr30wNqJeIxLWYJRoFSehH0Xm2Wwh_eS6M7YqKOg";
                        break;
                    case 16:
                        $eplink = "https://mega.nz/embed/lJk3TITI#ZxstAOd-O3j5nsqXZJfjSbWuMeK50TGzH5gD7NhVYY4";
                        break;
                    case 17:
                        $eplink = "https://mega.nz/embed/JIth1SaQ#20ffo4Ta2UY_-QdJbiKUYWTtLZiVmUxHlhY1q1xIueQ";
                        break;
                    case 18:
                        $eplink = "https://mega.nz/embed/8M0jUS5B#hsNX1aGohb0NrtXkrProQ8uVqIC2hFuHf1pPlZQPIrY";
                        break;
                    case 19:
                        $eplink = "https://mega.nz/embed/5FsThQoL#krhK5pf35IF584Jx8B-Wb2gGJ4CsRSt-sQnt_PllU4o";
                        break;
                    case 20:
                        $eplink = "https://mega.nz/embed/FFlXxA6T#-vC7rEVdHS_vNFDFKo3sREj1R47l2JLJY73ygQMFBlo";
                        break;
                    case 21:
                        $eplink = "https://mega.nz/embed/QU8V3KJA#e7To9uynts8ly3ICLp3Nyo8wG1wQnRX4Tk8d24cKnFM";
                        break;
                    case 22:
                        $eplink = "https://mega.nz/embed/hd11ESwb#urR8tlbbWuz9ZQf28wFODvmNuQhjtP6ptdo1Q-x7b2c";
                        break;
                    case 23:
                        $eplink = "https://mega.nz/embed/0Y1B1YyA#SDLp40owtc9jp_8coXDdtWaghoRbKEhFCtrIuz6J9pM";
                        break;
                    case 24:
                        $eplink = "https://mega.nz/embed/kQ8HCSTR#tJsgRhiByDovwU3HgMMpr99kDXMUGWGo0BfeUQVbS3M";
                        break;
                    case 25:
                        $eplink = "https://mega.nz/embed/RVt1zQxa#k-u2mNW39BHK6uiuigP7R5Dz-_YsDXfFtXs4r5aR6iA";
                        break;
                    default:
                        session_start();
                        $_SESSION["error"] = true;
                        header("location: error.php");
                        break;
                }
                break;
            case 2:
                switch($ep){
                    case 1:
                        $eplink = "https://mega.nz/embed/oQ9zmQZL#VRqVCoa2QST9BGpuvW_pIU16JIQr7rz196wx8pLOLkY";
                        break;
                    case 2:
                        $eplink = "https://mega.nz/embed/sNlDUKKa#5YLHG9sqhWrNbY7L137EzWaeJHKfXeN7cYuxnTjNZgg";
                        break;
                    case 3:
                        $eplink = "https://mega.nz/embed/ZV9BkICI#Ct_nfA1ziwF4s4MTJGxDO0CGEHNYdO9iViSw7d2M8q8";
                        break;
                    case 4:
                        $eplink = "https://mega.nz/embed/ZN1nCCgQ#pkhpUw4wxzYhH8PrFz_F-7oPWV0JKie4v1BLmXaFKpQ";
                        break;
                    case 5:
                        $eplink = "https://mega.nz/embed/EdlHVK4D#ypWLT6jEq9oJVhN2h1Qs0ZkYlrEpq50U_k-aHIxCjXo";
                        break;
                    case 6:
                        $eplink = "https://mega.nz/embed/UNs3xY6S#SWKs19Gl_uHpYkS7hTzPWWYTl0j21n7HxWMygl3BEnY";
                        break;
                    case 7:
                        $eplink = "https://mega.nz/embed/cIsjiYDD#7LFMjbu5n6dia6XBgow6TQVt3LOBdOJkRJ2jlY30m80";
                        break;
                    case 8:
                        $eplink = "https://mega.nz/embed/Ic1jgQLb#UxCu00s1TCvSELFsJW7AST2znmMTJcRTv_TbouT4aVc";
                        break;
                    case 9:
                        $eplink = "https://mega.nz/embed/0AljkaLD#DTRqpEv5s0_hmSXsX_np9e5dD3Zl6tN0wXn42hsERzo";
                        break;
                    case 10:
                        $eplink = "https://mega.nz/embed/4JsDTY7B#491Wad3s5Erlfff19z85ou-WqiliR3CS_7sUTqLVjFs";
                        break;
                    case 11:
                        $eplink = "https://mega.nz/embed/pF13xQ5b#ooVeBm6Anod6Gp-t6OKqOk9OmYAp3OKJ5day8t-quHs";
                        break;
                    case 12:
                        $eplink = "https://mega.nz/embed/pNllAQTA#chGGTAacaFVvww05mERDIWebZk3w3fAF8t7q8eVOZZc";
                        break;
                    case 13:
                        $eplink = "https://mega.nz/embed/MUllUQrb#wQk_qHfLf1zQlgjHkIlTSAAfDER6a9cNvTctO7cQy_w";
                        break;
                    case 14:
                        $eplink = "https://mega.nz/embed/cM0zyADa#frDkcuh531hGGDFd4H8aLl9PFLkzqSqCvlZVPKoJlHM";
                        break;
                    case 15:
                        $eplink = "https://mega.nz/embed/0d8HHIKK#WzAbEQPxdX2FrXqg_DpYHbj-l5ezaozvQdGDIJET3V0";
                        break;
                    case 16:
                        $eplink = "https://mega.nz/embed/AckT1aCb#khxNCFwQrQOgYefoSt2Y1ZqojlHFhR-k-yyLNx21T_c";
                        break;
                    case 17:
                        $eplink = "https://mega.nz/embed/pd1nTa4Q#ZiUZ3RwVSaha5fe35wtBw4whhTIuCER_V6L4VqiHFHQ";
                        break;
                    case 18:
                        $eplink = "https://mega.nz/embed/hM8VTQBA#MTGzWtxAwV3xDuuvXI_UkpXTYf3UQvLfu2r8ngr6R3Q";
                        break;
                    case 19:
                        $eplink = "https://mega.nz/embed/ZFshBYIA#QvcF_tllAUELIUa7XGIOxlC4gMUrdVHwX6EwEjkYXz8";
                        break;
                    case 20:
                        $eplink = "https://mega.nz/embed/Ud0jBYwJ#vV3wYh3PSDg_j0w1FobRoCfuZLUJzVVzvNOy2DsO750";
                        break;
                    case 21:
                        $eplink = "https://mega.nz/embed/1EkTSAIC#8oq6Lb6fUtkvk_YBbcAZ9Vh6_zEdr5SpfknZ2-d99JI";
                        break;
                    case 22:
                        $eplink = "https://mega.nz/embed/xIszDQaD#axu95M8cG2cldmmlG0x4RiWIJBpU0uFX49ENG6XdFEE";
                        break;
                    case 23:
                        $eplink = "https://mega.nz/embed/oMt3SQyA#09l1DE0tvBRfL0srYQlm6HT3MAYm6-QR-gJfLL3nDEQ";
                        break;
                    case 24:
                        $eplink = "https://mega.nz/embed/NJs1GSJK#cSM_7wxrSq_ppsOUdpBHPGWFcPjVbhUMa-EeT2qLo8s";
                        break;
                    case 25:
                        $eplink = "https://mega.nz/embed/QZ9HWSwA#DrNYFHVRbLyUIZQIx5kG4etdeeqGOWsNnoQl0GmQ9T8";
                        break;
                    default:
                        session_start();
                        $_SESSION["error"] = true;
                        header("location: error.php");
                        break;
                }
                break;
            case 3:
                switch($ep){
                    case 1:
                        $eplink = "https://mega.nz/embed/lJ9zlCKZ#t8yjJ8j01SbrHdzNr_Qfr0mF5_QpQIW1yQU6VRz7Nsk";
                        break;
                    case 2:
                        $eplink = "https://mega.nz/embed/NM8nyI7C#giNYFYLg7Tp1dOTRK0TNJrPGkyBjSb2wrmmuIXcGtOo";
                        break;
                    case 3:
                        $eplink = "https://mega.nz/embed/MdkzhKxb#uKKYEPdLX4obgJxShvR0-2HX-5Sy9DVNhWRdh8x_3mk";
                        break;
                    case 4:
                        $eplink = "https://mega.nz/embed/4E1VkQbI#pZ_Q1h4lt765094zcCGx_aeSTkXJStRyPAuUVc7UlnM";
                        break;
                    case 5:
                        $eplink = "https://mega.nz/embed/AE8TlYxC#ZlGeLuxYIUeno-hpnQUHSdL944g5BceX0I5lUnZmiV0";
                        break;
                    case 6:
                        $eplink = "https://mega.nz/embed/AFknhSqA#nUCsJvCgoOZmMIwRiRjs9Hohf5uKPwhRSTeVcHteMls";
                        break;
                    case 7:
                        $eplink = "https://mega.nz/embed/Md0hkKzT#Ljx-JUWHx60vO1VM0sgUe0jPQX66kTSFf-qShtSrRUY";
                        break;
                    case 8:
                        $eplink = "https://mega.nz/embed/VF8VxCKR#UiWVBi0uDfYOeHcqsewmCaTIcciykDtMFYW7WdG3Ii0";
                        break;
                    case 9:
                        $eplink = "https://mega.nz/embed/cN1XUAYY#BhgQ7IEGggg6H6WIe-C2cX17Qitl15S009eFZlM3PiE";
                        break;
                    case 10:
                        $eplink = "https://mega.nz/embed/cJtXUYzK#hxREUVIzjMUzwlxLwDbD0WrnDpfyVO409j1RoOd6E_U";
                        break;
                    default:
                        session_start();
                        $_SESSION["error"] = true;
                        header("location: error.php");;
                        break;
                }
                break;
            case 4:
                switch($ep){
                    case 1:
                        $eplink = "https://mega.nz/embed/VAt12ISL#tyHEVjfwA790i_P93-7o9na-z_f10btvtHdkYcwGU5U";
                        break;
                    case 2:
                        $eplink = "https://mega.nz/embed/UR1z0Yba#nYffSsZeRFuALJugOWMCJWx9aE7oSSMfia70gIZI8x4";
                        break;
                    case 3:
                        $eplink = "https://mega.nz/embed/xUszHaIJ#IMupL55mcD0UyQix_C7Qzy0O971NpLbk6r85wjIjJY0";
                        break;
                    case 4:
                        $eplink = "https://mega.nz/embed/hMljWSAK#pXgfb35NkJ-MDjgCk2XLTKe-IWa7T7q01mi59yaxo5g";
                        break;
                    case 5:
                        $eplink = "https://mega.nz/embed/ZJ8FlazI#wvjHuvRa85qnIJibW8OHJ7Rz9cNDQY8Z8memq-hOMLk";
                        break;
                    case 6:
                        $eplink = "https://mega.nz/embed/0ElnhChS#FYgVN024p3EO7VFrKa7aMSdwS75vOZ-pQWQQwVMH8pA";
                        break;
                    case 7:
                        $eplink = "https://mega.nz/embed/MUlHmYLJ#h0EcluTyNq6DZPj_722oLsFneYfbWUkx2NO8GhTJMYE";
                        break;
                    case 8:
                        $eplink = "https://mega.nz/embed/gEtxHKqJ#pW6BJHR6jDc2jGw8gtoAD0fCGxKl8X53EpKNcLzhkIw";
                        break;
                    case 9:
                        $eplink = "https://mega.nz/embed/gQ03iCqJ#1lnP5Q9U78ClbnmthOs75EjGe3jiEHSeDpk8grXUUqc";
                        break;
                    case 10:
                        $eplink = "https://mega.nz/embed/wE1hBIbb#8XVcyqkL-H6XAgXxWakchcFLQf5-EommUFDNDntUup0";
                        break;
                    case 11:
                        $eplink = "https://mega.nz/embed/MQtBnahD#R94C33kRuASfpSi9boLTkyVz40o3uhAbJ6MWGFZqUsA";
                        break;
                    case 12:
                        $eplink = "https://mega.nz/embed/tR8xlCCY#bCletpQAM4MUmsclb5J0GaIPBYyWdbhYi_PbYRDR3DQ";
                        break;
                    case 13:
                        $eplink = "https://mega.nz/embed/4E9FwKDQ#ZwQORx2UC4A7rTcgrs_6mWHiCCS6tb84KUymlRQBgm0";
                        break;
                    case 14:
                        $eplink = "https://mega.nz/embed/lY1zBCDZ#6oW8JzSGrIgbwsaJjXlW7AONqaG0DTk7zB_XRimih6I";
                        break;
                    case 15:
                        $eplink = "https://mega.nz/embed/Zd1nzSQD#u2ItK8dnNUppdOQ8cjRxkXqtVBdIMfSoQ4wIutddeWQ";
                        break;
                    case 16:
                        $eplink = "https://mega.nz/embed/RZ0V1Iqa#I48JwBxPv1IWxpc8Hrs-EyTb06BVa6edBpTOc36D5vw";
                        break;
                    case 17:
                        $eplink = "https://mega.nz/embed/JZ8FSASS#erYuab2cwvQfZsxd3td7xdOKGHnIkCT9_anih3nPud0";
                        break;
                    case 18:
                        $eplink = "https://mega.nz/embed/gYlFSSpI#OaL-kzwZMXRk3FkxHhQsUKlYcsF6ffZl-CqEef1G4dA";
                        break;
                    case 19:
                        $eplink = "https://mega.nz/embed/QMlXXC7I#Yz82tp1OgCWUHbfw0mbkOjNuYjswNVHiMkRIagBD4b8";
                        break;
                    case 20:
                        $eplink = "https://mega.nz/embed/hB0hUYjT#oihuOhGngO8f83KYySbNt72t2LJoYiMk9rqhryMtW08";
                        break;
                    case 21:
                        $eplink = "https://mega.nz/embed/NQ9n0IrR#Bx6mQRVgY6fjtHS1_57CpDp1Q08MBXRc_Zfb14ETNuI";
                        break;
                    case 22:
                        $eplink = "https://mega.nz/embed/kclFiYTR#X8VvNAPJ7hhQl7oL8iv2_xyyhD6MetTPUXAr75P3QOc";
                        break;
                    case 23:
                        $eplink = "https://mega.nz/embed/AIsTCSQK#HWfL32zcp0Je-QTXQJT5_ssa4nxTWOCdbF5SNP-_e7o";
                        break;
                    case 24:
                        $eplink = "https://mega.nz/embed/lIlDSCAB#W61DG1QhmDmb6nyV-PpTtUk7oqIP41JP6F-9HTo3db0";
                        break;
                    case 25:
                        $eplink = "https://mega.nz/embed/NE9hmKaK#FrY-LC-Fo3ucuYiGgaBUJmfUfdo-TX8Wau4IAaWpzgg";
                        break;
                    default:
                        session_start();
                        $_SESSION["error"] = true;
                        header("location: error.php");
                        break;
                }
                break;
            default:
                session_start();
                $_SESSION["error"] = true;
                header("location: error.php");
                break;
        }
        ?>
        <div class="block2">
            <h1 class="title">Haikyuu<br>Temporada <?=$temp?></h1>
            <h3 class="center">Episódio <?=$ep?></h3>
            <div id="marginep">
                <div class="ep">
                    <iframe frameborder="0" src="<?=$eplink?>" allowfullscreen ></iframe>           
                </div>
            </div>
                <div id="botoes">
                    <a <?=$btnant?>>« Anterior</li></a>
                    <a href="temporada.php?temp=<?=$temp?>"><li class="inline"><img id="listabotao" src="Midia/Hamburger_icon.svg.png"></li></a>
                    <a <?=$btndps?>>Proximo »</li></a>
                </div>
                
        </div>
        
<?php
include_once "footer.php";
?>