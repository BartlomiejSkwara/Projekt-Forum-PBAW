<?php
/* Smarty version 4.3.0, created on 2023-06-21 16:49:01
  from 'E:\XAMPP\htdocs\projekt\app\views\CategoryView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64930ddd0848e2_49001817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd857bb1c589480961cec835d09679f4ac0ae1540' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\CategoryView.tpl',
      1 => 1687358919,
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
function content_64930ddd0848e2_49001817 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44563779064930ddd061139_97145757', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block "main"} */
class Block_44563779064930ddd061139_97145757 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_44563779064930ddd061139_97145757',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:components/messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class=" w-100 text-center ">
    <h1 class ="mx-auto">
        Witamy w kategorii<br>
        <b class="text-primary"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</b>
        <br>
        
        <small class="h5 w-50"><?php echo $_smarty_tpl->tpl_vars['categoryData']->value["description"];?>
</small>
    </h1>
 </div>
<div class = "d-flex flex-row-reverse">
          
    <button class="btn btn-primary border-primary-subtle  rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter">
        <img class=" mx-auto " " src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/icons/filter.svg" alt="" width="16" height="16"> 
        <span class="visually-hidden">Filtrowanie</span>
    </button>
    <?php if (\core\RoleUtils::inRole("user")) {?>
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'createThread'),$_smarty_tpl ) );?>
">
            <span class="btn btn-primary border-primary-subtle  rounded-pill">
                <img class=" mx-auto " " src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/icons/plus.svg" alt="" width="16" height="16" style="fill: red;"> 
                <span class="visually-hidden">Dodaj kategorię</span>
            </span>
        </a>
    <?php }?>
    

</div>   




<div style="">
  <div class="collapse" id="collapseFilter">
    <div class="text-center card card-body ju" >
        
        <form id="filter-form" onsubmit="ajaxPostForm('filter-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
categoryFilterThreadList/<?php echo $_smarty_tpl->tpl_vars['categoryData']->value["idCategory"];?>
','threadlist'); return false;">
           <label for="sortBy" class = " mb-2"><h5>Sortuj Według</h5></label>
            <select name="sortBy" id="sortBy" class="form-select w-50 mx-auto " aria-label="Typ sortowania">
                <option value="update_date" <?php if (true) {?>checked <?php }?>>Ostatnia aktywność</option>
                <option value="creation_date" <?php if (false) {?>checked <?php }?>>Data powstania</option>
                <option value="message_count" <?php if (false) {?>checked <?php }?>>Ilość Wiadomości</option>
                <option value="topic" <?php if (false) {?>selected<?php }?>>Alfabetycznie</option>

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
</div>






<div id="threadlist" class="list-group list-group-flush border-bottom border-top mt-2 w-90 mx-auto">

<?php $_smarty_tpl->_subTemplateRender("file:components/threadlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:components/paginationCategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</div>








    
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/myJS/functions.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "main"} */
}
