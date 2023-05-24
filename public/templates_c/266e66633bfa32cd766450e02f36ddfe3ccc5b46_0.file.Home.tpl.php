<?php
/* Smarty version 4.3.0, created on 2023-05-24 11:40:42
  from 'E:\XAMPP\htdocs\projekt\app\views\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_646ddb9a5a6e86_11503229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '266e66633bfa32cd766450e02f36ddfe3ccc5b46' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\Home.tpl',
      1 => 1684921239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646ddb9a5a6e86_11503229 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->_assignInScope('title', "Categories");
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1200765971646ddb9a59cc06_91440704', "main");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates\main.tpl");
}
/* {block "main"} */
class Block_1200765971646ddb9a59cc06_91440704 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1200765971646ddb9a59cc06_91440704',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
  
    <div class = "d-flex pt-5 mt-5 mx-auto  flex-column">
        
          <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/yuumsideview.svg" alt="" width="72" height="57">
            <h1 class="display-5 fw-bold text-body-emphasis">Centered hero</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae diam aliquet, convallis nunc id, tincidunt urna. 
                    Duis tempor justo nisl, sed feugiat massa suscipit at. Etiam non placerat nulla. Aliquam euismod odio vitae est imperdiet facilisis. 
                    Proin sollicitudin metus in neque semper, et consequat ipsum consequat. Ut nec pellentesque leo. Quisque aliquet turpis quis metus pretium venenatis. 
                    Aliquam cursus justo sapien, vitae laoreet augue tincidunt quis. Vivamus massa est, accumsan in ipsum sit amet, finibus elementum justo. 
                    Nam erat tellus, commodo at justo eget, molestie ultrices erat. Sed quis ultrices velit. Cras tempor massa volutpat dapibus pretium. Ut id felis ac nisl maximus rhoncus.
                    Vivamus nulla erat, rhoncus vitae nunc elementum, elementum rhoncus odio. Etiam quis felis risus. Nulla ultrices porttitor rhoncus.
                </p>
              <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
              </div>
            </div>
        </div>
        
        
        
        
        
                <div class= "text-center mx-auto mt-auto dark ">
            <div class ="d-flex flex-wrap justify-content-center container">
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (0) : 0-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                    
               

                
                
                <div class="card bg-dark-subtle m-2 " style="width: 18rem;">
                    
                                                         
                    <a href = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'home'),$_smarty_tpl ) );?>
" class=" stretched-link ">
                     <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/yuumbread.svg" class="card-img-top border-bottom" alt="...">
                    </a>
                    <div class="card-body bg-dark-subtle">
                      <h5 class="card-title ">Kategoria</h5>
                      <p class="card-text ">Dana kategoria jest poświęcona bla bla bla.</p>
                      
                    </div>
                    
                                    </div>

            <?php }
}
?>
            
            
            
           
            </div>
 
            
        </div>
        
        
    </div>


<?php
}
}
/* {/block "main"} */
}
