<?php
/**
 *
 * Файл основных функций
 *
 */

/**
 * Формирование запрашиваемой страницы
 *
 * @param string $controllerName название контроллера
 * @param string $actionName название функции обработки страницы
 */
function loadPage($db,$smarty, $controllerName, $actionName = 'index'){
    include_once PathPrefix . $controllerName . PathPostfix;
    $function = $actionName . 'Action';
    $function($smarty, $db);
}
/**
 * Загрузка шаблона
 *
 * @param object $smarty объект шаблонизатора
 * @param string $templateName название файла шаблона
 */
function loadTemplate($db,$smarty,$templateName){
$smarty->display($templateName . TemplatePostfix);
}
/**
 * Функция отладки. Останавливает работу програамы выводя значение переменной
 * $value
 *
 * @param variant $value переменная для вывода ее на страницу
 */
function d($value = null, $die = 1){
    echo 'Debug: <br /><pre>';
    print_r($value);
    echo '<pre>';
    if ($die) die;
}
/**
 * Преобразорвание результата работы функции выборки в ассоциативный массив
 *
 * @param recordset $rs набор строк - результат работы SELECT
 * @return array
 */
function createSmartyRsArray($db,$rs){
    if (! $rs) return false;
    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($rs)){
        $smartyRs[]=$row;
    }
    return $smartyRs;
}
/**
 * Редирект
 *
 * @param string $url адрес для перенаправления
 */
function redirect($url)
{
    if(! $url) $url = '/';
    header("Location: {$url}");
    exit;
}