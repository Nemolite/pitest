<?php
/*
Задание
-------------
Известны среднемесячные объемы 
продаж товаров магазином в год. 
Определить месяца в которые 
магазин потерпел максимальных 
убытков и имел максимальную прибыль.
*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Задание</title>
</head>
<style>
.col {
	color:red;
}
</style>
<body>

<form action="index.php" method="POST">
<span>Январь</span>
<input style="display: block;margin-top: 10px" min="0" type="number" value="" name="y1">

<span>Февраль</span>
<input style="display: block;margin-top: 10px" min="0" type="number" value="" name="y2">

<span>Март</span>
<input style="display: block;margin-top: 10px" min="0" type="number" value="" name="y3">

<span>Апрель</span>
<input style="display: block;margin-top: 10px" min="0" type="number" value="" name="y4">

<span>Май</span>
<input style="display: block;margin-top: 10px" min="0" type="number" value="" name="y5">

<span>Июнь</span>
<input style="display: block;margin-top: 10px" min="0" type="number" value="" name="y6">

<span>Июль</span>
<input style="display: block;margin-top: 10px" min="0" type="number" value="" name="y7">

<span>Август</span>
<input style="display: block;margin-top: 10px" min="0" type="number" value="" name="y8">

<span>Сентябрь</span>
<input style="display: block;margin-top: 10px" min="0" type="number" value="" name="y9">

<span>Октябрь</span>
<input style="display: block;margin-top: 10px" min="0" type="number" value="" name="y10">

<span>Ноябрь</span>
<input style="display: block;margin-top: 10px" min="0" type="number" value="" name="y11">

<span>Декабрь</span>
<input style="display: block;margin-top: 10px" min="0" type="number" value="" name="y12">


<input style="display: block;margin-top: 10px" type="submit" value="Найти">
</form>

<?php
$arr_mes = array("Январь",
                 "Февраль",
				 "Март",
				 "Апрель",
				 "Май",
				 "Июнь",
				 "Июль",
				 "Август",
				 "Сентябрь",
				 "Октябрь",
				 "Ноябрь",
				 "Декабрь");

$full_arr = array_combine($arr_mes, $_POST);

?>
<h2>Максимальный убыток и максимальная прибыль по месяцам:</h2>
<h3>
<?php

foreach ($full_arr as $key => $value) {

	if ($value == min($full_arr)) {
       echo "{$key} => {$value}";
	   echo "<br />";
	}
}
?>
</h3>
<h2>Максимальная прибыль по месяцам:</h2>
<h3>
<?php
foreach ($full_arr as $key => $value) {

	if ($value == max($full_arr)) {
       echo "{$key} => {$value}";
	   echo "<br />";
	   
	}
}
?>
</h3>
<script>
   var y = document.getElementsByTagName("h3")[0];
   var y1 = document.getElementsByTagName("h3")[1];
   console.log(y)
   y.setAttribute("class", "col");
   y1.setAttribute("class", "col");
</script>

</body>
</html>





