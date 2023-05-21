<?php
/* Smarty version 4.3.0, created on 2023-05-21 17:45:01
  from 'E:\XAMPP\htdocs\projekt\app\views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_646a3c7d1ec283_12991657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '838431d8ec3cbc37a9c2ae5304769a348520f139' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\Login.tpl',
      1 => 1684683899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/messages.tpl' => 1,
  ),
),false)) {
function content_646a3c7d1ec283_12991657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_258453158646a3c7d1e2188_47150642', "main");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates\blankMain.tpl");
}
/* {block "main"} */
class Block_258453158646a3c7d1e2188_47150642 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_258453158646a3c7d1e2188_47150642',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class = "d-flex w-100 h-100 p-3 mx-auto flex-column">

        <div class= "text-center mx-auto mt-auto dark ">
          <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'loginValidate'),$_smarty_tpl ) );?>
" method="post" >
            <img class="mb-4" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/yuumbread.svg" alt="" width="156" height="88">
            <h1 class="h3 mb-3 fw-normal">Logowanie</h1>

            <div class="form-floating">
              <input type="login" class="form-control" name='loginInput' maxlength="20" id="loginInput" placeholder="Login">
              <label for="loginInput">Login</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" name='passwordInput' maxlength="45" id="passwordInput" placeholder="Password">
              <label for="passwordInput">Hasło</label>
            </div>

            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Zapamiętaj mnie
              </label>
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
