<?php
/* Smarty version 4.3.0, created on 2023-06-17 20:10:30
  from 'E:\XAMPP\htdocs\projekt\app\views\CategoryView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_648df716278497_26737570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd857bb1c589480961cec835d09679f4ac0ae1540' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\CategoryView.tpl',
      1 => 1687025428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/messages.tpl' => 1,
  ),
),false)) {
function content_648df716278497_26737570 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1992305900648df71625d7f8_24198891', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block "main"} */
class Block_1992305900648df71625d7f8_24198891 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1992305900648df71625d7f8_24198891',
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

<button class="btn btn-primary ms-auto border-primary-subtle  rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter">
    <img class=" mx-auto " " src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/icons/filter.svg" alt="" width="16" height="16"> 
    <span class="visually-hidden">Filtrowanie</span>
</button>



<div style="">
  <div class="collapse" id="collapseFilter">
    <div class="card card-body ju" >
        
 
        <label for="sortBy" class = "mx-auto mb-2"><h5>Sortuj Według</h5></label>
        <div id="sortBy" class="btn-group" role="group" aria-label="Type sortowania">
            <input type="radio" class="btn-check " name="sortBy" id="btnradio1Alf" autocomplete="off"    <?php if (false) {?>checked<?php }?>>
            <label class="btn btn-outline-primary" for="btnradio1Alf">Alfabetycznie</label>

            <input type="radio" class="btn-check" name="sortBy" id="btnradio2DP" autocomplete="off"    <?php if (false) {?>checked<?php }?> >
            <label class="btn btn-outline-primary" for="btnradio2DP">Data powstania</label>

            <input type="radio" class="btn-check" name="sortBy" id="btnradio3OZ" autocomplete="off"     <?php if (true) {?>checked<?php }?>>
            <label class="btn btn-outline-primary" for="btnradio3OZ">Ostatnia zmiana</label>
        </div>
        
        <label for="sortDirection" class = "mx-auto mb-2 mt-3"><h5>Typ Sortowania</h5></label>
        <div id="sortDirection" class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check " name="sortDirection" id="btnradio1ROS" autocomplete="off"    <?php if (true) {?>checked<?php }?>>
            <label class="btn btn-outline-primary" for="btnradio1ROS">Rosnąco</label>

            <input type="radio" class="btn-check " name="sortDirection" id="btnradio2MAL" autocomplete="off"    <?php if (false) {?>checked<?php }?> >
            <label class="btn btn-outline-primary" for="btnradio2MAL">Malejąco</label>
        </div>
        
        
    </div>
  </div>
</div>






<div class="list-group list-group-flush border-bottom   w-90 mx-auto">

    
    
    <?php
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? 2+1 - (0) : 0-(2)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 0, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration === 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration === $_smarty_tpl->tpl_vars['var']->total;?>
        <div class="py-3 row border-bottom">           
            <div class="col-lg-6 row">
                <strong class="mb-1">Nazwa wątku.</strong>
                <div class="col-8 mb-1 small ">Autor stworzył: 2023-06-17 <br>14:13:18</div>
            </div>
            <div class="col-lg-6 row">

                <div class="col-6 mb-1 small ">2023-06-17 <br>14:13:18</div>
                <p class="col-4">21</p>
            </div>

        </div>   
    <?php }
}
?>
 








</div>
<?php
}
}
/* {/block "main"} */
}
