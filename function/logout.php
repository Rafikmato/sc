<?php 
session_start();
session_destroy();
?>

<script type="text/javascript">
	alert('Logout Berhasil');
	window.location = "../index.php";
</script>