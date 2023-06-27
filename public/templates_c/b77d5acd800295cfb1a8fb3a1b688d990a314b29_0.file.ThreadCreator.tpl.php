<?php
/* Smarty version 4.3.0, created on 2023-06-27 09:18:23
  from 'E:\XAMPP\htdocs\projekt\app\views\ThreadCreator.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_649a8d3f336762_58749191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b77d5acd800295cfb1a8fb3a1b688d990a314b29' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\ThreadCreator.tpl',
      1 => 1687850300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/messages.tpl' => 1,
  ),
),false)) {
function content_649a8d3f336762_58749191 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_864718402649a8d3f31fb43_81324920', "main");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates\main.tpl");
}
/* {block "main"} */
class Block_864718402649a8d3f31fb43_81324920 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_864718402649a8d3f31fb43_81324920',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class = "d-flex w-100 h-100 p-3 flex-column ">

    <div class= "text-center  mt-auto dark ">
        
        <h1 class="h3 mb-5 fw-normal display-5"><b><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</b></h1>

        <form id = "threadCreateForm" class = "mx-auto text-center  w-100 p-2 mt-2 mb-0" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'addThread'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['categoryID']->value;?>
" method="post">
            <div class="mb-3 mx-auto  col-lg-7 col-12">
                    <label for="threadName" class="form-label">Nazwa wątku</label>
                    <input type="text" class="form-control" name="threadName" id="threadName" maxlength="45">
                    <div id="threadNameHelp" class="form-text">Maksymalnie 45 znaków</div>
            </div>
            <div class="mb-3 mx-auto col-lg-7 col-12">
                    <label for="message" class="form-label">Pierwsza wiadomość</label>
                    <textarea class="form-control no-scroll " name="message" id="message" rows="4" maxlength="180"></textarea>
                    <div id="messageHelp" class="form-text">Maksymalnie 180 znaków</div>
            </div>
            <button type="submit" class="btn btn-primary">Stwórz</button>
        </form>

    </div>
    <div id="errorMessagess" class= "text-center mb-auto  mx-auto dark ">
        <?php $_smarty_tpl->_subTemplateRender("file:components/messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
    </div>    


</div>

<?php
}
}
/* {/block "main"} */
}
