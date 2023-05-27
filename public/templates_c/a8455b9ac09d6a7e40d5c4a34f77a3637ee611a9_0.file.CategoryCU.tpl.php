<?php
/* Smarty version 4.3.0, created on 2023-05-27 09:19:23
  from 'E:\XAMPP\htdocs\projekt\app\views\CategoryCU.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6471aefb2ff791_01408716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8455b9ac09d6a7e40d5c4a34f77a3637ee611a9' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\CategoryCU.tpl',
      1 => 1685020738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/messages.tpl' => 1,
  ),
),false)) {
function content_6471aefb2ff791_01408716 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7370300666471aefb2ed387_80307293', "main");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block "main"} */
class Block_7370300666471aefb2ed387_80307293 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_7370300666471aefb2ed387_80307293',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class = "d-flex w-100 h-100 p-3 mx-auto flex-column">

        <div class= "text-center mx-auto mt-auto dark ">
          <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'loginValidate'),$_smarty_tpl ) );?>
" method="post" >
           
            <h1 class="h3 mb-3 fw-normal"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

            <div class="form-floating">
                <textarea type="text" class="form-control" name='nameInput' maxlength="45" id="categoryNameInput" placeholder="Nazwa"></textarea>
                <label for="nameInput">Nazwa</label>
            </div>
            
            <div class="form-floating">
                <textarea type="text" class="form-control" name='descriptionInput' maxlength="90" id="categoryDescriptionInput" placeholder="Nazwa"></textarea>

                <label for="descriptionInput">Opis</label>
            </div>
            

           
            <button class="w-100 btn btn-lg btn-primary" type="submit">Zaloguj</button>
            
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
