<?php /* Smarty version Smarty-3.1.14, created on 2015-11-04 23:39:12
         compiled from "C:\wamp\www\prestashop\themes\leoshoe\modules\favoriteproducts\favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9747563ac150a844f7-93573675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1744c4f6cbc0c10034b9f51437054754150e123e' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\leoshoe\\modules\\favoriteproducts\\favoriteproducts-header.tpl',
      1 => 1446690709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9747563ac150a844f7-93573675',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563ac150c0f473_31326880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563ac150c0f473_31326880')) {function content_563ac150c0f473_31326880($_smarty_tpl) {?>
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