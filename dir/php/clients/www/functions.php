<?php
/**
 *  файл functions.php
 *  Здесь размещены функции, получающие данные из MySQL для полей формы
 */

/**
 *  Подключаем файл с нашими объявлениями классов DB и MyPDOException
 */
require_once( 'db.php' );
require_once( 'mypdoexception.php' );
/**
 *  Функция для получения перечня производителей автомобилей
 */
function getCitys() {
	$dbh = DB::instance();
	// Выбираем всех производителей из таблицы
	$sql = "SELECT * FROM `city` ORDER BY `city`";
	// Поместим данные, которые будет возвращать функция, в массив
	// Пока что он будет пустым
	$array = array();
	// Инициализируем счетчик
	$i = 0;
	try {
		foreach( $dbh->query( $sql ) as $row ) {
			$array[ $i ][ 'city_id' ] = $row[ 'city_id' ];				// Идентификатор производителя
			$array[ $i ][ 'city' ] = $row[ 'city' ];	// Имя производителя
			// После каждой итерации цикла увеличиваем счетчик
			$i++;
		}
	}
	catch ( PDOException $e ) {
		MyPDOException::instance( $e );
	}
	// Возвращаем вызову функции массив с данными
	return $array;
}

// Функция, которая выбирает модели автомобилей по переданному
// ей идентификатору производителя
function getSchools( array $array ) {
	// Сохраняем идентификатор производителя из переданного массива
	$sCityId = htmlspecialchars( trim ( $array[ 'city_id' ] ) );
	$dbh = DB::instance();
	// Строка запроса из базы данных
	$sql = "SELECT `customer_code`, `school` FROM `clients` WHERE `city_code` = '" . $sCityId . "' ORDER BY `school`";
	// Поместим данные, которые будет возвращать функция, в массив
	// Пока что он будет пустым
	$array = array();
	// Инициализируем счетчик
	$i = 0;
	foreach( $dbh->query( $sql ) as $row ) {
		$array[ $i ][ 'customer_code' ] = $row[ 'customer_code' ];		// Идентификатор модели
		$array[ $i ][ 'school' ] = $row[ 'school' ];	// Наименование модели
		// После каждой итерации цикла увеличиваем счетчик
		$i++;
	}
	// Возвращаем вызову функции массив с данными
	return $array;
}
?>