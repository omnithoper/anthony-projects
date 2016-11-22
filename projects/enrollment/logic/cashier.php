<?php
	require  'main.php';
	require  '../../classes/student subject class.php';
	require '../../lib/smarty/Smarty.class.php'; 
	require  '../../classes/cashier.php';
	require  '../../classes/subject.php';

	$studentID = Request::getParam('studentID');
	$studentName = Request::getParam('studentName');

	$cashierObject =  new Cashier();
	$priceMisc = $cashierObject->getPriceMisc();	
	$totalPrice = $cashierObject->getTotalPrice($studentID);
	$totalUnitPrice = $cashierObject->getTotalUnitPrice($studentID);

	$studentSubjectObject = new studentSubjectMatch();
	$allSubject = $studentSubjectObject->getStudentSubjects($studentID);

	$subjectObject = new  Subject();
	$totalUnit = $subjectObject->getCurrentUnits($studentID);

	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/cashier/';
	$smarty->compile_dir = '../../templates/cashier/';

	$smarty->assign('allSubject', $allSubject);
	$smarty->assign('studentID', $studentID);
	$smarty->assign('totalUnit', $totalUnit);
	$smarty->assign('totalUnitPrice', $totalUnitPrice);
	$smarty->assign('studentName', $studentName);
	$smarty->assign('priceMisc', $priceMisc);
	$smarty->assign('totalPrice', $totalPrice);
	$smarty->display('cashier.tpl');
?>
