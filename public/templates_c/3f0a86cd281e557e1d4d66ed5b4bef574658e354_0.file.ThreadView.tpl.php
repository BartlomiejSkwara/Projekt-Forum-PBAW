<?php
/* Smarty version 4.3.0, created on 2023-06-23 21:41:37
  from 'E:\XAMPP\htdocs\projekt\app\views\ThreadView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6495f5718a8f38_67504362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f0a86cd281e557e1d4d66ed5b4bef574658e354' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\ThreadView.tpl',
      1 => 1687549296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/messages.tpl' => 1,
    'file:components/threadMessagesList.tpl' => 1,
    'file:components/messagePostForm.tpl' => 1,
    'file:components/paginationThread.tpl' => 1,
  ),
),false)) {
function content_6495f5718a8f38_67504362 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16430028816495f571896c23_02439946', "main");
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block "main"} */
class Block_16430028816495f571896c23_02439946 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_16430028816495f571896c23_02439946',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:components/messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>










<div class=" w-100 text-center ">
    <h1 class ="mx-auto">
        Przeglądasz właśnie wątek<br>
        <b class="text-primary"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</b>
        <br>
        
            </h1>
 </div>
 
    

    




<div id="contentList" class=" list-group   list-group-flush  border-top border-white mt-2 w-90  mx-auto  pb-0">

<?php $_smarty_tpl->_subTemplateRender("file:components/threadMessagesList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:components/messagePostForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class=" mx-auto">
<?php $_smarty_tpl->_subTemplateRender("file:components/paginationThread.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>


</div>



<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/myJS/customDeleteModal.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/myJS/functions.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "main"} */
}