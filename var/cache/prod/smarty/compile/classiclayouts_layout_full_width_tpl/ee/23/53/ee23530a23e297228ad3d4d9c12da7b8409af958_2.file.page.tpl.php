<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 15:28:04
  from '/Users/j1v3/www/greenpurpleled/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60156cf4daa709_73931571',
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
function content_60156cf4daa709_73931571 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35453300060156cf4d932f9_95270047', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_76418408760156cf4d96b30_50490695 extends Smarty_Internal_Block
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
class Block_57548809060156cf4d94cf1_04347006 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76418408760156cf4d96b30_50490695', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_143865504760156cf4d9f549_96455617 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_99577368060156cf4da1876_36640491 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_25797356060156cf4d9d639_11865169 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143865504760156cf4d9f549_96455617', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99577368060156cf4da1876_36640491', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_121312248260156cf4da6563_70761393 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_137341774460156cf4da4da0_22960418 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121312248260156cf4da6563_70761393', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_35453300060156cf4d932f9_95270047 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_35453300060156cf4d932f9_95270047',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_57548809060156cf4d94cf1_04347006',
  ),
  'page_title' => 
  array (
    0 => 'Block_76418408760156cf4d96b30_50490695',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_25797356060156cf4d9d639_11865169',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_143865504760156cf4d9f549_96455617',
  ),
  'page_content' => 
  array (
    0 => 'Block_99577368060156cf4da1876_36640491',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_137341774460156cf4da4da0_22960418',
  ),
  'page_footer' => 
  array (
    0 => 'Block_121312248260156cf4da6563_70761393',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57548809060156cf4d94cf1_04347006', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25797356060156cf4d9d639_11865169', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137341774460156cf4da4da0_22960418', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
