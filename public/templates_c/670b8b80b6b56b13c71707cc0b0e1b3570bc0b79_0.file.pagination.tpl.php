<?php
/* Smarty version 4.3.0, created on 2023-06-21 11:54:38
  from 'E:\XAMPP\htdocs\projekt\app\views\components\pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6492c8de8f14f8_96299413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '670b8b80b6b56b13c71707cc0b0e1b3570bc0b79' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\components\\pagination.tpl',
      1 => 1687341236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6492c8de8f14f8_96299413 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="mx-auto mt-3  align-self-end" aria-label="Page navigation example">
  <ul class="pagination">
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
    
    <li class="page-item"><button class="page-link active" type="submit"><?php echo $_smarty_tpl->tpl_vars['pagData']->value->currentPage;?>
</button></li>
    
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
<?php }
}
