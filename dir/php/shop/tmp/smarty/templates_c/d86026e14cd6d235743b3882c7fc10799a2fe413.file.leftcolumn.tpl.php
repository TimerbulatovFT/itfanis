<?php /* Smarty version Smarty-3.1.6, created on 2022-05-09 07:02:44
         compiled from "../views/default\leftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2058512944627539049924a4-39765178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd86026e14cd6d235743b3882c7fc10799a2fe413' => 
    array (
      0 => '../views/default\\leftcolumn.tpl',
      1 => 1652072561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2058512944627539049924a4-39765178',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_62753904993d0',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62753904993d0')) {function content_62753904993d0($_smarty_tpl) {?><div id="leftColumn">
    <div id="leftMenu">
        <div class="menuCaption">Меню:</div>
        <<?php ?>?
        echo $rsCategories;
        ?<?php ?>>


    </div>
</div>
<?php }} ?>