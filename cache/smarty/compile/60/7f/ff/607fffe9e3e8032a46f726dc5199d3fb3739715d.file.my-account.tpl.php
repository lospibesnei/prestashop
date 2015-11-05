<?php /* Smarty version Smarty-3.1.14, created on 2015-11-05 01:15:39
         compiled from "C:\wamp\www\prestashop\themes\leoshoe\modules\favoriteproducts\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27927563ad7eb327db7-62928959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '607fffe9e3e8032a46f726dc5199d3fb3739715d' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\leoshoe\\modules\\favoriteproducts\\my-account.tpl',
      1 => 1446690709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27927563ad7eb327db7-62928959',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'in_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563ad7eb553ba4_04690247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563ad7eb553ba4_04690247')) {function content_563ad7eb553ba4_04690247($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<li class="favoriteproducts">
	<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','account'), 'htmlall', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>
">
		<?php if (!$_smarty_tpl->tpl_vars['in_footer']->value){?> <span class="fa fa-heart"></span><?php }?><?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

	</a>
</li>
<?php }} ?>