<?php
/* Smarty version 3.1.33, created on 2019-03-04 09:25:40
  from 'C:\wamp64\www\install\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7cd2f4cf96e6_39354127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dff9f1c313b5c07050388a6ab07e1508f86ed7f' => 
    array (
      0 => 'C:\\wamp64\\www\\install\\themes\\classic\\templates\\index.tpl',
      1 => 1551682129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7cd2f4cf96e6_39354127 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4541513635c7cd2f4cea237_48890432', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_11969973945c7cd2f4cec2a6_25363692 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_5793801015c7cd2f4cf31b7_42897188 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_17766017385c7cd2f4cf0c35_18696806 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5793801015c7cd2f4cf31b7_42897188', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_4541513635c7cd2f4cea237_48890432 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_4541513635c7cd2f4cea237_48890432',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_11969973945c7cd2f4cec2a6_25363692',
  ),
  'page_content' => 
  array (
    0 => 'Block_17766017385c7cd2f4cf0c35_18696806',
  ),
  'hook_home' => 
  array (
    0 => 'Block_5793801015c7cd2f4cf31b7_42897188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11969973945c7cd2f4cec2a6_25363692', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17766017385c7cd2f4cf0c35_18696806', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
