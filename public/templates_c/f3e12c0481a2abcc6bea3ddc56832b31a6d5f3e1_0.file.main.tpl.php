<?php
/* Smarty version 4.3.0, created on 2023-06-03 15:43:50
  from 'E:\XAMPP\htdocs\projekt\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647b4396872541_44602981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3e12c0481a2abcc6bea3ddc56832b31a6d5f3e1' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\templates\\main.tpl',
      1 => 1685799829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647b4396872541_44602981 (Smarty_Internal_Template $_smarty_tpl) {
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
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/extended-bootstrap.css">
       
        <link rel="icon" type="image/x-icon" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/yuumicon.png">

    </head>
    <body>
        
        
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['onlyBody']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp) == true) {?>
            <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class = "d-flex pt-5 mt-5 mx-auto   w-75 flex-column main-content">
        <?php }?>
            
        
        
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1007073268647b43968696e3_64103712', 'main');
?>

            
        
        
        
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['onlyBody']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp) == true) {?>
            </div>
            <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
        
        
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    
     
    </body>
</html>

<?php }
/* {block 'main'} */
class Block_1007073268647b43968696e3_64103712 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1007073268647b43968696e3_64103712',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 pustka :> <?php
}
}
/* {/block 'main'} */
}
