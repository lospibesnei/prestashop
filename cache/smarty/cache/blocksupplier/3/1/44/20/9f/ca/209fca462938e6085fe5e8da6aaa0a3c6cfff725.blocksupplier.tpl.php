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
  'unifunc' => 'content_563fcd62bf3833_36274303',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563fcd62bf3833_36274303')) {function content_563fcd62bf3833_36274303($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block"><a href="http://localhost/prestashop/index.php?controller=supplier" title="Proveedores">Proveedores</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="last_item">
			<a href="http://localhost/prestashop/index.php?id_supplier=3&amp;controller=supplier&amp;id_lang=1" title="Más sobre Excipio Sport">Excipio Sport</a>
		</li>
				</ul>
				<form action="/prestashop/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">Todos los proveedores</option>
									<option value="http://localhost/prestashop/index.php?id_supplier=3&amp;controller=supplier&amp;id_lang=1">Excipio Sport</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>