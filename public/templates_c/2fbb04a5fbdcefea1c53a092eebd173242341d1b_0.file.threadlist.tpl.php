<?php
/* Smarty version 4.3.0, created on 2023-06-23 20:30:54
  from 'E:\XAMPP\htdocs\projekt\app\views\components\threadlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6495e4dec50df6_22021495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fbb04a5fbdcefea1c53a092eebd173242341d1b' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\components\\threadlist.tpl',
      1 => 1687545053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6495e4dec50df6_22021495 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['threads']->value, 'thread');
$_smarty_tpl->tpl_vars['thread']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thread']->value) {
$_smarty_tpl->tpl_vars['thread']->do_else = false;
?>
    <div  class="py-3 row border-bottom ">           
        <div class="col-12 col-lg-6">
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'thread'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['thread']->value["idthread"];?>
" class="link-success mb-1  link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><strong><?php echo $_smarty_tpl->tpl_vars['thread']->value["topic"];?>
</strong></a>
            <p class="">
                <b>Stworzył:</b> <span class="text-info"><?php echo $_smarty_tpl->tpl_vars['thread']->value["username"];?>
</span>
                dnia:<?php echo $_smarty_tpl->tpl_vars['thread']->value["creation_date"];?>
</p>
        </div>
        
        <div class="me-1 small col">Aktywność: <?php echo $_smarty_tpl->tpl_vars['thread']->value["update_date"];?>
 </div>
            <div class="me-l small col" >Wiadomości: <?php echo $_smarty_tpl->tpl_vars['thread']->value["message_count"];?>
</div>
       

            
            <?php if (\core\SessionUtils::load("username",true) == $_smarty_tpl->tpl_vars['thread']->value["username"] || \core\RoleUtils::inRole("admin")) {?>
             
                
            <div class = "col">
                <button class="  btn btn-toolbar ms-lg-auto mx-auto btn-danger border-danger-subtle  rounded-pill button-small " type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" aria-expanded="false" aria-controls="collapseFilter" data-bs-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'deleteThread'),$_smarty_tpl ) );?>
" data-bs-id="<?php echo $_smarty_tpl->tpl_vars['categoryData']->value["idCategory"];?>
/<?php echo $_smarty_tpl->tpl_vars['thread']->value["idthread"];?>
">
                    <img class=" mx-auto " src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/icons/trash.svg" alt="" width="16" height="16"> 
                    <span class="visually-hidden">Filtrowanie</span>
                </button>
            </div>
           
            <?php }?>
                
       

    </div>  
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>











<?php }
}
