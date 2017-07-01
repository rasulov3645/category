<?php
error_reporting(E_ALL & ~E_NOTICE);

/**
* Подключение файлой.
**/
include 'config.php';
include_once 'functions.php';

$categories = get_cat();
$categories_tree = map_tree($categories);
$categories_menu = categories_to_string($categories_tree);


?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Каталог</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<a href="/catalog/">Главная</a>
		<div class="wrapper">
			<div class="sidebar">
        <ul class="category">
          <?php echo $categories_menu; ?>
        </ul>
      </div>
			<div class="content">

      </div>
		</div>
    <script src="js/jquery-1.9.0.min.js"></script>
  	<script src="js/jquery.accordion.js"></script>
  	<script src="js/jquery.cookie.js"></script>

    <script>
      $(document).ready(function(){
        $(".category").dcAccordion();
      });
    </script>
	</body>
</html>
