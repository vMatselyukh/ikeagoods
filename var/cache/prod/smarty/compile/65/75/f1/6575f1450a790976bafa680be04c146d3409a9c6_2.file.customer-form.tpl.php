<?php
/* Smarty version 3.1.33, created on 2019-03-04 09:32:18
  from 'C:\wamp64\www\install\themes\classic\templates\customer\_partials\customer-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7cd482ae3937_67375941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6575f1450a790976bafa680be04c146d3409a9c6' => 
    array (
      0 => 'C:\\wamp64\\www\\install\\themes\\classic\\templates\\customer\\_partials\\customer-form.tpl',
      1 => 1551682130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5c7cd482ae3937_67375941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11786910645c7cd482aa11b7_61764850', 'customer_form');
?>

<?php }
/* {block 'customer_form_errors'} */
class Block_6430055355c7cd482aa42d2_34849244 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
  <?php
}
}
/* {/block 'customer_form_errors'} */
/* {block 'customer_form_actionurl'} */
class Block_19260003885c7cd482aaf4d1_07643789 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'customer_form_actionurl'} */
/* {block "form_field"} */
class Block_15608540635c7cd482ac3116_25741514 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block "form_field"} */
/* {block "form_fields"} */
class Block_21238602405c7cd482ab99a7_65743255 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15608540635c7cd482ac3116_25741514', "form_field", $this->tplIndex);
?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php echo $_smarty_tpl->tpl_vars['hook_create_account_form']->value;?>

    <?php
}
}
/* {/block "form_fields"} */
/* {block "form_buttons"} */
class Block_2859510235c7cd482ad8158_11696397 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <button class="btn btn-primary form-control-submit float-xs-right" data-link-action="save-customer" type="submit">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </button>
      <?php
}
}
/* {/block "form_buttons"} */
/* {block 'customer_form_footer'} */
class Block_16166117745c7cd482ad3df7_28548742 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer class="form-footer clearfix">
      <input type="hidden" name="submitCreate" value="1">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2859510235c7cd482ad8158_11696397', "form_buttons", $this->tplIndex);
?>

    </footer>
  <?php
}
}
/* {/block 'customer_form_footer'} */
/* {block 'customer_form'} */
class Block_11786910645c7cd482aa11b7_61764850 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customer_form' => 
  array (
    0 => 'Block_11786910645c7cd482aa11b7_61764850',
  ),
  'customer_form_errors' => 
  array (
    0 => 'Block_6430055355c7cd482aa42d2_34849244',
  ),
  'customer_form_actionurl' => 
  array (
    0 => 'Block_19260003885c7cd482aaf4d1_07643789',
  ),
  'form_fields' => 
  array (
    0 => 'Block_21238602405c7cd482ab99a7_65743255',
  ),
  'form_field' => 
  array (
    0 => 'Block_15608540635c7cd482ac3116_25741514',
  ),
  'customer_form_footer' => 
  array (
    0 => 'Block_16166117745c7cd482ad3df7_28548742',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_2859510235c7cd482ad8158_11696397',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6430055355c7cd482aa42d2_34849244', 'customer_form_errors', $this->tplIndex);
?>


<form action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19260003885c7cd482aaf4d1_07643789', 'customer_form_actionurl', $this->tplIndex);
?>
" id="customer-form" class="js-customer-form" method="post">
  <section>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21238602405c7cd482ab99a7_65743255', "form_fields", $this->tplIndex);
?>

  </section>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16166117745c7cd482ad3df7_28548742', 'customer_form_footer', $this->tplIndex);
?>


</form>
<?php
}
}
/* {/block 'customer_form'} */
}
