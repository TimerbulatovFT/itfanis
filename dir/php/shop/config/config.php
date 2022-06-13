<?php
/*
 *
 * Файл настроек
 *
 */
global $sql, $db, $rs;
// Констатнты для обращения к контроллерам
const PathPrefix = '../controllers/';
const PathPostfix = 'Controller.php';

//  Используемый шаблон
$template = 'default';

// пути к файлам шаблонов (*.tpl)
define ('TemplatePrefix', "../views/{$template}/");
const TemplatePostfix = '.tpl';
// пути к файлам шаблонов в вебпространстве
define ('TemplateWebPath', "../templates/{$template}/");
// Инициализация шаблонизатора Smarty
// put full path to Smarty.class.php
require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../tmp/smarty/configs');
$smarty->assign('templateWebPath', TemplateWebPath);