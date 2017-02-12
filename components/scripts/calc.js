// JavaScript Document
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
