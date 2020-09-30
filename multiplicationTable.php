<?php




function coll($numb){
	for ($i = 1; $i <= 10; $i++){
		$coll_str .= "$numb x $i = ".$numb*$i."<br>";
	}
	return $coll_str;
}

function collorNumb(){
	
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