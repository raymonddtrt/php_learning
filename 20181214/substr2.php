<?php

$inputData=$_POST[inputData];

for ($i=0;$i<strlen($inputData);$i++){

	for ($j=1;$j<strlen($inputData)-$i+1;$j++){
		echo substr($inputData,$i,$j);
		echo "<br>";
	}

}

?>
