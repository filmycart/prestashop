<?php
/* Smarty version 3.1.43, created on 2023-09-07 20:53:05
  from 'C:\wamp64\www\prestashop\themes\classic\templates\checkout\checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_64f9ead93e5a79_52510908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66401608f195a3d636b63028c90cf1630dcebc80' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\classic\\templates\\checkout\\checkout.tpl',
      1 => 1694092776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/header.tpl' => 1,
    'file:checkout/_partials/cart-summary.tpl' => 1,
    'file:checkout/_partials/footer.tpl' => 1,
  ),
),false)) {
function content_64f9ead93e5a79_52510908 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27822018364f9ead93c9245_63354856', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146070343064f9ead93cd9f4_16920542', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36922907264f9ead93dfda0_74844191', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'header'} */
class Block_27822018364f9ead93c9245_63354856 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_27822018364f9ead93c9245_63354856',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'checkout_process'} */
class Block_23319005864f9ead93cf1b9_68393004 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'checkout_process'} */
/* {block 'cart_summary'} */
class Block_43511536264f9ead93d4f28_14188143 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
        <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'content'} */
class Block_146070343064f9ead93cd9f4_16920542 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_146070343064f9ead93cd9f4_16920542',
  ),
  'checkout_process' => 
  array (
    0 => 'Block_23319005864f9ead93cf1b9_68393004',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_43511536264f9ead93d4f28_14188143',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content">
    <div class="row">
      <div class="cart-grid-body col-xs-12 col-lg-8">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23319005864f9ead93cf1b9_68393004', 'checkout_process', $this->tplIndex);
?>

      </div>
      <div class="cart-grid-right col-xs-12 col-lg-4">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43511536264f9ead93d4f28_14188143', 'cart_summary', $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

      </div>
    </div>
  </section>
<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_36922907264f9ead93dfda0_74844191 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_36922907264f9ead93dfda0_74844191',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
