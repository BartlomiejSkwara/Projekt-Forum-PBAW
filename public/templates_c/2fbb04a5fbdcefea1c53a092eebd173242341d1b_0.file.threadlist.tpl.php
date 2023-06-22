<?php
/* Smarty version 4.3.0, created on 2023-06-22 11:51:50
  from 'E:\XAMPP\htdocs\projekt\app\views\components\threadlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_649419b61a9d43_17540590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fbb04a5fbdcefea1c53a092eebd173242341d1b' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\components\\threadlist.tpl',
      1 => 1687427454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649419b61a9d43_17540590 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['threads']->value, 'thread');
$_smarty_tpl->tpl_vars['thread']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thread']->value) {
$_smarty_tpl->tpl_vars['thread']->do_else = false;
?>
    <div  class="py-3 row row-cols-2 border-bottom ">           
        <div class="col-lg-6 row row-cols-2">
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'thread'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['thread']->value["idthread"];?>
" class="link-success mb-1  link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><strong><?php echo $_smarty_tpl->tpl_vars['thread']->value["topic"];?>
</strong></a>
            <div class="col-8 mb-1 small "><?php echo $_smarty_tpl->tpl_vars['thread']->value["username"];?>
 rozpoczął: <?php echo $_smarty_tpl->tpl_vars['thread']->value["creation_date"];?>
</div>
        </div>
        <div class="col-lg-6 row row-cols-3">

            <div class="col-6 mb-1 small ">Aktywność: <?php echo $_smarty_tpl->tpl_vars['thread']->value["update_date"];?>
 </div>
            <div class="col-4 mb-l small">Wiadomości: <?php echo $_smarty_tpl->tpl_vars['thread']->value["message_count"];?>
</div>
            <?php if (\core\SessionUtils::load("username",true) == $_smarty_tpl->tpl_vars['thread']->value["username"] || \core\RoleUtils::inRole("admin")) {?>
             
                

            <button class="col btn btn-danger border-danger-subtle  rounded-pill button-small ms-2" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" aria-expanded="false" aria-controls="collapseFilter" data-bs-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'deleteThread'),$_smarty_tpl ) );?>
" data-bs-id="<?php echo $_smarty_tpl->tpl_vars['categoryData']->value["idCategory"];?>
/<?php echo $_smarty_tpl->tpl_vars['thread']->value["idthread"];?>
">
                <img class=" mx-auto " " src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/icons/trash.svg" alt="" width="16" height="16"> 
                <span class="visually-hidden">Filtrowanie</span>
            </button>
            <?php }?>
                
        </div>

    </div>  
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>


<?php }
}
