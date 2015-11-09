<?php /* Smarty version Smarty-3.1.14, created on 2015-11-08 18:27:26
         compiled from "C:\wamp\www\prestashop\admin6391\themes\default\template\controllers\cms_content\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1567563fbe3ec4c059-87515889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49008306a39f4cd035e705f74aa0dd67d45ab56f' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin6391\\themes\\default\\template\\controllers\\cms_content\\content.tpl',
      1 => 1446822734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1567563fbe3ec4c059-87515889',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563fbe3eed59f2_33856140',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563fbe3eed59f2_33856140')) {function content_563fbe3eed59f2_33856140($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)){?>
	<div class="cat_bar">
		<span style="color: #3C8534;"><?php echo smartyTranslate(array('s'=>'Current category'),$_smarty_tpl);?>
 :</span>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }} ?>