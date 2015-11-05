<?php /* Smarty version Smarty-3.1.14, created on 2015-11-04 23:45:26
         compiled from "C:\wamp\www\prestashop\modules\carriercompare\template\configuration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32280563ac2c620feb5-30876998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da4d4ff10d9f53fb79aa3ad4fe1eb4f29d4f4061' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\carriercompare\\template\\configuration.tpl',
      1 => 1381159710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32280563ac2c620feb5-30876998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_error' => 0,
    'refresh_method' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563ac2c63f5948_62926018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563ac2c63f5948_62926018')) {function content_563ac2c63f5948_62926018($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?><?php if (isset($_smarty_tpl->tpl_vars['display_error']->value)){?>
	<?php if ($_smarty_tpl->tpl_vars['display_error']->value){?>
		<div class="error"><?php echo smartyTranslate(array('s'=>'An error occured during form validation.','mod'=>'carriercompare'),$_smarty_tpl);?>
</div>
	<?php }else{ ?>
		<div class="conf"><?php echo smartyTranslate(array('s'=>'Configuration updated','mod'=>'carriercompare'),$_smarty_tpl);?>
</div>
	<?php }?>
<?php }?>

<form method="post" action="<?php echo smarty_modifier_escape($_SERVER['REQUEST_URI'], 'htmlall', 'UTF-8');?>
">
	<fieldset>
		<div class="warn"><?php echo smartyTranslate(array('s'=>'This module is only available during the standard five-step checkout process. The carrier list has already been defined for one-page checkout. ','mod'=>'carriercompare'),$_smarty_tpl);?>
.</div>
		<legend><?php echo smartyTranslate(array('s'=>'Global Configuration','mod'=>'carriercompare'),$_smarty_tpl);?>
</legend>
		
		<label for="refresh_method">Refresh carrier list method</label>
		<div class="margin-form">
			<select id="refresh_method" name="refresh_method">
				<option value="0" <?php if ($_smarty_tpl->tpl_vars['refresh_method']->value==0){?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Anytime','mod'=>'carriercompare'),$_smarty_tpl);?>
</option>
				<option value="1" <?php if ($_smarty_tpl->tpl_vars['refresh_method']->value==1){?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'The required information is set.','mod'=>'carriercompare'),$_smarty_tpl);?>
</option>
			</select>
			<p><?php echo smartyTranslate(array('s'=>'How would you like to refresh information for a customer?','mod'=>'carriercompare'),$_smarty_tpl);?>
</p>
		</div>
		
		<div class="margin-form">
			<input name="setGlobalConfiguration" type="submit" class="button" value="<?php echo smartyTranslate(array('s'=>'Submit','mod'=>'carriercompare'),$_smarty_tpl);?>
">
		</div>
	</fieldset>
</form><?php }} ?>