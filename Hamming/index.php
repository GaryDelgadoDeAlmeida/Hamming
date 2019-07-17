<?php

session_start();
include "view/head.html";

if (isset($_REQUEST['uc'])) {
	$uc = $_REQUEST['uc'];
}
else {
	$uc = "form";
}

switch ($uc) {
	case 'form':
		include "view/form.html";
		break;

	case 'result':
		include 'action/actionHamming.php';
		include 'view/result.php';
		break;
	
	default:
		# code...
		break;
}

include "view/footer.html";