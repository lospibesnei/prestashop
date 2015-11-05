<?php /* Smarty version Smarty-3.1.14, created on 2015-11-04 23:39:25
         compiled from "C:\wamp\www\prestashop\themes\leoshoe\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7409563ac15de447b8-21952361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c04e2555bf4b00d8006ffa68f2330ed2af466b0' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\leoshoe\\footer.tpl',
      1 => 1446690706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7409563ac15de447b8-21952361',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'PS_ALLOW_MOBILE_DEVICE' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563ac15df222f2_93252358',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563ac15df222f2_93252358')) {function content_563ac15df222f2_93252358($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
				</div>

<!-- Right -->
				<div id="right_column" class="column col-md-3 omega">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

				</div>
			</div>
			</div>
			</div>

<!-- Footer -->
			<div id="footer" class="alpha omega clearfix">
				<div class="container"> 					
					<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

					<?php if ($_smarty_tpl->tpl_vars['PS_ALLOW_MOBILE_DEVICE']->value){?>
						<p class="center clearBoth"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true);?>
?mobile_theme_ok"><?php echo smartyTranslate(array('s'=>'Browse the mobile site'),$_smarty_tpl);?>
</a></p>
					<?php }?> 				
				</div>
			</div>
		</div>
		</div>
	<?php }?>
	</body>
</html>
<?php }} ?>