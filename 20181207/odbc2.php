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
	新增成功
 <body>

  <?
  	$deparment=$_POST[input1];
	$school=$_POST[input2];
	$link=odbc_connect("student","{username}","{password}");
	//$sql="SELECT * FROM T1"; 
	$sql="INSERT INTO T1(department, school) VALUES ('$deparment','$school')"; 
	$rs=odbc_exec($link,$sql);
	


  ?>
 </body>
</html>
