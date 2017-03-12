<?

include "php/config.php";
include "php/functions.php";
include "php/bd.php";

?>
<!--Подключить всё что нужно!-->
<!--css: views/css/..-->
<!--js: views/js/..-->
<head>
	<meta charset="utf-8">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<?php
$url = Redirection();

#подключаем соответствующие css файлы, прописанные в config.php
css($style, $url);
#подключаем все соответствующие js файлы, прописанные в config.php
js($script, $url);

?>