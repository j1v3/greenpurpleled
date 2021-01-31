<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 15:28:04
  from '/Users/j1v3/www/greenpurpleled/themes/classic/templates/catalog/_partials/product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60156cf4c511d5_21116445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01a842566091ad83529593409b437416284e2960' => 
    array (
      0 => '/Users/j1v3/www/greenpurpleled/themes/classic/templates/catalog/_partials/product-flags.tpl',
      1 => 1611793018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60156cf4c511d5_21116445 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '15646204660156cf4c3cc00_92866465';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207471115960156cf4c42307_66200983', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_207471115960156cf4c42307_66200983 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_207471115960156cf4c42307_66200983',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
