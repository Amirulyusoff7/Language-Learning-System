<?php 
	session_start();
	session_unset();  
	session_destroy();

	print "<script language=\"javascript\" type=\"text/javascript\">
	<!--
	window.setTimeout('window.location=\"LoginStudent.php\"; ',0);
	//-->
	</script> ";
?>