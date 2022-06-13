<?php
/* Smarty version 4.1.0, created on 2022-05-16 08:32:45
  from 'C:\MAMP\htdocs\itfanis\dir\php\shop\views\default\leftcolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62820c2db345d2_95741056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66ab8b2b93d1ebae55f8199ed624a1a8bb17094a' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\itfanis\\dir\\php\\shop\\views\\default\\leftcolumn.tpl',
      1 => 1652093874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62820c2db345d2_95741056 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="leftColumn">
    <div id="leftMenu">
        <div class="menuCaption">Меню:</div>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />

            <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['children']))) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
$_smarty_tpl->tpl_vars['itemChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->do_else = false;
?>
            --<a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
<a><br />
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


    </div>
    <?php if ((isset($_smarty_tpl->tpl_vars['arUser']->value))) {?>
        <div id="userBox">
            <a href="/user/" id="userLink"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>
</a><br />
            <a href="/user/logout/" onclick="logout();">Выход</a>
        </div>

    <?php } else { ?>

        <div id="userBox" class="hideme">
            <a href="#" id="userLink"></a><br />
            <a href="/user/logout/" onclick="logout();">Выход</a>
        </div>

        <?php if (!(isset($_smarty_tpl->tpl_vars['hideLoginBox']->value))) {?>
            <div id="loginBox">
                <div class="menuCaption">Авторизация</div>
                <input type="text" id="loginEmail" name="loginEmail" value=""/><br />
                <input type="password" id="loginPwd" name="loginPwd" value=""/><br />
                <input type="button" onclick="login();" value="Войти"/>
            </div>

            <div id="registerBox">
                <div class="menuCaption showHidden" onclick="showRegisterBox();">Регистрация</div>
                <div id="registerBoxHidden">
                    email:<br />
                    <input type="text" id="email" name="email" value=""/><br />
                    пароль: <br />
                    <input type="password" id="pwd1" name="pwd1" value=""/><br />
                    повторить пароль:<br />
                    <input type="password" id="pwd2" name="pwd2" value=""/><br />
                    <input type="button" onclick="registerNewUser();" value="Зарегистрироваться"/>
                </div>
            </div>
        <?php }?>
    <?php }?>




    <div class="menuCaption">Корзина</div>
    <a href="/cart/" title="Перейти в корзину">В корзине</a>
    <span id="cartCntItems">
        <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {
echo $_smarty_tpl->tpl_vars['cartCntItems']->value;
} else { ?>пусто<?php }?>
    </span>
</div>
<?php }
}
