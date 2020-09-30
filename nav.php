<?php

$menu = [
	'home' => [
		'lable' => 'Домашняя страница',
		'description' => 'Домашняя страница проекта - место, откуда начинается знакомтсво с работой',
		'url' => 'home.php'],
	
	'lessons1' => [
		'lable' => 'Урок 1',
		'description' => 'Страница первого урока',
		'url' => 'lessons1.php'],
	
	'lessons2' => [
		'lable' => 'Урок 2',
		'description' => 'Страница второго урока',
		'url' => 'lessons2.php'],
		
	'multiplicationTable' => [
		'lable' => 'Таблица умножения',
		'description' => 'Страница второго урока',
		'url' => 'multiplicationTable.php'],
	
	'git' => [
		'lable' => 'Страница проекта на ГитХаб',
		'description' => '',
		'url' => 'https://github.com/gspanarin/nixsolutions.beginner'],
	
];

?>

<ul>

<?php 
foreach($menu as $item => $value){
	
	if (stripos($value['url'], 'http') > -1){
		echo "<li><a href='".$value['url']."' target='_blanck'>".$value['lable']."</a></li>";
	}else{
		echo "<li><a href='?page=".$item."'>".$value['lable']."</a></li>";
	}
	
	
}
?>

</ul>