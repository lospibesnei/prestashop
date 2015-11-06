<?php /*%%SmartyHeaderCode:12217563ac15a4f18e7-10761042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '016c84eda45d053be3ed53d5622f8b2347534463' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\leomanufacturerscroll\\leomanufacturerscroll.tpl',
      1 => 1446822900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12217563ac15a4f18e7-10761042',
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563ccd3764a402_63210313',
  'variables' => 
  array (
    'show_title' => 0,
    'module_title' => 0,
    'leomanufacturers' => 0,
    'manufacturer' => 0,
    'leoManufactureConfig' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563ccd3764a402_63210313')) {function content_563ccd3764a402_63210313($_smarty_tpl) {?><div id="mycarouselHolder" align="center" class="box">
	<div>
				
		<div class="jcarousel-wrap">		
			<div id="wrap">
			  <ul id="lofjcarousel" class="jcarousel-skin-tango">
									<li class="lof-item">
						<a href="http://localhost/prestashop/index.php?id_manufacturer=1&controller=manufacturer&id_lang=1">
							<img src="/prestashop/img/m/es-default-manu_default.jpg" alt="Apple Computer, Inc" vspace="0" border="0" />
							
						</a>
					</li>
									<li class="lof-item">
						<a href="http://localhost/prestashop/index.php?id_manufacturer=3&controller=manufacturer&id_lang=1">
							<img src="/prestashop/img/m/3-manu_default.jpg" alt="Excipio Sport" vspace="0" border="0" />
							
						</a>
					</li>
									<li class="lof-item">
						<a href="http://localhost/prestashop/index.php?id_manufacturer=2&controller=manufacturer&id_lang=1">
							<img src="/prestashop/img/m/es-default-manu_default.jpg" alt="Shure Incorporated" vspace="0" border="0" />
							
						</a>
					</li>
							  </ul>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery("#lofjcarousel").flexisel({
			visibleItems: 6,
			animationSpeed: 1000,
			autoPlay: 0,
			autoPlaySpeed: 3000,
			pauseOnHover: 1,
			enableResponsiveBreakpoints: 1,
	    	responsiveBreakpoints: { 
	    		portrait: { 
	    			changePoint:480,
	    			visibleItems: 1
	    		},
	    		landscape: { 
	    			changePoint:640,
	    			visibleItems: 2
	    		},
	    		tablet: {
	    			changePoint:768,
	    			visibleItems: 3
	    		}
	    	}
	    });
	});
</script><?php }} ?>