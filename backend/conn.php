<?php
	$whitelist = array(
		'127.0.0.1',
		'::1'
	);

	if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
		$con = mysqli_connect('localhost', 'root', '','admin_guru');
	}else{
		$con = mysqli_connect('localhost', 'u1605458_adminGuru', 'adminguru','u1605458_admin_guru');
	}
?>