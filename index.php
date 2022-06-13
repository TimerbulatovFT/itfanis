<?
require "config/db.php";
require "config/vars.php";
require "blocks/header.php";
$main=$_GET['mainmenu'];
$sub=$_GET['submenu'];
if (isset($main) && $main == 10){
    require "blocks/article.php";
} else {
    require "blocks/content.php";
}

require "blocks/footer.php";
?>

