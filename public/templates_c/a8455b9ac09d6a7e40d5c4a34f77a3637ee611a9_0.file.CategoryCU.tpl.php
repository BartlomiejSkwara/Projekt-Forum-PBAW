<?php
/* Smarty version 4.3.0, created on 2023-05-31 21:34:32
  from 'E:\XAMPP\htdocs\projekt\app\views\CategoryCU.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6477a148ac3cf4_99701249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8455b9ac09d6a7e40d5c4a34f77a3637ee611a9' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\CategoryCU.tpl',
      1 => 1685561668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/messages.tpl' => 1,
  ),
),false)) {
function content_6477a148ac3cf4_99701249 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20500776926477a148a89d29_59315665', "main");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block "main"} */
class Block_20500776926477a148a89d29_59315665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_20500776926477a148a89d29_59315665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class = "d-flex w-100 h-100 p-3 mx-auto flex-column">

        <div class= "text-center mx-auto mt-auto dark">
          <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>$_smarty_tpl->tpl_vars['selectedAction']->value),$_smarty_tpl ) );
$_prefixVariable1 = "editCategory";
$_smarty_tpl->_assignInScope('selectedAction', $_prefixVariable1);
if ($_prefixVariable1) {?>/<?php echo $_smarty_tpl->tpl_vars['editedID']->value;
}?>" method="post" >
           
              <h1 class="h3 mb-5 fw-normal display-5"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<b class="text-primary"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value["name"]))) {
echo $_smarty_tpl->tpl_vars['category']->value["name"];
}?></b></h1>

            <div class="mx-auto mb-3 " style="width: 21rem;">
              <label for="categoryName" class="form-label">Nazwa Kategorii</label>
              <input type="text" class="form-control" name="categoryName" id="categoryName"  maxlength="45" aria-describedby="categoryNameHelp" value="<?php if ((isset($_smarty_tpl->tpl_vars['lastValues']->value->name))) {
echo $_smarty_tpl->tpl_vars['lastValues']->value->name;
} elseif ((isset($_smarty_tpl->tpl_vars['category']->value["name"]))) {
echo $_smarty_tpl->tpl_vars['category']->value["name"];
}?>">
              <div id="categoryNameHelp" class="form-text">Tak będzie nazywała się kategoria.</div>
            </div>
            
            
            <div class="mx-auto mb-3 " style="width: 21rem;">
                <label for="categoryDescription" class="form-label">Opis Kategorii</label>
                <textarea class="form-control" name="categoryDescription" id="categoryDescription" maxlength="90" aria-describedby="categoryDescriptionHelp" rows="3"><?php if ((isset($_smarty_tpl->tpl_vars['lastValues']->value->description))) {
echo $_smarty_tpl->tpl_vars['lastValues']->value->description;
} elseif ((isset($_smarty_tpl->tpl_vars['category']->value["description"]))) {
echo $_smarty_tpl->tpl_vars['category']->value["description"];
}?></textarea>
                <div id="categoryDescriptionHelp" class="form-text">Taki opis będzie widniał pod nazwą kategorii.</div>
            </div>
           
            <button class="btn btn-lg btn-primary mt-5" type="submit" style="width: 13rem;" >Zapisz</button>
            
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
