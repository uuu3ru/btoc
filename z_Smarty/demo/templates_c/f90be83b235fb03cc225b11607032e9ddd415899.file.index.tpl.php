<?php /* Smarty version Smarty-3.1.8, created on 2012-05-08 22:07:25
         compiled from "templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19074fa912a6743245-81139591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f90be83b235fb03cc225b11607032e9ddd415899' => 
    array (
      0 => 'templates\\index.tpl',
      1 => 1336500441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19074fa912a6743245-81139591',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa912a6905bc8_25546299',
  'variables' => 
  array (
    'PageNavigation' => 1,
    'PageContent' => 1,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa912a6905bc8_25546299')) {function content_4fa912a6905bc8_25546299($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Metamorphosis Design Free Css Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="content">
	<div id="back_all">
<!-- header begins -->
<div id="header"> 
	<div id="logo">
		<h1><a href="/">fullmoon</a></h1>
		<h2><a href="/" id="metamorph">Design by Metamorphosis Design</a></h2>
	</div>
	 <div id="menu">
		<ul>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['name'] = 'sec1';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['PageNavigation']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total']);
?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['PageNavigation']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']][1];?>
"  title=""><?php echo $_smarty_tpl->tpl_vars['PageNavigation']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']][0];?>
</a></li>
			<?php endfor; endif; ?>
		</ul>
	</div>
</div>
<!-- header ends -->
<!-- content begins -->
 <div id="main">
	<div id="left">
		<h3>Lorem ipsum dolor</h3>
			<p>Vivamus sagittis bibendum erat. Curabitur lorem ipsum dolore malesuada. <a href="#">More...</a></p>
			<br />
			<h3>Nunc pellentesque</h3>
			<ul>
					<li><a href="#">Vivamus id arcu</a></li>
					<li><a href="#">Duis congue ultricies</a></li>
					<li><a href="#">Purus in mollis purus</a></li>
					<li><a href="#">Orci nonummy fringilla</a></li>
					<li><a href="#">Pellentesque at lorem</a></li>
					<li><a href="#">Enim vivamus convallis</a></li>
					<li><a href="#">Ipsum vitae felis</a></li>					
				</ul>			 
			<h3>Company News</h3>
			<ul>
			  <li class="news">
				  <h4>June 2, 2008</h4>
				  <p><a href="#"> Duis tempor posuere diam. Suspendisse vel tellus quis nunc malesuada porta. &#8230;</a></p></li>
				   <li class="news">
				  <h4>June 12, 2008</h4>
				  <p><a href="#">Tempus Duis tempor posuere diam. Suspendisse vel tellus quis nunc malesuada porta. &#8230;</a></p></li>
				  <li class="news">
				  <h4>June 23, 2008</h4>
				  <p><a href="#">Tempus in, lacus. Duis tempor uspendisse vel tellus quis nunc malesuada porta. &#8230;</a></p></li>				  
				  </ul>			
	</div>
	<div id="right">
		<?php echo $_smarty_tpl->tpl_vars['PageContent']->value;?>

	</div>
    
<!--content ends -->
	</div>

	</div>
</div>
<!--footer begins -->
<div id="footer">
<p>Copyright &copy; 2008. Design by <a href="http://www.metamorphozis.com/" title="Free Web Page Templates">Free Web Page Templates</a></p>
<p><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p>
	</div>
	<!-- footer ends-->
</body>
</html>
<?php }} ?>