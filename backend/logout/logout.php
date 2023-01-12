<script>
const cookies = document.cookie.split(";");

for (let i = 0; i < cookies.length; i++) {
	const cookie = cookies[i];
	const sCookie = cookie.split("=");
	if(sCookie[0]!="PHPSESSID"){
		var name = String(sCookie[0]);
		Cookies.remove(name.replace(/\s/g, ""));
	}
}
$('#formModul').sayt({'erase': true});
</script>
<?php
	require_once '../../vendor/autoload.php';
	session_start();
	  
	session_destroy();
	header("Location: ../../login");
 ?>