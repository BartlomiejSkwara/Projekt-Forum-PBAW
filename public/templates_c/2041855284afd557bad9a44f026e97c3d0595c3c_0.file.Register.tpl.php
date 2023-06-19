<?php
/* Smarty version 4.3.0, created on 2023-06-19 14:38:21
  from 'E:\XAMPP\htdocs\projekt\app\views\Register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64904c3dd220d1_60338712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2041855284afd557bad9a44f026e97c3d0595c3c' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\Register.tpl',
      1 => 1687178295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/messages.tpl' => 1,
  ),
),false)) {
function content_64904c3dd220d1_60338712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213358489464904c3dcfe0b9_47088719', "main");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates\main.tpl");
}
/* {block "main"} */
class Block_213358489464904c3dcfe0b9_47088719 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_213358489464904c3dcfe0b9_47088719',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('title', "Register");?>

    <div class = "d-flex w-100 h-100 p-3 mx-auto flex-column">

        <div class= "text-center mx-auto mt-auto dark ">
          <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'registerValidate'),$_smarty_tpl ) );?>
" method="post" >
            <img class="mb-4 img-fluid" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/yuumbread.svg" alt="" width="156" height="88">
            <h1 class="h3 mb-4 fw-normal display-5">Rejestracja</h1>

            <div class="form-floating mb-3">
              <input type="login" class="form-control" name='loginInput' maxlength="20" id="loginInput" placeholder="Login"
                     value="<?php if ((isset($_smarty_tpl->tpl_vars['previousForm']->value->login))) {
echo $_smarty_tpl->tpl_vars['previousForm']->value->login;
}?>">
              <label for="loginInput">Login</label>
            </div>
            
            
            
            <div class="form-floating mb-3">
                <input type="email" class="form-control" name='emailInput' maxlength="45" id="passwordInput" placeholder="Email"
                       value="<?php if ((isset($_smarty_tpl->tpl_vars['previousForm']->value->email))) {
echo $_smarty_tpl->tpl_vars['previousForm']->value->email;
}?>">
              <label for="emailInput">Email</label>
            </div>
            
            <div class="form-floating mb-5 is-invalid">
              <input type="password" class="form-control" name='passwordInput' maxlength="45" id="passwordInput" placeholder="Password"
                     value="<?php if ((isset($_smarty_tpl->tpl_vars['previousForm']->value->password))) {
echo $_smarty_tpl->tpl_vars['previousForm']->value->password;
}?>">
              <label for="passwordInput">Hasło</label>
            </div>


            
            <button class="w-100 btn btn-lg btn-primary" type="submit">Zarejestruj</button>
            
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
