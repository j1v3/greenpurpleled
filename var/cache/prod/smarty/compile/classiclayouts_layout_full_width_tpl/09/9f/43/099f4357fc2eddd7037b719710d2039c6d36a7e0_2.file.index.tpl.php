<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-28 18:46:23
  from '/Users/j1v3/www/greenpurpleled/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6012f86f4ecc33_70578240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '099f4357fc2eddd7037b719710d2039c6d36a7e0' => 
    array (
      0 => '/Users/j1v3/www/greenpurpleled/themes/classic/templates/index.tpl',
      1 => 1611793018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6012f86f4ecc33_70578240 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1761915916012f86f4e2431_67389933', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_20225644866012f86f4e3d52_82559908 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_12671296456012f86f4e77d6_52889730 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_945117966012f86f4e6071_60211187 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12671296456012f86f4e77d6_52889730', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1761915916012f86f4e2431_67389933 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1761915916012f86f4e2431_67389933',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_20225644866012f86f4e3d52_82559908',
  ),
  'page_content' => 
  array (
    0 => 'Block_945117966012f86f4e6071_60211187',
  ),
  'hook_home' => 
  array (
    0 => 'Block_12671296456012f86f4e77d6_52889730',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20225644866012f86f4e3d52_82559908', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_945117966012f86f4e6071_60211187', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
