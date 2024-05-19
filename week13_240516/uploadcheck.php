<?php
$src='img/';
$MyFile=$_FILES['MyFile'];

echo "<img src=".$src.$MyFile['name'].">";
?>