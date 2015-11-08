<?php /* Smarty version Smarty-3.1.14, created on 2015-11-08 20:23:41
         compiled from "C:\xampp\htdocs\prestashop\modules\blocksharefb\blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21802563fa13d22e7f4-18041937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f6b4d179ee6946f6ffec65aca469f98f148051c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blocksharefb\\blocksharefb.tpl',
      1 => 1446988470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21802563fa13d22e7f4-18041937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563fa13d409687_17964104',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563fa13d409687_17964104')) {function content_563fa13d409687_17964104($_smarty_tpl) {?>

<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="js-new-window"><?php echo smartyTranslate(array('s'=>'Share on Facebook!','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>