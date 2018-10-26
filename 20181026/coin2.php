<?

$money=$_POST["money"];
$fifty=$_POST["fifty"];
$ten=$_POST["ten"];
$five=$_POST["five"];


echo "應找零<br>";

if ($fifty == 501){
	$fiftyCoin=floor($money/50);}
else{
	$fiftyCoin=0;}
echo "50塊 x $fiftyCoin<br>";

if ($ten == 101){
	$tenCoin=floor(($money-$fiftyCoin*50)/10);}
else{
	$tenCoin=0;}
echo "10塊 x $tenCoin<br>";

if ($five == 51){
	$fiveCoin=floor(($money-$fiftyCoin*50-$tenCoin*10)/5);}
else{
	$fiveCoin=0;}
echo "5塊 x $fiveCoin<br>";

$oneCoin=$money-$fiftyCoin*50-$tenCoin*10-$fiveCoin*5;
echo "1塊 x $oneCoin";

?>
