<?php /*%%SmartyHeaderCode:1705563f5c92d04d67-28497186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06c14e107c742ec184d39392dd34919ad541a0c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\leoshoe\\modules\\blockcategories\\blockcategories.tpl',
      1 => 1446988476,
      2 => 'file',
    ),
    '5e83ce8b7794515dc3b0439f68ba1adb4d79a84c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\leoshoe\\modules\\blockcategories\\category-tree-branch.tpl',
      1 => 1446988476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1705563f5c92d04d67-28497186',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563fa13c988459_41287474',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563fa13c988459_41287474')) {function content_563fa13c988459_41287474($_smarty_tpl) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<p class="title_block">Categorías</p>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://localhost:8080/prestashop/index.php?id_category=3&amp;controller=category&amp;id_lang=1" class="selected"		title="Es hora de que el mejor jugador de la m&uacute;sica, al escenario para hacer un bis. Con el nuevo iPod, el mundo es tu escenario.">iPods</a>
	</li>

												
<li >
	<a href="http://localhost:8080/prestashop/index.php?id_category=4&amp;controller=category&amp;id_lang=1" 		title="Todos los accesorios de moda para tu iPod">Accesorios</a>
	</li>

												
<li class="last">
	<a href="http://localhost:8080/prestashop/index.php?id_category=5&amp;controller=category&amp;id_lang=1" 		title="El &uacute;ltimo procesador Intel, un disco duro m&aacute;s grande, con profusi&oacute;n de memoria y otras novedades. Todo en s&oacute;lo 2,59 cm libres de cualquier obstrucci&oacute;n. Las nuevas port&aacute;tiles Mac cumplir rendimiento, potencia y conectividad de una computadora de escritorio. Sin la parte del escritorio.">Port&aacute;tiles</a>
	</li>

							</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>