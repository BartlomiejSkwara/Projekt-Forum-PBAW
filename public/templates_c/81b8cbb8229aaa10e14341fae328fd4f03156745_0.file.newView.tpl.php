<?php
/* Smarty version 4.3.0, created on 2023-05-16 17:00:44
  from 'E:\XAMPP\htdocs\projekt\app\views\newView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64639a9cdafa76_80464431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81b8cbb8229aaa10e14341fae328fd4f03156745' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\newView.tpl',
      1 => 1684249239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64639a9cdafa76_80464431 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title>S.U.S.</title>
    </head>
    <body>
        <h1>When the impostor is</h1>
        <p>SUS</p>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
/home">-home :></a>
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>'home'),$_smarty_tpl ) );?>
/home">-home :></a>
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'home'),$_smarty_tpl ) );?>
/home">-home :></a>

        <?php if (\core\RoleUtils::inRole('admin')) {?>
            <p><?php echo $_smarty_tpl->tpl_vars['pope']->value;?>
</p>
        <?php } else { ?>
            <p>Tylko admin może ujżeć liczbę papaja</p>
        <?php }?>
        
        
        
        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
            <ul>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php }?>
    </body>
</html>

<?php }
}
