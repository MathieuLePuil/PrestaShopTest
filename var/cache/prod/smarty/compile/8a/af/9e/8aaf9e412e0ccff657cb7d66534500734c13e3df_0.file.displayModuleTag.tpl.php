<?php
/* Smarty version 4.3.4, created on 2024-12-21 15:51:46
  from '/Users/mathieulp/Desktop/AltumWeb/PrestaShop/modules/psxdesign/views/templates/hook/displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6766d602b644c5_22575306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8aaf9e412e0ccff657cb7d66534500734c13e3df' => 
    array (
      0 => '/Users/mathieulp/Desktop/AltumWeb/PrestaShop/modules/psxdesign/views/templates/hook/displayModuleTag.tpl',
      1 => 1711028754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6766d602b644c5_22575306 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
