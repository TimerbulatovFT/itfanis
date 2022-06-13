<?php
/* Smarty version 4.1.0, created on 2022-05-16 15:24:45
  from 'C:\MAMP\htdocs\itfanis\dir\php\shop\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62826cbd9d9c80_56088615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0fce93955bcf1211026f8d22265c002dde20dc3' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\itfanis\\dir\\php\\shop\\views\\default\\index.tpl',
      1 => 1652714683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62826cbd9d9c80_56088615 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
));
$_smarty_tpl->tpl_vars['item']->iteration = 0;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->iteration++;
$__foreach_item_0_saved = $_smarty_tpl->tpl_vars['item'];
?>
    <div style="float: left; padding: 0 30px 40px 0;">
        <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
            <img src="../www/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100"/>
        </a><br />
        <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
    </div>


    <!--Вывод товаров по три в линию-->

    <?php if ($_smarty_tpl->tpl_vars['item']->iteration % 3 == 0) {?>
        <div style="clear: both;"></div>
    <?php }?>


<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
