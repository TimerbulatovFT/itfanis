
<?php

echo '<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//libs.raltek.ru/libs/jquery/1.8.3/js/jquery-1.8.3.js"></script>
	<link href="style.css" rel="stylesheet" type="text/css" />
    <script src="script.js"></script>
    <title>Контакты и реквизиты</title>
</head>
<body>';?>


<div id="car_producers_wrapper">
    <form name="car_producers" id="car_producers" method="post" action="">
        <div class="row">
            <label for="producer">Выберите город или район:</label>
            <select id="producer" size="16" name="producer">
                <option value="0">Выберите из списка</option>
                <?php
                $aProducers = getProducers();
                foreach ( $aProducers as $aProducer ) {
                    print '<option value="' . $aProducer[ 'id' ] . '">' . $aProducer[ 'producer' ] . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="row">
            <label for="model">Заказчик:</label>
            <select id="model" disabled size="16" name="model">
                <option value="0">Выберите из списка</option>
            </select>
        </div>
        <div class="row" id="order_text">
            <label for="order">Обращение, заявка:</label>
            <textarea id="order_text" name="order_text" wrap="soft" rows="10" cols="60"></textarea>
        </div>
        <div class="row" >
            <input type="submit" value="Отправить на сервер" id="button">
        </div>
    </form>
</div>


<!---->
<!---->
<!--require "../../../../config/db.php";-->
<!---->
<!---->
<!--/* Таблица со всеми значениями */-->
<!--/* echo'<table>';-->
<!--foreach ($row as $ar){-->
<!--echo '<tr>';-->
<!--for ($i=0;$i<29;$i++){-->
<!--echo '<td><input size="10" value="'.$ar[$i].'"></td>';}-->
<!--echo '</tr>';}-->
<!--echo'</table>'; */-->
<!---->
<!--/* Форма выбора информации */-->
<!--echo '<form metod="post" action="">';-->
<!--/* Заполнение первого селекта данными о районах и городах */-->
<!--$res2 = $link->query("SELECT * FROM city");-->
<!--$row2 = $res2->fetch_all();-->
<!--echo'<select name="select_city" size="1" style="width:300px">';-->
<!--foreach ($row2 as $ar2){-->
<!--echo '<option>'.$ar2[1].'</option>';}-->
<!--echo'</select>';-->
<!---->
<!--/* Заполнение второго селекта данными о школах выбранного города */-->
<!--$res = $link->query("SELECT * FROM clients");-->
<!--$row = $res->fetch_all();-->
<!--echo'<select name="select_client" size="1" disabled style="width:300px"><option></option></select>';-->
<!---->
<!--//    if (isset($_POST['select_city'])) {-->
<!--////        foreach ($row2 as $ar2){-->
<!--//            echo '<option>'.$_POST['select_city'].'</option>';};-->
<!--////    }-->
<!--//-->
<!--//echo'</select>';-->
<!--    echo '</form>';-->


<?php
echo '</body></html>';
?>
