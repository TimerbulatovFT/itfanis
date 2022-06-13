<?php

/**
 * Модель для таблицы продукции (products)
 * 
 */

/**
 * Получаем последние добавленные товары
 * 
 * @param integer|null $limit Лимит товаров
 * @return array Массив товаров 
 */
function getLastProducts($db, int $limit = null)
{
    $sql = "SELECT *
            FROM products 
            ORDER BY id DESC";
    if($limit){
        $sql .= " LIMIT {$limit}";
    }
    $rs = mysqli_query($db,$sql);
   return createSmartyRsArray($db,$rs);
}

/**
 * Получить продукты для категории $itemId
 * 
 * @param integer $itemId ID категории
 * @return array массив продуктов 
 */
function getProductsByCat($db,$itemId)
{
   $itemId = intval($itemId);
   $sql = "SELECT * 
            FROM products
            WHERE category_id = '{$itemId}'";
   
   $rs = mysqli_query($db,$sql);
   
   return createSmartyRsArray($db,$rs);
}


/**
 * Получить данные продукта по ID 
 * 
 * @param integer $itemId ID продукта
 * @return array массив данных продукта 
 */
function getProductById($db, int $itemId)
{
   $itemId = intval($itemId);
   $sql = "SELECT * 
            FROM products
            WHERE id = '{$itemId}'";
   
   $rs = mysqli_query($db,$sql);
   return mysqli_fetch_assoc($rs);
}

/**
 * Получить список продуктов из массива идентификаторов (ID`s)
 * 
 * @param array $itemsIds массив идентификаторов продуктов
 * @return array массив данных продуктов 
 */
function getProductsFromArray($db, array $itemsIds)
{
    $strIds = implode($itemsIds, ', ');
    $sql = "SELECT * 
            FROM products
            WHERE id in ({$strIds})";		
    $rs = mysqli_query($db,$sql);
   
   return createSmartyRsArray($db,$rs);
}