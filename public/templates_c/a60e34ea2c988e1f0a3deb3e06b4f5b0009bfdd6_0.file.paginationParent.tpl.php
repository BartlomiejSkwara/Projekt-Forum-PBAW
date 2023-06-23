<?php
/* Smarty version 4.3.0, created on 2023-06-23 21:28:19
  from 'E:\XAMPP\htdocs\projekt\app\views\components\paginationParent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6495f253cfe617_12421003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a60e34ea2c988e1f0a3deb3e06b4f5b0009bfdd6' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\components\\paginationParent.tpl',
      1 => 1687548498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6495f253cfe617_12421003 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<form id="pagination-form" class = "mx-auto mb-0 bg-dark " onsubmit="ajaxPostFormPagination('pagination-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;
echo $_smarty_tpl->tpl_vars['actionURL']->value;?>
','contentList'); return false;">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11396649406495f253ccac25_67267607', 'passedParams');
?>

    <nav class="mx-auto mt-3 mb-0   align-self-end  " aria-label="Page navigation example">
    <ul class="pagination mb-0">
      <?php if ($_smarty_tpl->tpl_vars['pagData']->value->currentPage != 0) {?>
      <li class="page-item">

        <button type="submit" class="page-link"  name="page" value="0" aria-label="Pierwsza strona">
          <span aria-hidden="true">&laquo;</span>
        </button>

      </li>
      <li class="page-item">
          <button class="page-link" type="submit" name="page" value="<?php echo $_smarty_tpl->tpl_vars['pagData']->value->currentPage-1;?>
" aria-label="Poprzednia strona">
              <?php echo $_smarty_tpl->tpl_vars['pagData']->value->currentPage-1;?>

          </button>
      </li>
      <?php }?>

      <li class="page-item">
          <button class="page-link active" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['pagData']->value->currentPage;?>
">
              <?php echo $_smarty_tpl->tpl_vars['pagData']->value->currentPage;?>

          </button>      
      </li>

      <?php if ($_smarty_tpl->tpl_vars['pagData']->value->lastPage > $_smarty_tpl->tpl_vars['pagData']->value->currentPage) {?>
          <li class="page-item">
              <button class="page-link" type="submit" name="page" value="<?php echo $_smarty_tpl->tpl_vars['pagData']->value->currentPage+1;?>
" aria-label="Kolejna strona" >
                  <?php echo $_smarty_tpl->tpl_vars['pagData']->value->currentPage+1;?>

              </button>
          </li>

      <li class="page-item">
        <button class="page-link" type="submit"  name="page" value="<?php echo $_smarty_tpl->tpl_vars['pagData']->value->lastPage;?>
" aria-label="Ostatatnia strona">
          <span aria-hidden="true">&raquo;</span>
        </button>
      </li>
      <?php }?>
    </ul>
  </nav>
</form>

<?php }
/* {block 'passedParams'} */
class Block_11396649406495f253ccac25_67267607 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'passedParams' => 
  array (
    0 => 'Block_11396649406495f253ccac25_67267607',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'passedParams'} */
}
