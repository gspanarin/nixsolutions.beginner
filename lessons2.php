<?php



/*
Функиця формирует столбец таблицы умножения для заданного числа
*/
function coll($numb){
	for ($i = 1; $i <= 10; $i++){
		$coll_str .= "$numb x $i = ".$numb*$i."<br>";
	}
	return collorNumb($coll_str);
}
/*
Функция разукрашивает цифры в заданные цвета
*/
function collorNumb($str){

	$numb = [1, 2, 3, 4];
	
	$color = [
		'<font color="red">1</font>',
		'<font color="green">2</font>',
		'<font color="yellow">3</font>',
		'<font color="blue">4</font>',
	];
	
	$str = str_replace ($numb, $color, $str);

	
	return $str;
}

?>

<table border="1">
<tr>
<?
for ($i = 1; $i <= 5; $i++){
	echo '<td>'.coll($i).'</td>';
}
?>
</tr>
<tr>
<?
for ($i = 6; $i <= 10; $i++){
	echo '<td>'.coll($i).'</td>';
}
?>
</tr>
</table>