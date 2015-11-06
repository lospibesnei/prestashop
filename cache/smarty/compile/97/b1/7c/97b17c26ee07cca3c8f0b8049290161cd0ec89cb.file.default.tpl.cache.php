<?php /* Smarty version Smarty-3.1.14, created on 2015-11-06 12:54:28
         compiled from "C:\wamp\www\prestashop\modules\blockleocustomhtml\tmpl\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1213563ac157238dc2-65868604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97b17c26ee07cca3c8f0b8049290161cd0ec89cb' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\blockleocustomhtml\\tmpl\\default.tpl',
      1 => 1446822889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1213563ac157238dc2-65868604',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563ac1572a35d8_54601335',
  'variables' => 
  array (
    'class_prefix' => 0,
    'pos' => 0,
    'show_title' => 0,
    'module_title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563ac1572a35d8_54601335')) {function content_563ac1572a35d8_54601335($_smarty_tpl) {?><div class="customhtml block <?php echo $_smarty_tpl->tpl_vars['class_prefix']->value;?>
" id="leo-customhtml-<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
">
	<?php if ($_smarty_tpl->tpl_vars['show_title']->value){?>
		<h3 class="title_block"><?php echo $_smarty_tpl->tpl_vars['module_title']->value;?>
</h3>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</div>
</div><?php }} ?>