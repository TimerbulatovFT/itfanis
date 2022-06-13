<?php
require_once( 'functions.php' );
?>
<!DOCTYPE html>
<html>
<head>
	<title>Контакты и реквизиты</title>
	<script src="//libs.raltek.ru/libs/jquery/1.8.3/js/jquery-1.8.3.js"></script>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script src="scripts.js"></script>
</head>
<body>
	<div id="city_wrapper">
		<form name="form_city" id="form_city" method="post">
			<div class="row">
                <label for="city">Выберите город или район:</label>
				<select id="city" size="16" name="city">
					<option value="0">Выберите из списка</option>
					<?php
					$aCitys = getCitys();
					foreach ( $aCitys as $aCity ) {
						print '<option value="' . $aCity[ 'city_id' ] . '">' . $aCity[ 'city' ] . '</option>';
					}
					?>
				</select>
			</div>
            <div class="row">
                <label for="school">Заказчик:</label>
				<select id="school" disabled size="16" name="school">
					<option value="0">Выберите из списка</option>
				</select>
			</div>
            <div class="row" >
                <input type="submit" value="Показать контакты" id="button"><br>
            </div>
		</form>

            <?
            /* Заполнение данными о школе */
            if (isset($_POST['city']) & isset($_POST['school'])){
            $city777=$_POST['city'];
            $school777=$_POST['school'];
//            $dbh = DB::instance();
//            $sql = "SELECT * FROM clients WHERE city_code=$city777 AND customer_code=$school777";
//            $i = 0;
//            echo'<div class="row" id="contacts">
//            <br><label for="contacts">Реквизиты</label><table><tr>';
//                foreach( $dbh->query( $sql ) as $row ) {
//                    echo '<td>'.$row[$i].'</td>';
//                    $i++;
//                }
//            echo '</tr></table></div>';
//            }
            print_r($city_id);
            print_r($customer_code);}
            ?>
	</div>
</body>
</html>