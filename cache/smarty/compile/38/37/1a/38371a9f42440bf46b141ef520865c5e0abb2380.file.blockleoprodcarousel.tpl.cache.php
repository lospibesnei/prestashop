<?php /* Smarty version Smarty-3.1.14, created on 2015-11-06 12:54:28
         compiled from "C:\wamp\www\prestashop\themes\leoshoe\modules\blockleoprodcarousel\blockleoprodcarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19122563ac1578fb851-64818292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38371a9f42440bf46b141ef520865c5e0abb2380' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\leoshoe\\modules\\blockleoprodcarousel\\blockleoprodcarousel.tpl',
      1 => 1446822914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19122563ac1578fb851-64818292',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563ac157966f17_25694427',
  'variables' => 
  array (
    'products' => 0,
    'product_tpl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563ac157966f17_25694427')) {function content_563ac157966f17_25694427($_smarty_tpl) {?>

<!-- MODULE Block specials -->
<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)){?>
<div id="leoprodcarousel" class="block products_block exclusive blockleoprodcarousel">
	<h3 class="title_block"><?php echo smartyTranslate(array('s'=>'Latest Products','mod'=>'blockleoprodcarousel'),$_smarty_tpl);?>
</h3>
	<div class="block_content">	
			<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable("leoproductcarousel", null, 0);?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['product_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
 
	</div>
</div>
<?php }?>
<!-- /MODULE Block specials -->
<script>
$(document).ready(function() {
    $('.blockleoprodcarousel').each(function(){
        $(this).carousel({
            pause: true,
            interval: false
        });
    });
	 
});
</script>
 <?php }} ?>