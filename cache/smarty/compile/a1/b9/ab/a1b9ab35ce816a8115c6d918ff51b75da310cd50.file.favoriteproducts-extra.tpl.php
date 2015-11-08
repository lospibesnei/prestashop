<?php /* Smarty version Smarty-3.1.14, created on 2015-11-08 20:23:41
         compiled from "C:\xampp\htdocs\prestashop\themes\leoshoe\modules\favoriteproducts\favoriteproducts-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16155563fa13d46fe50-04416483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1b9ab35ce816a8115c6d918ff51b75da310cd50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\leoshoe\\modules\\favoriteproducts\\favoriteproducts-extra.tpl',
      1 => 1446988476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16155563fa13d46fe50-04416483',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isCustomerFavoriteProduct' => 0,
    'isLogged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563fa13d4d1c68_86325488',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563fa13d4d1c68_86325488')) {function content_563fa13d4d1c68_86325488($_smarty_tpl) {?>

<?php if (!$_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['isLogged']->value){?>
<li id="favoriteproducts_block_extra_add" class="add">
	<?php echo smartyTranslate(array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['isLogged']->value){?>
<li id="favoriteproducts_block_extra_remove">
	<?php echo smartyTranslate(array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<?php }?>

<li id="favoriteproducts_block_extra_added">
	<?php echo smartyTranslate(array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<li id="favoriteproducts_block_extra_removed">
	<?php echo smartyTranslate(array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li><?php }} ?>