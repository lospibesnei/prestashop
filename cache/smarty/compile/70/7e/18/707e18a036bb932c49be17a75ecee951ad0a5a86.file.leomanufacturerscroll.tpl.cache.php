<?php /* Smarty version Smarty-3.1.14, created on 2015-11-08 15:30:44
         compiled from "C:\xampp\htdocs\prestashop\modules\leomanufacturerscroll\leomanufacturerscroll.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18275563f5c94ba42e9-89487720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '707e18a036bb932c49be17a75ecee951ad0a5a86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\leomanufacturerscroll\\leomanufacturerscroll.tpl',
      1 => 1446988472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18275563f5c94ba42e9-89487720',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_title' => 0,
    'module_title' => 0,
    'leomanufacturers' => 0,
    'manufacturer' => 0,
    'leoManufactureConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563f5c94bdfeb8_89007642',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563f5c94bdfeb8_89007642')) {function content_563f5c94bdfeb8_89007642($_smarty_tpl) {?><div id="mycarouselHolder" align="center" class="box">
	<div>
		<?php if ($_smarty_tpl->tpl_vars['show_title']->value){?> 
			<h2><?php echo $_smarty_tpl->tpl_vars['module_title']->value;?>
</h2> 
		<?php }?>		
		<div class="jcarousel-wrap">		
			<div id="wrap">
			  <ul id="lofjcarousel" class="jcarousel-skin-tango">
				<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leomanufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value){
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
?>
					<li class="lof-item">
						<a href="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['link'];?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['linkIMG'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['name'];?>
" vspace="0" border="0" />
							
						</a>
					</li>
				<?php } ?>
			  </ul>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery("#lofjcarousel").flexisel({
			visibleItems: <?php echo $_smarty_tpl->tpl_vars['leoManufactureConfig']->value['limit'];?>
,
			animationSpeed: <?php echo $_smarty_tpl->tpl_vars['leoManufactureConfig']->value['animate_time'];?>
,
			autoPlay: <?php echo $_smarty_tpl->tpl_vars['leoManufactureConfig']->value['auto_play'];?>
,
			autoPlaySpeed: <?php echo $_smarty_tpl->tpl_vars['leoManufactureConfig']->value['auto_time'];?>
,
			pauseOnHover: <?php echo $_smarty_tpl->tpl_vars['leoManufactureConfig']->value['pause_on_hover'];?>
,
			enableResponsiveBreakpoints: <?php echo $_smarty_tpl->tpl_vars['leoManufactureConfig']->value['enable_responsive'];?>
,
	    	responsiveBreakpoints: { 
	    		portrait: { 
	    			changePoint:<?php echo $_smarty_tpl->tpl_vars['leoManufactureConfig']->value['portraint_change_point'];?>
,
	    			visibleItems: <?php echo $_smarty_tpl->tpl_vars['leoManufactureConfig']->value['portraint_visible_items'];?>

	    		},
	    		landscape: { 
	    			changePoint:<?php echo $_smarty_tpl->tpl_vars['leoManufactureConfig']->value['landscape_change_point'];?>
,
	    			visibleItems: <?php echo $_smarty_tpl->tpl_vars['leoManufactureConfig']->value['landscape_visible_items'];?>

	    		},
	    		tablet: {
	    			changePoint:<?php echo $_smarty_tpl->tpl_vars['leoManufactureConfig']->value['tablet_change_point'];?>
,
	    			visibleItems: <?php echo $_smarty_tpl->tpl_vars['leoManufactureConfig']->value['tablet_visible_items'];?>

	    		}
	    	}
	    });
	});
</script><?php }} ?>