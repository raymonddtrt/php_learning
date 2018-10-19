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

 <label>test1</label>
 <br>
	<?
		$course[10]="PHP";
		$course[30]="JAVA";
		$course[15]="MySQL";
		reset($course);
		while(list($key,$value)=each($course)){
			echo "索引=$key,值=$value<br>";
		}
	?>
<br><br>

<label>test2</label>
<br>
	<?
		$arr=array(4,2,3,9);
		echo "目前值是",current($arr),"<br>";
		next($arr);
		list($key,$value)=each($arr);
		echo "目前值是",current($arr),"<br>";
		list($key,$value)=each($arr);
		echo "目前值是",current($arr),"<br>";
		reset($arr);
		list($key,$value)=each($arr);
		echo "目前值是",current($arr),"<br>";
		prev($arr);
		//list($key,$value)=each($arr);
		echo "目前值是",current($arr),"<br>";
		end($arr);
		//list($key,$value)=each($arr);
		echo "目前值是",current($arr),"<br>";
		
		list($key,$value)=each($arr);
		echo "目前值是",current($arr),"<br>";
	?>
<label>test2</label>
<br>


 </body>
</html>
