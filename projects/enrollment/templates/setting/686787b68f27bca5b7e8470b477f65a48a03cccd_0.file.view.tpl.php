<?php
/* Smarty version 3.1.30, created on 2016-11-19 15:49:15
  from "C:\Users\omnithopter\Documents\projects\enrollment\templates\setting\view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5830747b60ec72_03706321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '686787b68f27bca5b7e8470b477f65a48a03cccd' => 
    array (
      0 => 'C:\\Users\\omnithopter\\Documents\\projects\\enrollment\\templates\\setting\\view.tpl',
      1 => 1479568378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5830747b60ec72_03706321 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>	
		<link type="text/css" rel="stylesheet" href="/enrollment/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/enrollment/css/mystyles.css" />
	</head>
	<body>
		<nav id ="searchStudent">
			<div id="container">
			<form>
				<a style="float:left" href="/enrollment">(Return)</a>
				<a class="pull-right btn btn-success"  type="submit"href="subjectAdd.php"><i class="icon icon-plus"></i></a>
			</form>
				<table class="table table-bordered table-condensed table-striped">
					<tr>
						<th>Number Of Allowed Units</th>
						<th>Price/Unit</th>
						<th>Price Of Misc</th>
					</tr>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'details');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['details']->value) {
?>
						<tr>
						<td align="center"><?php echo $_smarty_tpl->tpl_vars['details']->value['number_of_allowed_units'];?>
</td>
						<td align="center"><?php echo $_smarty_tpl->tpl_vars['details']->value['price_per_unit'];?>
</td>
						<td	align="center"><?php echo $_smarty_tpl->tpl_vars['details']->value['price_of_misc'];?>
</td>
						</tr>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</table>
			</div>
		</nav>	
	</body>
<html>

<?php }
}