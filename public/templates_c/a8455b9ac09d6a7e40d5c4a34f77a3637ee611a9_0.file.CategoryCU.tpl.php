<?php
/* Smarty version 4.3.0, created on 2023-05-30 19:12:45
  from 'E:\XAMPP\htdocs\projekt\app\views\CategoryCU.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64762e8d9b7ea5_02025211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8455b9ac09d6a7e40d5c4a34f77a3637ee611a9' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\CategoryCU.tpl',
      1 => 1685466764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/messages.tpl' => 1,
  ),
),false)) {
function content_64762e8d9b7ea5_02025211 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185669773964762e8d99d921_91956883', "main");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block "main"} */
class Block_185669773964762e8d99d921_91956883 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_185669773964762e8d99d921_91956883',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class = "d-flex w-100 h-100 p-3 mx-auto flex-column">

        <div class= "text-center mx-auto mt-auto dark ">
          <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'addCategory'),$_smarty_tpl ) );?>
" method="post" >
           
            <h1 class="h3 mb-5 fw-normal display-5"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

            <div class="mb-3 ">
              <label for="categoryName" class="form-label">Nazwa Kategorii</label>
              <input type="text" class="form-control" name="categoryName" id="categoryName"  maxlength="45" aria-describedby="categoryNameHelp" <?php if ((isset($_smarty_tpl->tpl_vars['lastValues']->value->name))) {?>value="<?php echo $_smarty_tpl->tpl_vars['lastValues']->value->name;?>
"<?php }?> >
              <div id="categoryNameHelp" class="form-text">Tak będzie nazywała się kategoria.</div>
            </div>
            
                       
            <div class="mb-3">
                <label for="categoryDescription" class="form-label">Opis Kategorii</label>
                <textarea class="form-control" name="categoryDescription" id="categoryDescription" maxlength="90" aria-describedby="categoryDescriptionHelp" rows="3"><?php if ((isset($_smarty_tpl->tpl_vars['lastValues']->value->description))) {
echo $_smarty_tpl->tpl_vars['lastValues']->value->description;
}?></textarea>
                <div id="categoryDescriptionHelp" class="form-text">Taki opis będzie widniał pod nazwą kategorii.</div>
            </div>
           
            <button class="w-50 btn btn-lg btn-primary mt-5" type="submit">Zapisz</button>
            
          </form>
           
        </div>
        <div class= "text-center mb-auto  mx-auto dark ">
            <?php $_smarty_tpl->_subTemplateRender("file:components/messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
        </div>    
        
        
    </div>
<?php
}
}
/* {/block "main"} */
}
