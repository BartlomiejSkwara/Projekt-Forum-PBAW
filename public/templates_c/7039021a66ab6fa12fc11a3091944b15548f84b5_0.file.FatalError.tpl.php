<?php
/* Smarty version 4.3.0, created on 2023-05-24 11:17:13
  from 'E:\XAMPP\htdocs\projekt\app\views\FatalError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_646dd619be9283_09766722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7039021a66ab6fa12fc11a3091944b15548f84b5' => 
    array (
      0 => 'E:\\XAMPP\\htdocs\\projekt\\app\\views\\FatalError.tpl',
      1 => 1684919824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646dd619be9283_09766722 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->_assignInScope('title', "Fatal Error");?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_563807259646dd619be51f0_64211061', "main");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates\blankMain.tpl");
}
/* {block "main"} */
class Block_563807259646dd619be51f0_64211061 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_563807259646dd619be51f0_64211061',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    
    <div class = "d-flex w-100 h-100 p-3 mx-auto flex-column">
        <div class= "text-center mx-auto my-auto dark w-60">
            <div class="">
                <img class="mb-4 img-fluid" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
/resources/yuumsad.svg" alt="" >                  
            </div>
            <h1>Drogi Użytkowniku </h1>
            <hr>
            <br>
            <h2>Nie wiem czy jesteś tego świadom, ale .... </h2>
            <br>
            <h3>.... nie powinieneś się tutaj znaleźć </h3>
            <br>
            <h4>Ale skoro jednak tutaj jesteś może oznaczać to tylko jedno :<</h4>
            <br>
            <h5>Mamy obecnie drobne problemy techniczne :<<<</h5>
            <br>
            <p>Prosimy więc o cierpliwość, postaramy się rozwikłać je tak szybko jak to tylko możliwe :> </p>
            <br>
            
        </div>
     
    </div>
    
    
<?php
}
}
/* {/block "main"} */
}
