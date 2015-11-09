<?php /* Smarty version Smarty-3.1.14, created on 2015-11-08 16:53:55
         compiled from "C:\wamp\www\prestashop\admin6391\themes\default\template\helpers\list\list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16448563b6f605b3cd9-04561716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbbe08a186b1fd9940a8dc90571b4135739ef351' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin6391\\themes\\default\\template\\helpers\\list\\list_action_default.tpl',
      1 => 1446822738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16448563b6f605b3cd9-04561716',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563b6f60aa1034_86220105',
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563b6f60aa1034_86220105')) {function content_563b6f60aa1034_86220105($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="default" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['name']->value)){?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?>>
	<img src="../img/admin/asterisk.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>