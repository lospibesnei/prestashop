<?php /* Smarty version Smarty-3.1.14, created on 2015-11-04 23:39:18
         compiled from "C:\wamp\www\prestashop\modules\blockadvertising\blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7783563ac1569bc189-44720568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70af14ed4774494b5ac232b1aa87f4274bad1e83' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\blockadvertising\\blockadvertising.tpl',
      1 => 1381159710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7783563ac1569bc189-44720568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563ac156a33cc7_69344817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563ac156a33cc7_69344817')) {function content_563ac156a33cc7_69344817($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="155"  height="163" /></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>