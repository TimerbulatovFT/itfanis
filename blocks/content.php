<?php
$t=$_GET['mainmenu'];
$n=$_GET['submenu'];
echo "<div id='content'>";
if ($n){
$res4 = $link->query("SELECT * FROM main_menu WHERE id={$t}");
$row4 = $res4->fetch_assoc();
$res5 = $link->query("SELECT * FROM submenu WHERE parent_id={$t} AND id={$n}");
$row5 = $res5->fetch_assoc();
$patch_dir = "dir/".$row4['name']."/".$row5['dir']."/www/index.php";
$style_patch="dir/".$row4['name']."/".$row5['dir']."/www/style.css";
$script_patch="dir/".$row4['name']."/".$row5['dir']."/www/script.js";

switch ($t){
    case 1:
        require $patch_dir;
        echo '<p>Код php:</p>';
        echo '<b><pre>';        
        echo highlight_string(file_get_contents($patch_dir));
        echo '</pre></b>';
        break;
    case 2:
        require $patch_dir;
        break;
    case 3:
        echo '<link rel="stylesheet" href='.$style_patch.'>
        <h1>'.$row5["name"].'</h1>';
        require $patch_dir;
        echo '<p>Код стиля:</p>
        <iframe src='.$style_patch.' scrolling="no" onload="resizeIframe(this)"></iframe>';
        break;
    case 4:
        echo '<h1>'.$row5["name"].'</h1>
        <script src='.$script_patch.'></script>        
        <p>Код скрипта:</p>
        <iframe src='.$script_patch.' scrolling="no" onload="resizeIframe(this)"></iframe>';
        break;
    case 5:
        require $patch_dir;
        break;
}
} else {
    switch ($t){
        case 1:
            require "blocks/main_php.php";
            break;
        case 2:
            require "blocks/main_html.php";
            break;
        case 3:
            require "blocks/main_css.php";
            break;
        case 4:
            require "blocks/main_js.php";
            break;
        case 5:
            require "blocks/main_java.php";
            break;
    }

}
echo "</div>";
?>