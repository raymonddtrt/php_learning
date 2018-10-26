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
	<form method="POST" action="coin2.php">
		<table>
		<tr>
			<td>找零金額</td>
			<td>
				<input type="text" name="money">
			</td>
		</tr>
		<tr>
			<td>50元銅板</td>
			<td>
				<label>是否需要</label>
				<input type="radio" name="fifty" value="501"checked>是(預設)
				<input type="radio" name="fifty" value="500">否
			</td>
		</tr>
		<tr>
			<td>10元銅板</td>
			<td>
				<label>是否需要</label>
				<input type="radio" name="ten" value="101"checked>是(預設)
				<input type="radio" name="ten" value="100">否
			</td>
		</tr>
		<tr>
			<td>5元銅板</td>
			<td>
				<label>是否需要</label>
				<input type="radio" name="five" value="51" checked>是(預設)
				<input type="radio" name="five" value="50">否
			</td>
		</tr>
		<tr>
			<td>1元銅板</td>
			<td>
				<input type="radio" name="one" checked>視需要而定
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit">
			</td>
		</tr>
		</table>
	
	</form>
 </body>
</html>
