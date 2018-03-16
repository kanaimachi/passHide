<?php
	$passFile="./hidden/pass.json";
	$json = file_get_contents($passFile);
	$passObj=json_decode($json);
	echo $passObj->basic[0]->id.":".$passObj->basic[0]->pass."<br>";
	var_dump($passObj);

	echo "<br>";

	$dataFile="./data/data.json";
	$json = file_get_contents($dataFile);
	$dataObj=json_decode($json);
	var_dump($dataObj);
?>