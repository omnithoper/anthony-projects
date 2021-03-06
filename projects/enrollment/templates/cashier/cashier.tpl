<html>
	<head>
		<link type="text/css" rel="stylesheet" href="/enrollment/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="/enrollment/css/mystyles.css" />
		<script type='text/javascript' src='/enrollment/js/cashier.js'></script>

	</head>

	<body>
		<nav id="searchStudent">
			<div id="container">
				<form>		
					<h1>Student Name: {$studentName}</h1>	
				<a href="/enrollment/templates/studentSubject/">(return)</a></br>	
					<table class="table table-bordered table-condensed table-striped"> 
						<tr>
							<th>Subject ID</th>
							<th>Subject</th>
							<th>Subject UNIT</th>
							<th style="width: 1px; white-space: nowrap;">&nbsp;</th>
						</tr>
						{foreach from=$allSubject item=subject}
							<tr>
								<td>{$subject.subject_id}</td>
								<td>{$subject.subject}</td>
								<td>{$subject.subject_unit}</td>
							</tr>
						{/foreach}
						<tr>
							<td colspan="2"><span class="pull-right">Total Units</span></td>
							<td colspan="2">
								<label for="Total">{$totalUnit}</label>			
							</td>
						</tr>
						<tr>
							<td colspan="2"><span class="pull-right">Price</span></td>
							<td colspan="2">
								<label for="Price">{$totalUnitPrice}</label>	
							</td>
						</tr>
						<tr>
							<td colspan="2"><span class="pull-right">Miscellaneous</span></td>
							<td colspan="2">
								<label for="Price">{$priceMisc}</label>	
							</td>
						</tr>
						<tr>
							<td colspan="2"><span class="pull-right">Total</span></td>
							<td colspan="2">
								<input id="amount" name="amount" type="hidden" value="{$totalPrice}"/>
								<label for="Price">{$totalPrice}</label>	
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
