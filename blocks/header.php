<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://localhost:81/itfanis/css/main_style.css">
    <link rel="shortcut icon" href="http://localhost:81/itfanis/img/favicon.ico">
    <script src="http://localhost:81/itfanis/js/favicon.js"></script>
    <script src="http://localhost:81/itfanis/js/iframe.js"></script>

    <title>ITFanis</title>
</head>
<body>
<div id="container">
<div id="header">
    <div id="head1">
        <div id="logo"><a href="http://localhost:81/itfanis/index.php">
                <img src="http://localhost:81/itfanis/img/logo_itfanis_sm.webp" height="60px"></a></div>
        <div id="head_header"></div>
    </div>
    <div id="head2">
        <ul class="menu_ul">
            <?
            $mainmenu="mainmenu";
            $submenu="submenu";
            $res = $link->query("SELECT * FROM main_menu");
            $row = $res->fetch_all(MYSQLI_ASSOC);
            foreach ($row as $r){
                echo "<li class='menu_li'><button class='ghost-button-transition'>
<a href='http://localhost:81/itfanis/?".$mainmenu."=".$r['id'].
"'><img class='menu_img' src='http://localhost:81/itfanis/img/".$r['name'].
"-brands.svg' alt='".$r['name']."' height='30px'>".$r['name']."</a></button><ul class='drop_menu'>";
                $res2= $link->query("SELECT * FROM submenu WHERE parent_id={$r['id']}");
                $row2 = $res2->fetch_all(MYSQLI_ASSOC);
                foreach ($row2 as $r2){
                    if ($r2[dir]<>"") {
                        if ($r2[dir]<>"" && $r['id']==1 && $r2[id]==1){
                            echo "<li><a href='http://localhost:81/itfanis/dir/php/shop/www/index.php'>"
                            .$r2['name']."</a></li>";}
                        elseif ($r2[dir]<>"" && $r['id']==1 && $r2[id]==2){
                            echo "<li><a href='http://localhost:81/itfanis/dir/php/clients/www/index.php'>"
                            .$r2['name']."</a></li>";
                        } else {
                            echo "<li><a href='http://localhost:81/itfanis/?"
                            .$mainmenu."=".$r['id']."&".$submenu."=".$r2['id']."'>".$r2['name']."</a></li>";
                        } 
                        } else {
                            echo "<li><a href='#'>".$r2['name']."</a></li>";
                        } 
                }
                echo "</ul></li>";
            }
            ?>
        </ul>

    </div>
    <div id="head3"><p>Текущие дата и время:</p>
        <div id="current_date_time_block">
            <script type="text/javascript">
                /* каждую секунду получаем текущую дату и время */
                /* и вставляем значение в блок с id "current_date_time_block2" */
                setInterval(function () {
                    document.getElementById('current_date_time_block').innerHTML = date_time();
                }, 1000);
            </script>
        </div>

    </div>
</div>
    <div id="flex_container">
    <div id="left_block">
        <p class="text_standard">
            Меню раздела:
        </p>
        <div><?
            $p=$_GET['mainmenu'];
            if ($p) {
            echo "<ul>";
                $res3= $link->query("SELECT * FROM submenu WHERE parent_id={$p}");
                $row3 = $res3->fetch_all(MYSQLI_ASSOC);
                foreach ($row3 as $r3){
                    if ($r3[dir]<>""){
                        if ($r3['parent_id']==1 && $r3[id]==1){
                            echo "<li><a href='http://localhost:81/itfanis/dir/php/shop/www/index.php'>"
                                .$r3['name']."</a></li>";
                            } elseif ($r3['parent_id']==1 && $r3[id]==2){
                                echo "<li><a href='http://localhost:81/itfanis/dir/php/clients/www/index.php'>"
                                    .$r3['name']."</a></li>";
                            } else {
                            echo "<li><a href='http://localhost:81/itfanis/?"
                            .$mainmenu."=".$r3['parent_id']."&".$submenu."=".$r3['id']."'>"
                            .$r3['name']."</a></li>";
                            } 
                    } else {
                        echo "<li><a href='#'>".$r3['name']."</a></li>";
                        }
                }
            echo "</ul>";
            } else{
                echo "<p class='head_paragraff'>Выберите раздел для отображения подменю!</p>
<hr><a href='http://localhost:81/itfanis/?mainmenu=10&submenu=0' style='padding-left: 15px; font-size: 14px; color: darkgreen'>Добавить статью</a>";
            }
            ?>
        </div>
    </div>


