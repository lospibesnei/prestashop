<?php /*%%SmartyHeaderCode:20865563ac15568d214-92193691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '209fca462938e6085fe5e8da6aaa0a3c6cfff725' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\leoshoe\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1446822914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20865563ac15568d214-92193691',
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563ccd313ed899_44830958',
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
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563ccd313ed899_44830958')) {function content_563ccd313ed899_44830958($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block"><a href="http://localhost/prestashop/index.php?controller=supplier" title="Proveedores">Proveedores</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item">
			<a href="http://localhost/prestashop/index.php?id_supplier=1&amp;controller=supplier&amp;id_lang=1" title="Más sobre AppleStore">AppleStore</a>
		</li>
							<li class="item">
			<a href="http://localhost/prestashop/index.php?id_supplier=3&amp;controller=supplier&amp;id_lang=1" title="Más sobre Excipio Sport">Excipio Sport</a>
		</li>
							<li class="last_item">
			<a href="http://localhost/prestashop/index.php?id_supplier=2&amp;controller=supplier&amp;id_lang=1" title="Más sobre Shure Online Store">Shure Online Store</a>
		</li>
				</ul>
				<form action="/prestashop/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">Todos los proveedores</option>
									<option value="http://localhost/prestashop/index.php?id_supplier=1&amp;controller=supplier&amp;id_lang=1">AppleStore</option>
									<option value="http://localhost/prestashop/index.php?id_supplier=3&amp;controller=supplier&amp;id_lang=1">Excipio Sport</option>
									<option value="http://localhost/prestashop/index.php?id_supplier=2&amp;controller=supplier&amp;id_lang=1">Shure Online Store</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>