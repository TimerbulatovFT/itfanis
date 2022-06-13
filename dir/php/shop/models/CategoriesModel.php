<?php
/**
 * Модель для таблицы категорий
 */

/**
 * Получить дочерние категории для категории $catId
 *
 */

function getChildrenForCat($db,$catId){

    $sql = "SELECT *
             FROM categories
             WHERE parent_id = '{$catId}'";

    $rs = mysqli_query($db,$sql);
    return createSmartyRsArray($db,$rs);

}

/**
 * Получить главные категории с привязками дочерних
 * @param $db
 * @return array массив категорий
 */

function getAllMainCatsWithChildren($db)
{
    $sql = 'SELECT *
             FROM categories
             WHERE parent_id = 0';
    $rs = mysqli_query($db,$sql);
    $smartyRs = array();
    while($row = mysqli_fetch_assoc($rs)){
        $rsChildren = getChildrenForCat($db,$row['id']);
        if($rsChildren){
            $row['children'] = $rsChildren;
        }
        $smartyRs[] = $row;
    }

    return $smartyRs;
}