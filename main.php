<body>

<?php

if (isset($_GET['page'])){
	$page = $_GET['page'];
}else{
	$page = 'home';
}

if (file_exists($menu[$page]['url'])){
	include($menu[$page]['url']);
}else{
	include('404.php');
}

?>

</body>