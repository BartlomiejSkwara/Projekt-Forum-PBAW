<?php
/* Smarty version 4.3.0, created on 2023-05-22 17:52:10
  from 'E:\XAMPP\htdocs\projekt\app\views\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_646b8faa301c54_87767586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd356c445b05eac840ef968ba1c5e9707f2dc3f24' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\templates\\header.tpl',
      1 => 1684770703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646b8faa301c54_87767586 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg fixed-top bg-black border-bottom" style="border-bottom: 2px var(--bs-border-style) var(--bs-border-color)!important">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/yuumbread.svg" class="image-flip" width="59" height="33" class="me-3" alt="">
        Forum
    </a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarCollapse" style="">
        
          
      <ul class="navbar-nav ms-auto mb-2 mb-md-0 navbar-nav-scroll">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Kategorie</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">#</a>
        </li><li class="nav-item">
          <a class="nav-link" href="#">#</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">#</a>
        </li>
        <?php if (\core\RoleUtils::inRole("user")) {?>
            <li class="nav-item">
                <a class="nav-link " href=""><?php echo \core\SessionUtils::load("username",true);?>
</a>
            </li>
            
            <li class="nav-item">
                <a type="button" class="btn btn-outline-danger" href = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'logout'),$_smarty_tpl ) );?>
" >Wyloguj</a>
            </li>
        <?php } else { ?>
            <li class="nav-item ">
               <a type="button" class="btn btn-outline-primary" href = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'login'),$_smarty_tpl ) );?>
">Zaloguj</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href=""></a>
            </li>
            
            <li class="nav-item">
                <button type="button" class="btn btn-success">Zarejestruj</button>
            </li>
            
            
        <?php }?>
        
        

    </ul>
        

       
    </div>
  </div>
</nav><?php }
}
