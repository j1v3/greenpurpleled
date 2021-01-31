<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 15:35:08
  from '/Users/j1v3/www/greenpurpleled/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60156e9c6d95d2_99817533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee23530a23e297228ad3d4d9c12da7b8409af958' => 
    array (
      0 => '/Users/j1v3/www/greenpurpleled/themes/classic/templates/page.tpl',
      1 => 1611793018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60156e9c6d95d2_99817533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163505894260156e9c6bdc29_29933450', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_73286043860156e9c6c1464_45619892 extends Smarty_Internal_Block
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
class Block_43715428960156e9c6bf554_64434344 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73286043860156e9c6c1464_45619892', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_102363760360156e9c6ccd25_84230857 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_87578537360156e9c6d0d04_16814603 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_101085008560156e9c6caa18_22843438 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102363760360156e9c6ccd25_84230857', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87578537360156e9c6d0d04_16814603', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_64824586160156e9c6d5bc8_72794380 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_26951536860156e9c6d43b4_46086249 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64824586160156e9c6d5bc8_72794380', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_163505894260156e9c6bdc29_29933450 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_163505894260156e9c6bdc29_29933450',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_43715428960156e9c6bf554_64434344',
  ),
  'page_title' => 
  array (
    0 => 'Block_73286043860156e9c6c1464_45619892',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_101085008560156e9c6caa18_22843438',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_102363760360156e9c6ccd25_84230857',
  ),
  'page_content' => 
  array (
    0 => 'Block_87578537360156e9c6d0d04_16814603',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_26951536860156e9c6d43b4_46086249',
  ),
  'page_footer' => 
  array (
    0 => 'Block_64824586160156e9c6d5bc8_72794380',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43715428960156e9c6bf554_64434344', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101085008560156e9c6caa18_22843438', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26951536860156e9c6d43b4_46086249', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
