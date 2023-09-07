<?php
/* Smarty version 3.1.43, created on 2023-09-07 20:53:16
  from 'C:\wamp64\www\prestashop\admin760arifz0\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_64f9eae4200059_09231668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ffd5bc4d580280db4c17115914efd4f07eb7ee9' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin760arifz0\\themes\\default\\template\\content.tpl',
      1 => 1694092751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f9eae4200059_09231668 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
