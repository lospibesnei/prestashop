<?php /*%%SmartyHeaderCode:25701563f5c9335f9a0-94374317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b628ffe473144d4a448ec5c13b7f54c75ecde91' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\leoshoe\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1446988476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25701563f5c9335f9a0-94374317',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'link' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563f5c93446492_74228556',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563f5c93446492_74228556')) {function content_563f5c93446492_74228556($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block"><a href="http://localhost:8080/prestashop/index.php?controller=supplier" title="Proveedores">Proveedores</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item">
			<a href="http://localhost:8080/prestashop/index.php?id_supplier=1&amp;controller=supplier&amp;id_lang=1" title="Más sobre AppleStore">AppleStore</a>
		</li>
							<li class="last_item">
			<a href="http://localhost:8080/prestashop/index.php?id_supplier=2&amp;controller=supplier&amp;id_lang=1" title="Más sobre Shure Online Store">Shure Online Store</a>
		</li>
				</ul>
				<form action="/prestashop/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">Todos los proveedores</option>
									<option value="http://localhost:8080/prestashop/index.php?id_supplier=1&amp;controller=supplier&amp;id_lang=1">AppleStore</option>
									<option value="http://localhost:8080/prestashop/index.php?id_supplier=2&amp;controller=supplier&amp;id_lang=1">Shure Online Store</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>