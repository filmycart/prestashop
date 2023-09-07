<?php
/* Smarty version 3.1.43, created on 2023-09-07 20:58:20
  from 'C:\wamp64\www\prestashop\pdf\invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_64f9ec1406ba65_85567983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15e8b457992f496e78e3a1201c7de5cf86b5e266' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\pdf\\invoice.shipping-tab.tpl',
      1 => 1694092757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f9ec1406ba65_85567983 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
