<?php
/* Smarty version 4.3.0, created on 2023-05-27 09:26:54
  from 'E:\XAMPP\htdocs\projekt\app\views\templates\blankMain.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6471b0be9dd9f9_60693195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '570915e322ee9bf98a5ef48ca0851a0d8f9bf965' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\templates\\blankMain.tpl',
      1 => 1685172150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6471b0be9dd9f9_60693195 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/bootstrap.min.css">

        <link rel="icon" type="image/x-icon" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/yuumicon.png">

    </head>
    <body>
        
            
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101742856471b0be9d9b70_36781081', 'main');
?>

       
        
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    
 
    </body>
</html>

<?php }
/* {block 'main'} */
class Block_101742856471b0be9d9b70_36781081 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_101742856471b0be9d9b70_36781081',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 pustka :> <?php
}
}
/* {/block 'main'} */
}
