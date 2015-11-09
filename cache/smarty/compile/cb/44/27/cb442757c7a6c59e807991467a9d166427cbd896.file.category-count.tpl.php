<?php /* Smarty version Smarty-3.1.14, created on 2015-11-08 16:46:19
         compiled from "C:\wamp\www\prestashop\themes\leoshoe\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11554563ad822dea725-28682424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb442757c7a6c59e807991467a9d166427cbd896' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\leoshoe\\category-count.tpl',
      1 => 1446822910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11554563ad822dea725-28682424',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563ad822f11029_15193328',
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563ad822f11029_15193328')) {function content_563ad822f11029_15193328($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>