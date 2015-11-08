<?php /* Smarty version Smarty-3.1.14, created on 2015-11-08 15:30:41
         compiled from "C:\xampp\htdocs\prestashop\themes\leoshoe\modules\favoriteproducts\favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16470563f5c91a29ac6-91935850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30237143019497614483979e1201152e9f72e300' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\leoshoe\\modules\\favoriteproducts\\favoriteproducts-header.tpl',
      1 => 1446988476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16470563f5c91a29ac6-91935850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563f5c91bbe3e1_38811579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563f5c91bbe3e1_38811579')) {function content_563f5c91bbe3e1_38811579($_smarty_tpl) {?>
<script type="text/javascript">
	var favorite_products_url_add = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add'),false);?>
';
	var favorite_products_url_remove = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),false);?>
';
<?php if (isset($_GET['id_product'])){?>
	var favorite_products_id_product = '<?php echo intval($_GET['id_product']);?>
';
<?php }?> 
</script>
<?php }} ?>