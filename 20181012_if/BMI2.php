

<?

$weight=$_POST["weight"];
$height=$_POST["height"];
$gender=$_POST["gender"];

$BMI=$weight/($height/100)**2;

echo "BMI: ",$BMI,"<br>";

if($gender == "male"){
	if($BMI>=25.5){
		echo "評語: 肥胖";}
	elseif($BMI>23.2){
		echo "評語: 過重";}
	elseif($BMI>17){
		echo "評語: 正常";}
	else{
		echo "評語: 過輕";}
	}
else{
	if($BMI>25.6){
		echo "評語: 肥胖";}
	elseif($BMI>22.8){
		echo "評語: 過重";}
	elseif($BMI>17){
		echo "評語: 正常";}
	else{
		echo "評語: 過輕";}
}

?>
