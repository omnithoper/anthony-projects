<?php
/* Smarty version 3.1.30, created on 2016-11-21 19:16:14
  from "C:\Users\omnithopter\Documents\projects\enrollment\templates\cashier\cashier.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583347fed126a2_42092286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b940a284a64ea53a0266bd6ec598f426853c8d8' => 
    array (
      0 => 'C:\\Users\\omnithopter\\Documents\\projects\\enrollment\\templates\\cashier\\cashier.tpl',
      1 => 1479755733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583347fed126a2_42092286 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="/enrollment/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/enrollment/css/mystyles.css" />
		<?php echo '<script'; ?>
 type='text/javascript' src='/enrollment/js/cashier.js'><?php echo '</script'; ?>
>

	</head>

	<body>
		<nav id="searchStudent">
			<div id="container">
				<form>		
					<h1>Student Name: <?php echo $_smarty_tpl->tpl_vars['studentName']->value;?>
</h1>	
				<a href="/enrollment/templates/studentSubject/">(return)</a></br>	
					<table class="table table-bordered table-condensed table-striped"> 
						<tr>
							<th>Subject ID</th>
							<th>Subject</th>
							<th>Subject UNIT</th>
							<th style="width: 1px; white-space: nowrap;">&nbsp;</th>
						</tr>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allSubject']->value, 'subject');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subject']->value) {
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['subject']->value['subject_id'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['subject']->value['subject'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['subject']->value['subject_unit'];?>
</td>
							</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						<tr>
							<td colspan="2"><span class="pull-right">Total Units</span></td>
							<td colspan="2">
								<label for="Total"><?php echo $_smarty_tpl->tpl_vars['totalUnit']->value;?>
</label>			
							</td>
						</tr>
						<tr>
							<td colspan="2"><span class="pull-right">Price</span></td>
							<td colspan="2">
								<label for="Price"><?php echo $_smarty_tpl->tpl_vars['totalUnitPrice']->value;?>
</label>	
							</td>
						</tr>
						<tr>
							<td colspan="2"><span class="pull-right">Miscellaneous</span></td>
							<td colspan="2">
								<label for="Price"><?php echo $_smarty_tpl->tpl_vars['priceMisc']->value;?>
</label>	
							</td>
						</tr>
						<tr>
							<td colspan="2"><span class="pull-right">Total</span></td>
							<td colspan="2">
								<input id="amount" name="amount" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['totalPrice']->value;?>
"/>
								<label for="Price"><?php echo $_smarty_tpl->tpl_vars['totalPrice']->value;?>
</label>	
							</td>
						</tr>
						<tr>
							<td colspan="2"><span class="pull-right">Cash</span></td>
							<td colspan="2">
								<input id="cash" name="cash" type="text" onblur="computeChange()" />
							</td>
						</tr>
						<tr id="change_display">
							<td colspan="2"><span class="pull-right">Change</span></td>
							<td colspan="2">
								<input id="change" name="change" type="text"/>
							</td>
						</tr>
					</table>									
				</form>
			</div>		
		</nav>
	</body>
</html>	
<?php }
}
