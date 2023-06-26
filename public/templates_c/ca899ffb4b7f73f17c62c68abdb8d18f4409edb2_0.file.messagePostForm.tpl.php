<?php
/* Smarty version 4.3.0, created on 2023-06-26 16:12:47
  from 'E:\XAMPP\htdocs\projekt\app\views\components\messagePostForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64999cdf68e8a1_29489447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca899ffb4b7f73f17c62c68abdb8d18f4409edb2' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\components\\messagePostForm.tpl',
      1 => 1687788763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64999cdf68e8a1_29489447 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if (\core\SessionUtils::load("username",true)) {?>
<form id = "messagePostFormA" class = "mx-auto text-center  w-90 border p-2 mt-2 mb-0" onsubmit="ajaxPostFormPagination('messagePostFormA','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
postMessage/<?php echo $_smarty_tpl->tpl_vars['threadData']->value["idthread"];?>
','contentList'); return false;">

    <div class="mx-auto w-75">
            <label for="message" class="form-label">Wyślij Wiadomość</label>
            <textarea class="form-control no-scroll " name="message" id="message" rows="3" maxlength="180" placeholder="Enter your message" ></textarea>
        <div id="messageHelp" class="form-text">Maksymalnie 180 znaków</div>
    </div>
    <button type="submit" class="btn btn-primary"  value="<?php echo $_smarty_tpl->tpl_vars['pagData']->value->lastPage;?>
" >Wyślij</button>
</form>
<?php }?>



<?php }
}
