<?php
/* Smarty version 3.1.33, created on 2019-03-04 09:40:10
  from 'C:\wamp64\www\install\modules\ps_mbo\views\templates\admin\include\admin-end-content-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7cd65a517de7_98587406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80a3a0f1e9765e2d31dc3ab78eb5115e50361db8' => 
    array (
      0 => 'C:\\wamp64\\www\\install\\modules\\ps_mbo\\views\\templates\\admin\\include\\admin-end-content-footer.tpl',
      1 => 1551684093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./tab_module_line.tpl' => 1,
  ),
),false)) {
function content_5c7cd65a517de7_98587406 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\install\\vendor\\smarty\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),1=>array('file'=>'C:\\wamp64\\www\\install\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
if (isset($_smarty_tpl->tpl_vars['from']->value) && $_smarty_tpl->tpl_vars['from']->value == 'footer') {?>
    <div class="row" <?php if (isset($_smarty_tpl->tpl_vars['panel_id']->value)) {?>id="<?php echo $_smarty_tpl->tpl_vars['panel_id']->value;?>
"<?php }?>>
        <div class="col">
            <div class="card">
                <h3 class="card-header">
                    <i class="icon-list-ul"></i>
                    <?php if (isset($_smarty_tpl->tpl_vars['panel_title']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['panel_title']->value,'html','UTF-8' ));
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modules list'),$_smarty_tpl ) );
}?>
                </h3>
<?php }?>
            <div class="card-block">
                <div class="module-item-list">
                    <?php if (count($_smarty_tpl->tpl_vars['modules_list']->value)) {?>
                        <?php echo smarty_function_counter(array('start'=>1,'assign'=>"count"),$_smarty_tpl);?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules_list']->value, 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
?>
                                <?php ob_start();
echo smarty_function_cycle(array('values'=>",row alt"),$_smarty_tpl);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:./tab_module_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class_row'=>$_prefixVariable1), 0, true);
?>
                            <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php if ($_smarty_tpl->tpl_vars['controller_name']->value == 'AdminPayment' && isset($_smarty_tpl->tpl_vars['view_all']->value)) {?>
                            <div class="panel-footer">
                                <div class="col-lg-4 col-lg-offset-4">
                                    <a class="btn btn-default btn-block" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPsMboModule',true,array(),array('filterCategoryTab'=>'payments_gateways')),'html','UTF-8' ));?>
">
                                        <i class="process-icon-payment"></i>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all available payments solutions'),$_smarty_tpl ) );?>

                                    </a>
                                </div>
                            </div>
                        <?php }?>
                    <?php } else { ?>
                        <table class="table">
                            <tr>
                                <td>
                                    <div class="alert alert-warning">
                                    <?php if ($_smarty_tpl->tpl_vars['controller_name']->value == 'AdminPayment') {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'It seems there are no recommended payment solutions for your country.'),$_smarty_tpl ) );?>
<br />
                                    <a class="_blank" href="https://www.prestashop.com/en/contact-us"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you think there should be one? Let us know!'),$_smarty_tpl ) );?>
</a>
                                    <?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No modules available in this section.'),$_smarty_tpl ) );
}?></div>
                                </td>
                            </tr>
                        </table>
                    <?php }?>
                </div>
            </div>
<?php if (isset($_smarty_tpl->tpl_vars['from']->value) && $_smarty_tpl->tpl_vars['from']->value == 'footer') {?>
            </div>
        </div>
    </div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['from']->value) && $_smarty_tpl->tpl_vars['from']->value == 'tab') {?>
    <div class="alert alert-addons row-margin-top" role="alert">
        <p class="alert-text">
          <a href="http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=dispatch&amp;utm_campaign=back-office-en-US&amp;utm_content=download" onclick="return !window.open(this.href);"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More modules on addons.prestashop.com'),$_smarty_tpl ) );?>
</a>
        </p>
    </div>
<?php }
}
}
