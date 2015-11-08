<?php /* Smarty version Smarty-3.1.14, created on 2015-11-08 20:23:41
         compiled from "C:\xampp\htdocs\prestashop\themes\leoshoe\modules\blockwishlist\blockwishlist-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18616563fa13d523e89-86623290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14d81deb97fd2a78f0e1fee98e3839b0b3f943b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\leoshoe\\modules\\blockwishlist\\blockwishlist-extra.tpl',
      1 => 1446988476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18616563fa13d523e89-86623290',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563fa13d5655c1_42713770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563fa13d5655c1_42713770')) {function content_563fa13d5655c1_42713770($_smarty_tpl) {?>

<p class="buttons_bottom_block">
	<a class="btn" href="#" id="wishlist_button" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;"  title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
" rel="nofollow"><span class="fa fa-gift"></span> <?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
</a>
</p>
<?php }} ?>