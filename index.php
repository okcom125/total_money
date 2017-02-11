<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>TOTAL MONEY</title>
<script type="text/javascript">
	function calc(){
		var t_10000 = document.form_calc.q_10000.value * 10000;
		document.form_calc.f_10000.value = t_10000;
		
		var t_5000 = document.form_calc.q_5000.value * 5000;
		document.form_calc.f_5000.value = t_5000;
		
		var t_2000 = document.form_calc.q_2000.value * 2000;
		document.form_calc.f_2000.value = t_2000;
		
		var t_1000 = document.form_calc.q_1000.value *1000;
		document.form_calc.f_1000.value = t_1000;
		
		var t_500 = document.form_calc.q_500.value * 500;
		document.form_calc.f_500.value = t_500;
		
		var t_100 = document.form_calc.q_100.value * 100;
		document.form_calc.f_100.value = t_100;
		
		var t_50 = document.form_calc.q_50.value * 50;
		document.form_calc.f_50.value = t_50;
		
		var t_10 = document.form_calc.q_10.value * 10;
		document.form_calc.f_10.value = t_10;
		
		var t_5 = document.form_calc.q_5.value * 5;
		document.form_calc.f_5.value = t_5;
		
		var t_1 =document.form_calc.q_1.value * 1;
		document.form_calc.f_1.value = t_1;
		
		var total = t_10000 + t_5000 + t_2000 + t_1000 + t_500 + t_100 + t_50 + t_10 + t_5 + t_1;
		document.form_calc.f_total.value = total;
	}
</script>	
</head>

<body>
<form name="form_calc">
 <table width="200" border="1">
  <tbody>
    <tr>
      <th scope="col">種類（Kind）</th>
      <th scope="col">数量（Quantity）</th>
      <th scope="col">小計（Subtotal）</th>
    </tr>
    
    <tr>
      <td>\10,000</td>
      <td><input type="text" name="q_10000" value="0" onChange="calc()"></td>
      <td>
      	<input type="text" name="f_10000" value="0">
      </td>
    </tr>
    <tr>
      <td>\5,000</td>
      <td><input type="text" name="q_5000" value="0" onChange="calc()"></td>
      <td><input type="text" name="f_5000" value="0"></td>
    </tr>
    <tr>
      <td>\2,000</td>
      <td><input type="text" name="q_2000" value="0" onChange="calc()"></td>
      <td><input type="text" name="f_2000" value="0"></td>
    </tr>
    <tr>
      <td>\1,000</td>
      <td><input type="text" name="q_1000" value="0" onChange="calc()"></td>
      <td><input type="text" name="f_1000" value="0"></td>
    </tr>
    <tr>
      <td>\500</td>
      <td><input type="text" name="q_500" value="0" onChange="calc()"></td>
      <td><input type="text" name="f_500" value="0"></td>
    </tr>
    <tr>
      <td>\100</td>
      <td><input type="text" name="q_100" value="0" onChange="calc()"></td>
      <td><input type="text" name="f_100" value="0"></td>
    </tr>
    <tr>
      <td>\50</td>
      <td><input type="text" name="q_50" value="0" onChange="calc()"></td>
      <td><input type="text" name="f_50" value="0"></td>
    </tr>
    <tr>
      <td>\10</td>
      <td><input type="text" name="q_10" value="0" onChange="calc()"></td>
      <td><input type="text" name="f_10" value="0"></td>
    </tr>
    <tr>
      <td>\5</td>
      <td><input type="text" name="q_5" value="0" onChange="calc()"></td>
      <td><input type="text" name="f_5" value="0"></td>
    </tr>
    <tr>
      <td>\1</td>
      <td><input type="text" name="q_1" value="0" onChange="calc()"></td>
      <td><input type="text" name="f_1" value="0"></td>
    </tr>
    <tr>
      <td colspan="2">TOTAL(合計)</td>
      <td><input type="text" name="f_total" value="0" onChange="calc()"></td>
    </tr>
  </tbody>
</table>
	</form>

	<p>今後の対応</p>
	<ul>
		<li>JSファイルの分離</li>
		<li>tableそれぞれの項目を配列で表示できないか</li>
		<li>小計・合計の数値にカンマを入れて表示する</li>
		<li>HTML５アプリとして登録できるようにする</li>
		<li>CSSにて調整</li>
		<li>紙幣・貨幣を画像で表示する</li>
		<li>リッチなデザインにまとめる</li>
	</ul>
	
</body>
</html>