
<?
	
	$avg=($_POST["chineseScore"]+$_POST["englishScore"]+$_POST["mathScore"])/3;

	if ($avg >= 90){
		$rate= "優等";}
	if ($avg <90 && $avg>=70){
		$rate= "中等";}
	if ($avg <70 && $avg>=60){
		$rate= "普通";}
	if ($avg <60){
		$rate= "不及格";}

	echo "國文: ",$_POST["chineseScore"];
	echo "<br>";
	echo "英文: ",$_POST["englishScore"];
	echo "<br>";
	echo "數學: ",$_POST["mathScore"];
	echo "<br>";
	echo "平均: ",$avg;
	echo "<br>";
	echo "評等: ",$rate;
	#echo "評等: ",$_POST["rate"];
?>
