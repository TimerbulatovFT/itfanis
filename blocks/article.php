<?php
$t=$_GET['mainmenu'];
$n=$_GET['submenu'];
$res6 = $link->query("SELECT * FROM main_menu");
$row6 = $res6->fetch_all();
$res7 = $link->query("SELECT * FROM submenu");
$row7 = $res7->fetch_all();
echo "<div id='content'>";

$cat = $_POST['category_article'];
$head  = $_POST['head_article'];
$text  = $_POST['article_text'];

if (isset($cat) & isset($head) & isset($text)) {
    $link->query("INSERT INTO articles (name_header, name_menu, name_submenu, text_article) VALUES ('$head', '$cat', '$head', '$text')");
    echo  $cat, '<br>', $head, '<br>', $text;
}

?>

<h1>Добавить статью на сайт</h1>
<form action="#" method="post">
    <p style="font-size: 14px;color: darkgreen">Выберите категорию</p>
    <select size="5" multiple name="category_article">
        <?php
        for ($i=0;$i<5;$i++){
            echo "<option value='".$row6[$i][1]."'>".$row6[$i][1]."</option>";
        }
        ?>
    </select>
    <p style="font-size: 14px;color: darkgreen">Введите название статьи</p>
    <input type="text" size="40" name="head_article">
    <p style="font-size: 14px;color: darkgreen">Введите текст статьи</p>
    <textarea name="article_text" cols="40" rows="3"></textarea><br>
    <input type="submit" value="Добавить">
</form>


<?php
echo "</div>";
?>
