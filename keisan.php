<!DOCTYPE HTML>
<html>

<head>
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

<form action="#" name="form1">

<table>
	
<tr>
<th>商品名</th>
<th>単価</th>
<th>数量</th>
<th>金額</th>
</tr>

<tr>
<td>商品サンプル1</td>
<td align="right">500円</td>
<td>
<select name="goods1" onChange="keisan()">
<option>0</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</td>
<td><input type="text" name="field1" size="8" value="0"> 円</td>
</tr>

<tr>
<td>商品サンプル2</td>
<td align="right">1,000円</td>
<td>
<select name="goods2" onChange="keisan()">
<option>0</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</td>
<td><input type="text" name="field2" size="8" value="0"> 円</td>
</tr>

<tr>
<td>商品サンプル3</td>
<td align="right">3,000円</td>
<td><select name="goods3" onChange="keisan()">
<option>0</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select></td>
<td><input type="text" name="field3" size="8" value="0"> 円</td>
</tr>

<tr>
<td align="right" colspan="3"><strong>合計</strong></td>
<td><input type="text" name="field_total" size="8" value="0"> 円</td>
</tr>

</table>

</form>

    <script>
  function keisan(){
	// 商品1
	var price1 = document.form1.goods1.selectedIndex * 500; // 単価を設定
	document.form1.field1.value = price1; // 小計を表示

	// 商品2
	var price2 = document.form1.goods2.selectedIndex * 1000; // 単価を設定
	document.form1.field2.value = price2; // 小計を表示

	// 商品3
	var price3 = document.form1.goods3.selectedIndex * 3000; // 単価を設定
	document.form1.field3.value = price3; // 小計を表示

	// 合計を計算
	var total = price1 + price2 + price3;

	document.form1.field_total.value = total; // 合計を表示

};

    </script>
</body>

</html>
