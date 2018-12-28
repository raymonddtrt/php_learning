<?

$code=$_POST['code'];
echo $code;
echo "<br>";

$Acount=1;
$Bcount=1;
$nmax=0;
if (is_numeric($code)){
	for ($l=0;$l<strlen($code);$l++){
		
		for ($i=1;$i<strlen($code)-$l+1;$i++){
			
			if ($Acount>1){
				if (in_array((string)substr($code,$l,$i),$Acode)){
					$Bcode[$Bcount]=(string)substr($code,$l,$i);
					$Bcount++;
				}
			}

			$Acode[$Acount]=(string)substr($code,$l,$i);
			

			$Acount++;


			
		}
		
		
		for ($j=0;$j<count($Bcode);$j++){
			
			if (strlen($Bcode[$j])>$nmax){
				$nmax=strlen($Bcode[$j]);
				$ans=$Bcode[$j];
			}
			
			
		
		}
		if (strlen((int)$ans)<2){$ans="不是密文";}
	}
}
else {$ans="不是密文";}

echo "答案";
echo $ans;


?>
