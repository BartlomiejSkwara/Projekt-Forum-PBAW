<?php
/* Smarty version 4.3.0, created on 2023-06-21 13:49:02
  from 'E:\XAMPP\htdocs\projekt\app\views\components\paginationCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6492e3ae4958b9_69562688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0ccfd78235d6bcdb38702f0ccd3da8a69e360ba' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\components\\paginationCategory.tpl',
      1 => 1687348141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6492e3ae4958b9_69562688 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->_assignInScope('actionURL', "categoryFilterThreadList/".((string)$_smarty_tpl->tpl_vars['categoryData']->value["idCategory"]));
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9707875166492e3ae48a1b8_74924317', "passedParams");
?>

    

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "components/paginationParent.tpl");
}
/* {block "passedParams"} */
class Block_9707875166492e3ae48a1b8_74924317 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'passedParams' => 
  array (
    0 => 'Block_9707875166492e3ae48a1b8_74924317',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <input type="hidden" name="sortBy" value="<?php echo $_smarty_tpl->tpl_vars['pagData']->value->filter->column;?>
">
    <input type="hidden" name="sortDirection" value="<?php echo $_smarty_tpl->tpl_vars['pagData']->value->filter->direction;?>
">
    <input type="hidden" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['pagData']->value->filter->filter;?>
">
<?php
}
}
/* {/block "passedParams"} */
}
