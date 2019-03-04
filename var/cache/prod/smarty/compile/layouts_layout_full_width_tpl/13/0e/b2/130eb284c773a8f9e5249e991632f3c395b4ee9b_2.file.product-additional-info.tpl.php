<?php
/* Smarty version 3.1.33, created on 2019-03-04 09:31:59
  from 'C:\wamp64\www\install\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7cd46fa4dae3_58066029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '130eb284c773a8f9e5249e991632f3c395b4ee9b' => 
    array (
      0 => 'C:\\wamp64\\www\\install\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1551682129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7cd46fa4dae3_58066029 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
