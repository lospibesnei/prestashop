<?php /*%%SmartyHeaderCode:14696563ac1550cd464-16911471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b567dce176e6fa524447bbb8caea64d2c242142' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\leoshoe\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1446690708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14696563ac1550cd464-16911471',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563b768009c9b6_46594201',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563b768009c9b6_46594201')) {function content_563b768009c9b6_46594201($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block"><a href="http://localhost/prestashop/index.php?controller=manufacturer" title="Marcas">Marcas</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item"><a href="http://localhost/prestashop/index.php?id_manufacturer=1&amp;controller=manufacturer&amp;id_lang=1" title="más sobre Apple Computer, Inc">Apple Computer, Inc</a></li>
							<li class="item"><a href="http://localhost/prestashop/index.php?id_manufacturer=3&amp;controller=manufacturer&amp;id_lang=1" title="más sobre Excipio Sport">Excipio Sport</a></li>
							<li class="last_item"><a href="http://localhost/prestashop/index.php?id_manufacturer=2&amp;controller=manufacturer&amp;id_lang=1" title="más sobre Shure Incorporated">Shure Incorporated</a></li>
				</ul>
				<form action="/prestashop/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">Todas las marcas</option>
									<option value="http://localhost/prestashop/index.php?id_manufacturer=1&amp;controller=manufacturer&amp;id_lang=1">Apple Computer, Inc</option>
									<option value="http://localhost/prestashop/index.php?id_manufacturer=3&amp;controller=manufacturer&amp;id_lang=1">Excipio Sport</option>
									<option value="http://localhost/prestashop/index.php?id_manufacturer=2&amp;controller=manufacturer&amp;id_lang=1">Shure Incorporated</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>