<?php /* Smarty version Smarty-3.1.14, created on 2015-11-05 16:10:49
         compiled from "C:\wamp\www\prestashop\modules\blockadvfooter\blockadvfooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3701563ac15c391050-39920264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4255e2c5c8157f26bb7702ee472dec88284160f9' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\blockadvfooter\\blockadvfooter.tpl',
      1 => 1446750577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3701563ac15c391050-39920264',
  'function' => 
  array (
  ),
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563ac15c7ccd52_86273733',
  'variables' => 
  array (
    'pos' => 0,
    'lofpositions' => 0,
    'key_pos' => 0,
    'blocks' => 0,
    'block' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563ac15c7ccd52_86273733')) {function content_563ac15c7ccd52_86273733($_smarty_tpl) {?><div style="clear:both"></div>
<div id="advand<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
" class="adv-footer-wrap">
	<?php  $_smarty_tpl->tpl_vars['blocks'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blocks']->_loop = false;
 $_smarty_tpl->tpl_vars['key_pos'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lofpositions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blocks']->key => $_smarty_tpl->tpl_vars['blocks']->value){
$_smarty_tpl->tpl_vars['blocks']->_loop = true;
 $_smarty_tpl->tpl_vars['key_pos']->value = $_smarty_tpl->tpl_vars['blocks']->key;
?>
		<div id="lofadva-pos-<?php echo $_smarty_tpl->tpl_vars['key_pos']->value+1;?>
" class="blocks" style="width:100%">
			<div class="blocks-wrap">
			<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_smarty_tpl->tpl_vars['key_block'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['blocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value){
$_smarty_tpl->tpl_vars['block']->_loop = true;
 $_smarty_tpl->tpl_vars['key_block']->value = $_smarty_tpl->tpl_vars['block']->key;
?>
				<div class="block" style="width:<?php echo $_smarty_tpl->tpl_vars['block']->value['width'];?>
%; float:left;">
					<div class="block-wrap">
						<?php if ($_smarty_tpl->tpl_vars['block']->value['show_title']){?>
							<h3 class="title_block"><?php echo $_smarty_tpl->tpl_vars['block']->value['title'];?>
</h3>
						<?php }?>
						<div class="block_content">
							<ul class="widget-items">
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key_item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['block']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key_item']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
								<?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='link'){?>
									<li class="link"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link_item'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['target']=='_newwithout'){?>onclick='javascript: window.open("<?php echo $_smarty_tpl->tpl_vars['item']->value['link_item'];?>
", "", "toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes"); return false;'<?php }?>><?php if ($_smarty_tpl->tpl_vars['item']->value['show_title']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
<?php }?></a></li>
								<?php }elseif($_smarty_tpl->tpl_vars['item']->value['type']=='module'){?>
									<li class="widget-module">
										<?php if ($_smarty_tpl->tpl_vars['item']->value['show_title']){?><h2><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h2><?php }?>
										<?php echo $_smarty_tpl->tpl_vars['item']->value['module'];?>

									</li>
								<?php }elseif($_smarty_tpl->tpl_vars['item']->value['type']=='custom_html'){?>
									<li class="widget-text">
										<?php if ($_smarty_tpl->tpl_vars['item']->value['show_title']){?><h2><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h2><?php }?>
										<?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>

									</li>
								<?php }elseif($_smarty_tpl->tpl_vars['item']->value['type']=='gmap'){?>
									<li class="widget-gmap">
										<?php if ($_smarty_tpl->tpl_vars['item']->value['show_title']){?><h2><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h2><?php }?>
										
										<script type="text/javascript">
										  function initialize() {
											  var myOptions = {
												zoom: 8,
												center: new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['item']->value['latitude'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['longitude'];?>
),
												mapTypeId: google.maps.MapTypeId.ROADMAP
											  }
											  var map = new google.maps.Map(document.getElementById("lofmap_canvas<?php echo $_smarty_tpl->tpl_vars['item']->value['id_loffc_block_item'];?>
"), myOptions);
											}
											function loadScript() {
											  var script = document.createElement("script");
											  script.type = "text/javascript";
											  script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyCgnzQHpG4TAVJJAFgEp6u1arCQ3dlwVB8&sensor=true&callback=initialize";
											  document.body.appendChild(script);
											}
											window.onload = loadScript;
										</script>
										
										<div id="lofmap_canvas<?php echo $_smarty_tpl->tpl_vars['item']->value['id_loffc_block_item'];?>
" class="lofmap_canvas"></div>
									</li>
								<?php }elseif($_smarty_tpl->tpl_vars['item']->value['type']=='addthis'){?>
									<li class="widget-addthis">
										<?php if ($_smarty_tpl->tpl_vars['item']->value['show_title']){?><h2><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h2><?php }?>
										<div class="addthis_toolbox addthis_default_style ">
											<a class="addthis_button_preferred_1"></a>
											<a class="addthis_button_preferred_2"></a>
											<a class="addthis_button_preferred_3"></a>
											<a class="addthis_button_preferred_4"></a>
											<a class="addthis_button_compact"></a>
											<a class="addthis_counter addthis_bubble_style"></a>
										</div>
										
										<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
										<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4fc893c046e9bd1b"></script>
										
									</li>
								<?php }?>
							<?php } ?>
							</ul>
						</div>	
					</div>
				</div>
			<?php } ?>
			<div style="clear:both;"></div>
			</div>
		</div>
	<?php } ?>
</div><?php }} ?>