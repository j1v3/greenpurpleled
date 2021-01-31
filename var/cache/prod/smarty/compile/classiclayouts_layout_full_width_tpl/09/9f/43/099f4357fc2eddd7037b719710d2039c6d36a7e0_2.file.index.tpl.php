<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 15:28:04
  from '/Users/j1v3/www/greenpurpleled/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60156cf4d87786_11930195',
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
function content_60156cf4d87786_11930195 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56767137260156cf4d70327_76078552', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_129603267660156cf4d736d0_54220203 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_184110863060156cf4d7b607_91130056 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_110776144460156cf4d782d8_05189450 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184110863060156cf4d7b607_91130056', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_56767137260156cf4d70327_76078552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_56767137260156cf4d70327_76078552',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_129603267660156cf4d736d0_54220203',
  ),
  'page_content' => 
  array (
    0 => 'Block_110776144460156cf4d782d8_05189450',
  ),
  'hook_home' => 
  array (
    0 => 'Block_184110863060156cf4d7b607_91130056',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129603267660156cf4d736d0_54220203', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110776144460156cf4d782d8_05189450', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
