<?php
/* Smarty version 4.3.0, created on 2023-06-27 10:48:56
  from 'E:\XAMPP\htdocs\projekt\app\views\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_649aa2782d6818_21351702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '266e66633bfa32cd766450e02f36ddfe3ccc5b46' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\Home.tpl',
      1 => 1687855721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/messages.tpl' => 1,
  ),
),false)) {
function content_649aa2782d6818_21351702 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->_assignInScope('title', "Categories");
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1384293234649aa27829ddd8_61832506', "main");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates\main.tpl");
}
/* {block "main"} */
class Block_1384293234649aa27829ddd8_61832506 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1384293234649aa27829ddd8_61832506',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
  


<div class="mx-auto  mb-5 text-center flex-grow-1">
  <img class="d-block  mx-auto mb-4" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/yuumsideview.svg" alt="" width="72" height="57">
  <h1 class="display-5 fw-bold text-body-emphasis">Forum</h1>
  <div class="col-lg-6 mx-auto">
      <p class="lead mb-4 w-100">
          
        Witamy na forum! To miejsce, gdzie możesz dyskutować z różnymi osobami na tematy, które Was interesują.<br> 
        Jednak pamiętaj, że ważne jest zachowanie kultury i nieprzesadzanie z nieuprzejmościami. <br>
        Bądź uprzejmy i szanuj innych uczestników rozmów. :><br>
      </p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          </div>
  </div>
</div>
        
<div class= "text-center mb-auto flex-shrink-1  mx-auto dark ">
    <?php $_smarty_tpl->_subTemplateRender("file:components/messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
</div>    
        
    
            
            

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="delete category modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center">
      <div class="modal-header ">
          <h5 class="modal-title">Czy na pewno chcesz <b class = "text-danger">usunąć</b> kategorię ?  </b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <p>Zrobienie tego będzie skutkowało <b class = "text-danger">skasowaniem wszystkich </b> wątków zawartych w kategorii 
              <b class="modal-category-name-title text-primary"></b> 
               i może okazać się nieodwracalne. 
              <b class = "text-danger">Jesteś pewien </b> że chcesz to zrobić ?</p>
      </div>
      <div class="modal-footer justify-content-center">
        <a type="button" class="modal-button-accept btn btn-danger" href="" >Tak</a>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Nie</button>
      </div>
    </div>
  </div>
</div>
            
            



                <div class= "text-center flex-grow-1 mx-auto  dark ">
            <div class ="d-flex flex-wrap justify-content-center container  p-0">
            

                
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
  
                <div class="card border-custom bg-dark-subtle m-2 " style="width: 18rem; height: 18rem;">
                    
                                      <?php if (\core\RoleUtils::inRole("admin")) {?>
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'editCategoryView'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['cat']->value["idcategory"];?>
">
                            <span class="position-absolute top-0 start-85 translate-middle p-2 bg-primary rounded-circle border-primary-subtle btn">
                                <img class=" mx-auto " " src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/icons/wrench.svg" alt="" width="16" height="16" style="fill: red;"> 
                                <span class="visually-hidden">Edit Category</span>
                            </span>
                        </a>
                                
                        <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger rounded-circle border-danger-subtle btn" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'deleteCategory'),$_smarty_tpl ) );?>
" data-bs-id="<?php echo $_smarty_tpl->tpl_vars['cat']->value["idcategory"];?>
"> 
                          <img class=" mx-auto " " src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/icons/trash.svg" alt="" width="16" height="16" style="fill: red;"> 
                          <span class="visually-hidden">Remove Category</span>
                        </span>
                    <?php }?>
                    
                    <a href = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'category'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['cat']->value["idcategory"];?>
" class ="text-decoration-none text-reset" >
                        <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/yuumbread.svg" class="card-img-top border-bottom" alt="...">

                        <div class="card-body bg-dark-subtle">
                          <h5 class="card-title "><?php echo $_smarty_tpl->tpl_vars['cat']->value["name"];?>
</h5>
                          <p class="card-text "><?php echo $_smarty_tpl->tpl_vars['cat']->value["description"];?>
</p>
                        </div>
                    </a>

                </div>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
            <?php if (\core\RoleUtils::inRole("admin")) {?>
                <a href = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'addCategoryView'),$_smarty_tpl ) );?>
"   > 
                    <div class="card bg-dark-subtle m-2 border-dots border-custom" style="width: 18rem; height: 18rem;"> 
                        <img class="w-50 m-auto custom-icon"  src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/icons/plus.svg" alt=""  >              
                    </div>
                </a>
            <?php }?>
            
            
           
            </div>
 
            
        </div>
        
        
    

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/myJS/customDeleteModal.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "main"} */
}
