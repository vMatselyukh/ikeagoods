<?php
/* Smarty version 3.1.33, created on 2019-03-04 09:35:12
  from 'C:\wamp64\www\install\admin088ajryos\themes\new-theme\template\components\layout\employee_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7cd530df7883_79032039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd15233dfe36b24b454ad65e71bfc3c469c57a41' => 
    array (
      0 => 'C:\\wamp64\\www\\install\\admin088ajryos\\themes\\new-theme\\template\\components\\layout\\employee_dropdown.tpl',
      1 => 1551682105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7cd530df7883_79032039 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['employee']->value)) {?>
<div class="dropdown employee-dropdown">
  <div class="rounded-circle person" data-toggle="dropdown">
    <i class="material-icons">account_circle</i>
  </div>
  <div class="dropdown-menu dropdown-menu-right">
    <div class="text-center employee_avatar">
      <img class="avatar rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['employee']->value->getImage();?>
" />
      <span><?php echo $_smarty_tpl->tpl_vars['employee']->value->firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['employee']->value->lastname;?>
</span>
    </div>
    <a class="dropdown-item employee-link profile-link" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminEmployees',true,array(),array('id_employee'=>intval($_smarty_tpl->tpl_vars['employee']->value->id),'updateemployee'=>1)),'html','UTF-8' ));?>
">
      <i class="material-icons">settings_applications</i>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your profile'),$_smarty_tpl ) );?>

    </a>
    <a class="dropdown-item employee-link" id="header_logout" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['logout_link']->value,'html','UTF-8' ));?>
">
      <i class="material-icons">power_settings_new</i>
      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out'),$_smarty_tpl ) );?>
</span>
    </a>
  </div>
</div>
<?php }
}
}
