<?php
/* Smarty version 4.3.0, created on 2023-06-23 20:47:59
  from 'E:\XAMPP\htdocs\projekt\app\views\CategoryView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6495e8df85a708_11874037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd857bb1c589480961cec835d09679f4ac0ae1540' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\CategoryView.tpl',
      1 => 1687546071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/messages.tpl' => 1,
    'file:components/threadlist.tpl' => 1,
    'file:components/paginationCategory.tpl' => 1,
  ),
),false)) {
function content_6495e8df85a708_11874037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14139790836495e8df82b000_95276861', "main");
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block "main"} */
class Block_14139790836495e8df82b000_95276861 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_14139790836495e8df82b000_95276861',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:components/messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>










<div class=" w-100 text-center ">
    <h1 class ="mx-auto">
        Przeglądasz właśnie kategorię<br>
        <b class="text-primary"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</b>
        <br>
        
        <small class="h5 w-50"><?php echo $_smarty_tpl->tpl_vars['categoryData']->value["description"];?>
</small>
    </h1>
 </div>
 
<div class = "d-flex flex-row-reverse">
          
    <button class="btn btn-primary border-primary-subtle  rounded-pill " type="button" data-bs-toggle="collapse" data-bs-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter">
        <img class=" mx-auto " " src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/icons/filter.svg" alt="" width="16" height="16"> 
        <span class="visually-hidden">Filtrowanie</span>
    </button>
    <?php if (\core\RoleUtils::inRole("user")) {?>
    <button class="btn btn-primary border-primary-subtle  rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#adding" aria-expanded="false" aria-controls="collapseFilter">
        <img class=" mx-auto " " src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/icons/plus.svg" alt="" width="16" height="16"> 
        <span class="visually-hidden">Filtrowanie</span>
    </button>
    <?php }?>
    

</div>   

    

    
 <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center">
      <div class="modal-header ">
          <h5 class="modal-title">Czy na pewno chcesz <b class = "text-danger">usunąć</b> wątek ?  </b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <p>Zrobienie tego będzie skutkowało <b class = "text-danger">skasowaniem wszystkich </b> wiadomości zawartych w wątku
              <b class="modal-category-name-title text-primary"></b> 
               i jest nieodwracalne. 
              <b class = "text-danger">Jesteś pewien </b> że chcesz to zrobić ?</p>
      </div>
      <div class="modal-footer justify-content-center">
        <a type="button" class="modal-button-accept btn btn-danger" href="" >Tak</a>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Nie</button>
      </div>
    </div>
  </div>
</div>
    
    


<div class="collapse" id="adding">
    <div class="text-center card card-body ju" >

    123
    </div>
</div>


  <div class="collapse" id="collapseFilter">
    <div class="text-center card card-body ju" >
        
        <form id="filter-form" onsubmit="ajaxPostForm('filter-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
categoryFilterThreadList/<?php echo $_smarty_tpl->tpl_vars['categoryData']->value["idCategory"];?>
','threadlist'); return false;">
           <label for="sortBy" class = " mb-2"><h5>Sortuj Według</h5></label>
            <select name="sortBy" id="sortBy" class="form-select w-50 mx-auto " aria-label="Typ sortowania">
                <option value="update_date" checked >Ostatnia aktywność</option>
                <option value="creation_date" >Data powstania</option>
                <option value="message_count" >Ilość Wiadomości</option>
                <option value="topic" >Alfabetycznie</option>

            </select>


            <label for="sortDirection" class = "mb-2 mt-3"><h5>Typ Sortowania</h5></label>
            <br>
            <div id="sortDirection" class="btn-group" role="group" aria-label="Basic radio toggle button group">
                
                <input type="radio" class="btn-check " name="sortDirection" id="btnradio2MAL" autocomplete="off"  checked value="DESC">
                <label class="btn btn-outline-primary" for="btnradio2MAL">Malejąco</label>
                
                <input type="radio" class="btn-check " name="sortDirection" id="btnradio1ROS" autocomplete="off"  value="ASC">
                <label class="btn btn-outline-primary" for="btnradio1ROS">Rosnąco</label>


            </div>
            <br>
            <label for="filter" class = "mb-2 mt-3 "><h5>Filtr nazwy</h5></label>
            <input type="text" class="form-control w-50 mx-auto" name='filter' maxlength="45" id="filter" placeholder="Filtr">
           
            <button class="mt-3 btn btn-lg btn-primary" type="submit">Szukaj</button>
        </form>
        
    </div>
  </div>






<div id="contentList" class="list-group list-group-flush border-bottom border-top mt-2 w-90 mx-auto">


<?php $_smarty_tpl->_subTemplateRender("file:components/threadlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:components/paginationCategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</div>








<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/myJS/customDeleteModal.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/myJS/functions.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "main"} */
}
