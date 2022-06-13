<?php
/* Smarty version 4.1.0, created on 2022-05-16 15:37:46
  from 'C:\MAMP\htdocs\itfanis\dir\php\shop\views\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62826fcae687b2_52291889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64684d06d3e8aa67921fda2a15acbd7d1396424d' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\itfanis\\dir\\php\\shop\\views\\default\\header.tpl',
      1 => 1652715460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_62826fcae687b2_52291889 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="../www/templates/<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="../www/js/jquery-1.7.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../www/js/main.js"><?php echo '</script'; ?>
>
</head>
<body>
<div id="header">
    <h1>MY SHOP - Интернет магазин электроники</h1>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="centerColumn"><?php }
}
