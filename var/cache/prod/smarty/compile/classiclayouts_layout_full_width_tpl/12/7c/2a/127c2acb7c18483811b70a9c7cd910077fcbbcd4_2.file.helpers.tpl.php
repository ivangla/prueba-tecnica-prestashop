<?php
/* Smarty version 3.1.48, created on 2024-04-16 18:20:50
  from 'C:\laragon\www\prueba-tecnica-prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_661ea56224f9d1_60962092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '127c2acb7c18483811b70a9c7cd910077fcbbcd4' => 
    array (
      0 => 'C:\\laragon\\www\\prueba-tecnica-prestashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1702481816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661ea56224f9d1_60962092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\laragon\\www\\prueba-tecnica-prestashop\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\12\\7c\\2a\\127c2acb7c18483811b70a9c7cd910077fcbbcd4_2.file.helpers.tpl.php',
    'uid' => '127c2acb7c18483811b70a9c7cd910077fcbbcd4',
    'call_name' => 'smarty_template_function_renderLogo_2098259334661ea562249172_96578460',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_2098259334661ea562249172_96578460 */
if (!function_exists('smarty_template_function_renderLogo_2098259334661ea562249172_96578460')) {
function smarty_template_function_renderLogo_2098259334661ea562249172_96578460(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_2098259334661ea562249172_96578460 */
}
