<?php
####################
#Для всех страниц
####################
function css($style) {
	echo "<style>";
	foreach ($style as $item) {
		require_once($item);
	}
	echo "</style>";
}

####################
#Функции для страниц
####################
?>