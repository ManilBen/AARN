<?php
	$wACCX =$_GET[wACCX];
	$wACCY =$_GET[wACCY];
	$wACCZ =$_GET[wACCZ];
	$wBVP =$_GET[wBVP];
	$wEDA =$_GET[wEDA];
	$wTEMP =$_GET[wTEMP];
echo shell_exec("python /srv/http/AARN/Predect.py ".$wACCX." ".$wACCY." ".$wACCZ." ".$wBVP." ".$wEDA." ".$wTEMP);
?>

