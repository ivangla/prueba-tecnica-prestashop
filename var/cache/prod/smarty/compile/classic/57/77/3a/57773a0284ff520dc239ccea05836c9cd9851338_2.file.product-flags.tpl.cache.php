<?php
/* Smarty version 3.1.48, created on 2024-04-16 17:29:09
  from 'C:\laragon\www\prueba-tecnica-prestashop\themes\classic\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_661e9945c65866_48256806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57773a0284ff520dc239ccea05836c9cd9851338' => 
    array (
      0 => 'C:\\laragon\\www\\prueba-tecnica-prestashop\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1702481816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661e9945c65866_48256806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '2038001694661e9945c61d01_53555481';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_579179469661e9945c63d93_55910596', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_579179469661e9945c63d93_55910596 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_579179469661e9945c63d93_55910596',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
