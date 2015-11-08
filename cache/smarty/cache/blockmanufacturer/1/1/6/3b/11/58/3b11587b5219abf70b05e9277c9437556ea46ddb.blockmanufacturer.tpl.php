<?php /*%%SmartyHeaderCode:31068563f5c93182495-03108895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b11587b5219abf70b05e9277c9437556ea46ddb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\leoshoe\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1446988476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31068563f5c93182495-03108895',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563f5c93281169_70091196',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563f5c93281169_70091196')) {function content_563f5c93281169_70091196($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block"><a href="http://localhost:8080/prestashop/index.php?controller=manufacturer" title="Marcas">Marcas</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item"><a href="http://localhost:8080/prestashop/index.php?id_manufacturer=1&amp;controller=manufacturer&amp;id_lang=1" title="más sobre Apple Computer, Inc">Apple Computer, Inc</a></li>
							<li class="last_item"><a href="http://localhost:8080/prestashop/index.php?id_manufacturer=2&amp;controller=manufacturer&amp;id_lang=1" title="más sobre Shure Incorporated">Shure Incorporated</a></li>
				</ul>
				<form action="/prestashop/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">Todas las marcas</option>
									<option value="http://localhost:8080/prestashop/index.php?id_manufacturer=1&amp;controller=manufacturer&amp;id_lang=1">Apple Computer, Inc</option>
									<option value="http://localhost:8080/prestashop/index.php?id_manufacturer=2&amp;controller=manufacturer&amp;id_lang=1">Shure Incorporated</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>