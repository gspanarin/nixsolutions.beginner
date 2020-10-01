<form action="?page=lessons3" method="POST">
<input type="text" name="revers">
<input type="submit" value="Отправить">
</form>


<?php
if (isset($_POST['revers'])){
	print 'Исходная строка: '.$_POST['revers'].'<br>';
	print 'Реверсивная строка: '.strrev_uft8($_POST['revers']).'<br>';
	
}

function strrev_uft8($str){
	preg_match_all('/./us', $str, $ar);
    return implode(array_reverse($ar[0]));
}
?>