<?php
/* Smarty version 3.1.43, created on 2023-09-07 20:57:17
  from 'C:\wamp64\www\prestashop\themes\classic\templates\customer\_partials\my-account-links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_64f9ebd5a8d9b7_56812358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2ae67e3dbe2e20c86af538a0c8027a5c954355f' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\classic\\templates\\customer\\_partials\\my-account-links.tpl',
      1 => 1694092776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f9ebd5a8d9b7_56812358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139066854064f9ebd5a7aa08_71562936', 'my_account_links');
?>

<?php }
/* {block 'my_account_links'} */
class Block_139066854064f9ebd5a7aa08_71562936 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'my_account_links' => 
  array (
    0 => 'Block_139066854064f9ebd5a7aa08_71562936',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="account-link">
    <i class="material-icons">&#xE5CB;</i>
    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</span>
  </a>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
" class="account-link">
    <i class="material-icons">&#xE88A;</i>
    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
  </a>
<?php
}
}
/* {/block 'my_account_links'} */
}
