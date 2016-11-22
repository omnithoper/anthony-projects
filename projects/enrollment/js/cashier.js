var computeChange = function() {
	var cash = document.getElementById('cash').value;
	var amount = document.getElementById('amount').value;
	var change = cash - amount;
	document.getElementById('change').value = change;
	document.getElementById('change_display').classList.remove('hide');
};

window.onload = function(){
	document.getElementById('change_display').classList.add('hide');
	console.log(document.getElementById('change_display'));
};