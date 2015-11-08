<?php /* Smarty version Smarty-3.1.14, created on 2015-11-08 15:30:44
         compiled from "C:\xampp\htdocs\prestashop\themes\leoshoe\modules\blockleoprodcarousel\blockleoprodcarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5575563f5c942e3559-22263811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0e631000a9761b9f9d90a6d16e47e633695b6a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\leoshoe\\modules\\blockleoprodcarousel\\blockleoprodcarousel.tpl',
      1 => 1446988476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5575563f5c942e3559-22263811',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product_tpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563f5c942fe805_28146520',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563f5c942fe805_28146520')) {function content_563f5c942fe805_28146520($_smarty_tpl) {?>

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