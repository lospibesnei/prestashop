<?php /* Smarty version Smarty-3.1.14, created on 2015-11-08 15:30:43
         compiled from "C:\xampp\htdocs\prestashop\modules\blockleocustomhtml\tmpl\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27398563f5c93b980e4-68389434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15676ba52b10489339368225b393e5ab846b7b9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blockleocustomhtml\\tmpl\\default.tpl',
      1 => 1446988469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27398563f5c93b980e4-68389434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class_prefix' => 0,
    'pos' => 0,
    'show_title' => 0,
    'module_title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563f5c93bb07e4_76098100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563f5c93bb07e4_76098100')) {function content_563f5c93bb07e4_76098100($_smarty_tpl) {?><div class="customhtml block <?php echo $_smarty_tpl->tpl_vars['class_prefix']->value;?>
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