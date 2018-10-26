<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>
  <table border=1 align="center">
	<?
		for ($i=1;$i<=9;$i++){
			echo "<tr>";
			for ($j=1;$j<=9;$j++){
				echo "<td>",$i,"*",$j,"=",$i*$j,"</td>";
			}
			echo "</tr>";
		}
		
	?>
  
  </table>

 </body>
</html>
