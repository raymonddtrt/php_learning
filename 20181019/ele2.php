<?
$ele=$_POST[eleInput];


switch($ele){
	case ($ele>=301):
		$temp=($ele-300)*4.1;
		$ele=300;
	case ($ele>=101):
		$temp=$temp+($ele-100)*3.1;
		$ele=100;
	case ($ele<100):
		$temp=$temp+$ele*2.4;
}

echo $temp;

?>
