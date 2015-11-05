<?php /* Smarty version Smarty-3.1.14, created on 2015-11-05 01:20:46
         compiled from "C:\wamp\www\prestashop\modules\payulatam\views\templates\admin\credential.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25261563ad91e6771c3-37877130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd15649cc68f0fd3e13291cc89132b18070a5c122' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\payulatam\\views\\templates\\admin\\credential.tpl',
      1 => 1446697240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25261563ad91e6771c3-37877130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formCredential' => 0,
    'credentialInputVar' => 0,
    'input' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563ad91ed9fd99_44117525',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563ad91ed9fd99_44117525')) {function content_563ad91ed9fd99_44117525($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<h3><?php echo smartyTranslate(array('s'=>'Credentials','mod'=>'payulatam'),$_smarty_tpl);?>
</h3>
<form action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['formCredential']->value, 'htmlall', 'UTF-8');?>
" method="POST">
	<input type="hidden" name="submitPayU" value="1" />
	<?php  $_smarty_tpl->tpl_vars['input'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['input']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['credentialInputVar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['input']->key => $_smarty_tpl->tpl_vars['input']->value){
$_smarty_tpl->tpl_vars['input']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='text'){?>
			<ul>
				<li><label class="label_payu"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['input']->value['label'], 'htmlall', 'UTF-8');?>
</label></li>
				<li><input class="full input_payu" type="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['input']->value['type'], 'htmlall', 'UTF-8');?>
" placeholder="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['input']->value['label'], 'htmlall', 'UTF-8');?>
" id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['input']->value['name'], 'htmlall', 'UTF-8');?>
" name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['input']->value['name'], 'htmlall', 'UTF-8');?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['input']->value['value'], 'htmlall', 'UTF-8');?>
"/></li>
				<li><span class="caption"><?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>
</span></li>
			</ul>
		<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='radio'){?>
			<ul>
				<li><h4><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['input']->value['label'], 'htmlall', 'UTF-8');?>
</h4></li>
				<li>
					<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['val']->value, 'htmlall', 'UTF-8');?>

						<input type="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['input']->value['type'], 'htmlall', 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['val']->value==$_smarty_tpl->tpl_vars['input']->value['value']){?>checked='checked'<?php }?> name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['input']->value['name'], 'htmlall', 'UTF-8');?>
" id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['input']->value['name'], 'htmlall', 'UTF-8');?>
<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['val']->value, 'htmlall', 'UTF-8');?>
" />
					<?php } ?>
				</li>
				<li><input type="submit" class="md-btn button-form_payu button_payu" value="<?php echo smartyTranslate(array('s'=>'Save','mod'=>'payulatam'),$_smarty_tpl);?>
" /></li>
			</ul>
		<?php }?>
	<?php } ?>
</form>
<?php }} ?>