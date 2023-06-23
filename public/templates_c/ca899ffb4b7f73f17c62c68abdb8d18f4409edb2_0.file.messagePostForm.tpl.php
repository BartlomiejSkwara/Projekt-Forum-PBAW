<?php
/* Smarty version 4.3.0, created on 2023-06-23 21:48:54
  from 'E:\XAMPP\htdocs\projekt\app\views\components\messagePostForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6495f7261298e0_81138256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca899ffb4b7f73f17c62c68abdb8d18f4409edb2' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\components\\messagePostForm.tpl',
      1 => 1687549732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6495f7261298e0_81138256 (Smarty_Internal_Template $_smarty_tpl) {
if (\core\SessionUtils::load("username",true)) {?>
<form class = "mx-auto text-center  w-90 border p-2 mt-2 mb-0">

    <div class="mx-auto w-75">
            <label for="message" class="form-label">Wyślij Wiadomość</label>
            <textarea class="form-control no-scroll " id="message" rows="3" maxlength="180" placeholder="Enter your message" required></textarea>
        <div id="messageHelp" class="form-text">Maksymalnie 180 znaków</div>
    </div>
    <button type="submit" class="btn btn-primary">Wyślij</button>
</form>
<?php }?>



<?php }
}
