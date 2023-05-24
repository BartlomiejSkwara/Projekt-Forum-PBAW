<?php
/* Smarty version 4.3.0, created on 2023-05-24 18:25:21
  from 'E:\XAMPP\htdocs\projekt\app\views\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_646e3a713e3377_74120238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '266e66633bfa32cd766450e02f36ddfe3ccc5b46' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\Home.tpl',
      1 => 1684945520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646e3a713e3377_74120238 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->_assignInScope('title', "Categories");
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_961629806646e3a713b9710_43977222', "main");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates\main.tpl");
}
/* {block "main"} */
class Block_961629806646e3a713b9710_43977222 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_961629806646e3a713b9710_43977222',
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                                   

                
                
                <div class="card bg-dark-subtle m-2 " style="width: 18rem; height: 18rem;">
                    
                                      <?php if (\core\RoleUtils::inRole("admin")) {?>
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'editCategory'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['cat']->value["idcategory"];?>
">
                            <span class="position-absolute top-0 start-85 translate-middle p-2 bg-primary rounded-circle border-primary-subtle btn">
                                <img class=" mx-auto " " src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/icons/wrench.svg" alt="" width="16" height="16" style="fill: red;"> 
                                <span class="visually-hidden">Edit Category</span>
                            </span>
                        </a>
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'deleteCategory'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['cat']->value["idcategory"];?>
">
                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger rounded-circle border-danger-subtle btn">
                              <img class=" mx-auto " " src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/icons/trash.svg" alt="" width="16" height="16" style="fill: red;"> 
                              <span class="visually-hidden">Remove Category</span>
                            </span>
                        </a>
                    <?php }?>
                    
                    <a href = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'category'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['cat']->value["idcategory"];?>
" class=" stretched-link ">
                     <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/yuumbread.svg" class="card-img-top border-bottom" alt="...">
                    </a>
                    <div class="card-body bg-dark-subtle">
                      <h5 class="card-title "><?php echo $_smarty_tpl->tpl_vars['cat']->value["name"];?>
</h5>
                      <p class="card-text "><?php echo $_smarty_tpl->tpl_vars['cat']->value["description"];?>
</p>
                      
                    </div>
                    

                </div>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
            <?php if (\core\RoleUtils::inRole("admin")) {?>
                <a href = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'addCategory'),$_smarty_tpl ) );?>
"   > 
                    <div class="card bg-dark-subtle m-2 border-dots" style="width: 18rem; height: 18rem;"> 
                        <img class="w-75 m-auto custom-icon"  src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/icons/plus.svg" alt=""  >              
                    </div>
                </a>
            <?php }?>
            
            
           
            </div>
 
            
        </div>
        
        
    </div>


<?php
}
}
/* {/block "main"} */
}
