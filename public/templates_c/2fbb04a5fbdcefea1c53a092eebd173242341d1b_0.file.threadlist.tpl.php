<?php
/* Smarty version 4.3.0, created on 2023-06-21 16:49:31
  from 'E:\XAMPP\htdocs\projekt\app\views\components\threadlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64930dfb400491_59216479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fbb04a5fbdcefea1c53a092eebd173242341d1b' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\components\\threadlist.tpl',
      1 => 1687358970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64930dfb400491_59216479 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['threads']->value, 'thread');
$_smarty_tpl->tpl_vars['thread']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thread']->value) {
$_smarty_tpl->tpl_vars['thread']->do_else = false;
?>
    <div  class="py-3 row border-bottom ">           
        <div class="col-lg-6 row">
            <strong class="mb-1"><?php echo $_smarty_tpl->tpl_vars['thread']->value["topic"];?>
</strong>
            <div class="col-8 mb-1 small "><?php echo $_smarty_tpl->tpl_vars['thread']->value["username"];?>
 rozpoczął: <?php echo $_smarty_tpl->tpl_vars['thread']->value["creation_date"];?>
</div>
        </div>
        <div class="col-lg-6 row">

            <div class="col-6 mb-1 small ">Aktywność: <?php echo $_smarty_tpl->tpl_vars['thread']->value["update_date"];?>
 </div>
            <div class="col-4 mb-l small">Wiadomości: <?php echo $_smarty_tpl->tpl_vars['thread']->value["message_count"];?>
</div>
        </div>

    </div>   
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
