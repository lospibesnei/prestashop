<?php /* Smarty version Smarty-3.1.14, created on 2015-11-05 01:16:35
         compiled from "C:\wamp\www\prestashop\themes\leoshoe\product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17331563ad8230b0916-51341488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eeba7ac6f7334804ab459fb3af5b07a3e6164565' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\leoshoe\\product-compare.tpl',
      1 => 1446690710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17331563ad8230b0916-51341488',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comparator_max_item' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563ad82319d102_57196048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563ad82319d102_57196048')) {function content_563ad82319d102_57196048($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['comparator_max_item']->value){?>
<script type="text/javascript">
// <![CDATA[
	var min_item = '<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl);?>
';
	var max_item = "<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
";
	var add_compare = '<?php echo smartyTranslate(array('s'=>'This product was added to comparison list','js'=>1),$_smarty_tpl);?>
';
	var remove_compare = '<?php echo smartyTranslate(array('s'=>'This product was removed from comparison list','js'=>1),$_smarty_tpl);?>
';
	var err_remove_compare = '<?php echo smartyTranslate(array('s'=>'Can not remove from comparison list','js'=>1),$_smarty_tpl);?>
';
//]]>
</script>

	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison');?>
" onsubmit="true">
		<p>
		<input type="submit" id="bt_compare" class="button" value="<?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
" />
		<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
		</p>
	</form>
<?php }?>

<?php }} ?>