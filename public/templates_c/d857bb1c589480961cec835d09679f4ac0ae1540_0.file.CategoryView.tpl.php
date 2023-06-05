<?php
/* Smarty version 4.3.0, created on 2023-06-05 12:34:58
  from 'E:\XAMPP\htdocs\projekt\app\views\CategoryView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647dba52a39d69_83532421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd857bb1c589480961cec835d09679f4ac0ae1540' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\CategoryView.tpl',
      1 => 1685960271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/messages.tpl' => 1,
  ),
),false)) {
function content_647dba52a39d69_83532421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1246040819647dba52a2dd13_61031991', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block "main"} */
class Block_1246040819647dba52a2dd13_61031991 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1246040819647dba52a2dd13_61031991',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:components/messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="d-flex hori"> 
    <ul class="list-group list-group-horizontal flex-fill ">
      <li class="list-group-item">An itemdssdaaa</li>
      <li class="list-group-item">A second item</li>
      <li class="list-group-item">A third item</li>
    </ul>
    <br>
    <ul class="list-group list-group-horizontal-sm flex-fill ">
      <li class="list-group-item">An item</li>
      <li class="list-group-item">A second item</li>
      <li class="list-group-item">A third item</li>
    </ul>
    <br>
    <ul class="list-group list-group-horizontal-md flex-fill ">
      <li class="list-group-item">An item</li>
      <li class="list-group-item">A second item</li>
      <li class="list-group-item">A third item</li>
    </ul>
    <br>
    <ul class="list-group list-group-horizontal-lg flex-fill ">
      <li class="list-group-item">An item</li>
      <li class="list-group-item">A second item</li>
      <li class="list-group-item">A third item</li>
    </ul>
    <ul class="list-group list-group-horizontal-xl flex-fill ">
      <li class="list-group-item">An item</li>
      <li class="list-group-item">A second item</li>
      <li class="list-group-item">A third item</li>
    </ul>
    <ul class="list-group list-group-horizontal-xxl flex-fill ">
      <li class="list-group-item">An item</li>
      <li class="list-group-item">A second item</li>
      <li class="list-group-item">A third item</li>
    </ul>
</div>
<?php
}
}
/* {/block "main"} */
}
