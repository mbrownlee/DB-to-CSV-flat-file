<?php
	
	$init = mysqli_init();
	if (!$init) {
	  die("mysqli_init failed");
	}

    $dbCon = mysqli_real_connect($init,"130.211.117.218","mb_sandbox",'MB_sandbox_2113#','sandbox_mb', 3306, NULL);

    



  if (!$dbCon) {
		die ('Connect error (' . mysqli_connect_errno() . '): ' . mysqli_connect_error() . "\n");
	} 

?>