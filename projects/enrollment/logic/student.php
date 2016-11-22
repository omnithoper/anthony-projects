<?php 
	require 'main.php';
	require '../../classes/student.php';
	require '../../lib/smarty/Smarty.class.php'; 
	
	$studentObject = new Student();
	$students = $studentObject->getViewStudents(); 
	$students = $students->fetch_all(MYSQLI_ASSOC);

	$smarty = new Smarty();
	$smarty->template_dir = '../../templates/student/';
	$smarty->compile_dir = '../../templates/student/';

	$smarty->assign('student', $students);
	$smarty->display('view.tpl');
?>