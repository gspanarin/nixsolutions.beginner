<?php 
$menu = [
	'home' => [
		'lable' => 'Домашняя страница',
		'description' => 'Домашняя страница проекта - место, откуда начинается знакомтсво с работой',
		'url' => 'home.php'],
	
	'lessons1' => [
		'lable' => 'урок1',
		'description' => 'Страница первого урока',
		'url' => 'lessons1.php'],
	
	'lessons2' => [
		'lable' => 'урок2',
		'description' => 'Страница второго урока',
		'url' => 'lessons2.php'],
		
	'lessons3' => [
		'lable' => 'урок3',
		'description' => 'Страница второго урока',
		'url' => 'lessons3.php'],
	
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