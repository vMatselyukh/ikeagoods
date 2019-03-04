<?php
/* Smarty version 3.1.33, created on 2019-03-04 09:25:40
  from 'C:\wamp64\www\install\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7cd2f4e8e093_24370204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee08f89a5f6006e84f1021ba4f6b14873b6ff035' => 
    array (
      0 => 'C:\\wamp64\\www\\install\\themes\\classic\\templates\\page.tpl',
      1 => 1551682130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7cd2f4e8e093_24370204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4367155695c7cd2f4e3b8f3_26408942', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_7061730945c7cd2f4e52d39_98935350 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_5651363605c7cd2f4e46b20_03364197 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7061730945c7cd2f4e52d39_98935350', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_5670220875c7cd2f4e6db07_80234428 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_9374344615c7cd2f4e731d5_89412192 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8755283555c7cd2f4e6a011_53014618 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5670220875c7cd2f4e6db07_80234428', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9374344615c7cd2f4e731d5_89412192', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_2826674235c7cd2f4e85507_55203690 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_18866473275c7cd2f4e810c2_41327913 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2826674235c7cd2f4e85507_55203690', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_4367155695c7cd2f4e3b8f3_26408942 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4367155695c7cd2f4e3b8f3_26408942',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_5651363605c7cd2f4e46b20_03364197',
  ),
  'page_title' => 
  array (
    0 => 'Block_7061730945c7cd2f4e52d39_98935350',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_8755283555c7cd2f4e6a011_53014618',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_5670220875c7cd2f4e6db07_80234428',
  ),
  'page_content' => 
  array (
    0 => 'Block_9374344615c7cd2f4e731d5_89412192',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_18866473275c7cd2f4e810c2_41327913',
  ),
  'page_footer' => 
  array (
    0 => 'Block_2826674235c7cd2f4e85507_55203690',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5651363605c7cd2f4e46b20_03364197', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8755283555c7cd2f4e6a011_53014618', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18866473275c7cd2f4e810c2_41327913', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
