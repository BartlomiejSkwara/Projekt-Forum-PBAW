<?php
/* Smarty version 4.3.0, created on 2023-06-23 21:41:23
  from 'E:\XAMPP\htdocs\projekt\app\views\components\threadMessagesList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6495f56393e5b0_02935633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f68df36d6b67d8bcac36b44eb34dcd82ab8834fa' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\components\\threadMessagesList.tpl',
      1 => 1687549281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6495f56393e5b0_02935633 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container mt-4 bg-body-tertiary">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['threadMessages']->value, 'threadMessage');
$_smarty_tpl->tpl_vars['threadMessage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['threadMessage']->value) {
$_smarty_tpl->tpl_vars['threadMessage']->do_else = false;
?>
    <div class="row mb-4">
        <div class="<?php if (\core\SessionUtils::load("username",true) == $_smarty_tpl->tpl_vars['threadMessage']->value["username"]) {?>col-lg-9 col-12 offset-lg-3 <?php } else { ?>col-lg-9 col-12<?php }?>">
            <div class="px-0 py-0 row shadow-lg rounded-end p-3 d-flex text-break border    border-secondary 
                 <?php if (\core\SessionUtils::load("username",true) == $_smarty_tpl->tpl_vars['threadMessage']->value["username"]) {?>border-end-0<?php } else { ?>border-start-0<?php }?>">
                <div id="top" class="bg-light-subtle col-12 col-lg-2 text-center d-lg-block d-flex align-items-center">
                    <img class="d-lg-block d-none mx-auto img-thumbnail" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/icons/person-fill.svg" alt="" width="64" height="64"></img>
                    <img class="d-lg-none  d-inline" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/icons/person-fill.svg" alt="" width="32" height="32"></img>

                    <p class=" mb-0 text-center"><?php echo $_smarty_tpl->tpl_vars['threadMessage']->value["username"];?>
</p>
                    
                    <span class="d-lg-none">:</span>
                    
                    
                        <div class="flex-grow-1 text-end text-secondary d-lg-none d-block align-self-baseline">
                            <div class = "d-sm-block d-none">
                            <?php echo $_smarty_tpl->tpl_vars['threadMessage']->value["creation_date"];?>
                    
                            </div>
                        </div>
                    
                    
                </div>
                <div class="col-12 bg-dark-subtle col-lg-10 border-start-0 border-secondary position-relative">
                  <?php echo $_smarty_tpl->tpl_vars['threadMessage']->value["content"];?>

                  <div class="position-absolute bottom-0 end-0 p-2 text-end text-secondary d-none d-lg-block">
                    <?php echo $_smarty_tpl->tpl_vars['threadMessage']->value["creation_date"];?>

                  </div>
                </div>
            </div>
        </div>
    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>


   
            
<?php }
}
