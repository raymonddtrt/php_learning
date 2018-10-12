<?

$inputYear=$_POST["inputYear"];

if($inputYear %4 != 0){
	echo "平年";}
else{
	if($inputYear %100 != 0){
		echo "閏年";}
	else{
		if($inputYear %400 != 0){
			echo "閏年";
		}
		else{
			echo "平年";
		}
	}
}


?>
