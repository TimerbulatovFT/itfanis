<?php
/*
 *
 * Контроллер главной страницы
 *
 */
include_once '../models/CategoriesModel.php'; // Подключаем модели
include_once '../models/ProductsModel.php'; // Подключаем модели

function indexAction($db,$smarty){

    $rsCategories = getAllMainCatsWithChildren($db);
    $rsProducts = getLastProducts($db,16);

    $smarty->assign('pageTitle','Главная страница');
    $smarty->assign('rsCategories',$rsCategories);
    $smarty->assign('rsProducts',   $rsProducts);

    loadTemplate($db,$smarty, 'header');
    loadTemplate($db,$smarty, 'index');
    loadTemplate($db,$smarty, 'footer');
}