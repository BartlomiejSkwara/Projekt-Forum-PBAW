<?php
/* Smarty version 4.3.0, created on 2023-06-22 15:16:01
  from 'E:\XAMPP\htdocs\projekt\app\views\components\paginationThread.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_649449919a2838_65786218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fe63c47ed0597f46801581a2c81d53965e39d3e' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\components\\paginationThread.tpl',
      1 => 1687439757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649449919a2838_65786218 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->_assignInScope('actionURL', "messageList/".((string)$_smarty_tpl->tpl_vars['threadData']->value["idthread"]));
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195317748764944991999831_32108278', "passedParams");
?>

    

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "components/paginationParent.tpl");
}
/* {block "passedParams"} */
class Block_195317748764944991999831_32108278 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'passedParams' => 
  array (
    0 => 'Block_195317748764944991999831_32108278',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "passedParams"} */
}
