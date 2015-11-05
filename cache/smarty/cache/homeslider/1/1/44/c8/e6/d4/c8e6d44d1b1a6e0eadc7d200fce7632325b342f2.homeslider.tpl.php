<?php /*%%SmartyHeaderCode:1044563ac156c1f0d3-13914997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8e6d44d1b1a6e0eadc7d200fce7632325b342f2' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\leoshoe\\modules\\homeslider\\homeslider.tpl',
      1 => 1446690709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1044563ac156c1f0d3-13914997',
  'variables' => 
  array (
    'homeslider' => 0,
    'homeslider_slides' => 0,
    'slide' => 0,
    'module_dir' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563ac157156585_85817719',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563ac157156585_85817719')) {function content_563ac157156585_85817719($_smarty_tpl) {?><div class="box slideshow">
	
<!-- Module HomeSlider -->
<script type="text/javascript">
			var homeslider_loop = true;
	var homeslider_speed = 500;
var homeslider_pause = 3000;
</script>
<ul id="homeslider">
			<li>
			<a href="http://www.prestashop.com" title="This is a sample picture">
			<img src="http://localhost/prestashop/modules/homeslider/images/sample-1.jpg" alt="sample-1" height="300" width="535" />
			</a>
		</li>
				<li>
			<a href="http://www.prestashop.com" title="This is a sample picture">
			<img src="http://localhost/prestashop/modules/homeslider/images/sample-2.jpg" alt="sample-2" height="300" width="535" />
			</a>
		</li>
				<li>
			<a href="http://www.prestashop.com" title="This is a sample picture">
			<img src="http://localhost/prestashop/modules/homeslider/images/sample-3.jpg" alt="sample-3" height="300" width="535" />
			</a>
		</li>
				<li>
			<a href="http://www.prestashop.com" title="This is a sample picture">
			<img src="http://localhost/prestashop/modules/homeslider/images/sample-4.jpg" alt="sample-4" height="300" width="535" />
			</a>
		</li>
				<li>
			<a href="http://www.prestashop.com" title="This is a sample picture">
			<img src="http://localhost/prestashop/modules/homeslider/images/sample-5.jpg" alt="sample-5" height="300" width="535" />
			</a>
		</li>
	</ul>
<!-- /Module HomeSlider -->
</div>
<?php }} ?>