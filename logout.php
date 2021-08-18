<?php
	session_start();
	session_unset();
	echo "<script>alert('Logout Successfull');window.location='index.php';</script>";
?>