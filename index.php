<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>TOTAL MONEY</title>
<link rel="stylesheet" type="text/css" href="./components/style.css">
<script type="text/javascript" src="./builds/development/js/script.js"></script>	
</head>

<body>
<form name="form_calc">
 <table class="money">
  <tbody>
    <tr>
      <th scope="col">種類（Kind）</th>
      <th scope="col">数量（Quantity）</th>
      <th scope="col">小計（Subtotal）</th>
    </tr>
    
    <tr>
      <td>\10,000</td>
      <td><input type="text" name="q_10000" value="" onChange="calc()"></td>
      <td>
      	<input type="text" name="f_10000" value="0">
      </td>
    </tr>
    <tr>
      <td>\5,000</td>
      <td><input type="text" name="q_5000" value="" onChange="calc()"></td>
      <td><input type="text" name="f_5000" value="0"></td>
    </tr>
    <tr>
      <td>\2,000</td>
      <td><input type="text" name="q_2000" value="" onChange="calc()"></td>
      <td><input type="text" name="f_2000" value="0"></td>
    </tr>
    <tr>
      <td>\1,000</td>
      <td><input type="text" name="q_1000" value="" onChange="calc()"></td>
      <td><input type="text" name="f_1000" value="0"></td>
    </tr>
    <tr>
      <td>\500</td>
      <td><input type="text" name="q_500" value="" onChange="calc()"></td>
      <td><input type="text" name="f_500" value="0"></td>
    </tr>
    <tr>
      <td>\100</td>
      <td><input type="text" name="q_100" value="" onChange="calc()"></td>
      <td><input type="text" name="f_100" value="0"></td>
    </tr>
    <tr>
      <td>\50</td>
      <td><input type="text" name="q_50" value="" onChange="calc()"></td>
      <td><input type="text" name="f_50" value="0"></td>
    </tr>
    <tr>
      <td>\10</td>
      <td><input type="text" name="q_10" value="" onChange="calc()"></td>
      <td><input type="text" name="f_10" value="0"></td>
    </tr>
    <tr>
      <td>\5</td>
      <td><input type="text" name="q_5" value="" onChange="calc()"></td>
      <td><input type="text" name="f_5" value="0"></td>
    </tr>
    <tr>
      <td>\1</td>
      <td><input type="text" name="q_1" value="" onChange="calc()"></td>
      <td><input type="text" name="f_1" value="0"></td>
    </tr>
    <tr>
      <td colspan="2">TOTAL(合計)</td>
      <td><input type="text" name="f_total" value="0" onChange="calc()"></td>
    </tr>
  </tbody>
</table>

<input type="button" value="RESET" onClick="reset()">

	</form>

	<p>今後の対応</p>
	<ul>
		<li>JSファイルの分離</li>
		<li>tableそれぞれの項目を配列で表示できないか</li>
		<li>小計・合計の数値にカンマを入れて表示する</li>
		<li>HTML５アプリとして登録できるようにする</li>
		<li>CSSにて調整</li>
		<li>SCSSにて調整(タスクランナー導入)</li>
		<li>紙幣・貨幣を画像で表示する</li>
		<li>リッチなデザインにまとめる</li>
	</ul>
	
</body>
</html>