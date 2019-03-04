<?php
/* Smarty version 3.1.33, created on 2019-03-04 09:34:44
  from 'C:\wamp64\www\install\admin088ajryos\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7cd514761bb6_38286623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b48c376ac7566cf5cd9bed550aa9d47b034c2d7' => 
    array (
      0 => 'C:\\wamp64\\www\\install\\admin088ajryos\\themes\\default\\template\\content.tpl',
      1 => 1551682109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7cd514761bb6_38286623 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
