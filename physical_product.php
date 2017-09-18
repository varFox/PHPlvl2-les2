<?php
class PhysicalProduct extends Goods {
	function cost($price, $count) {
		echo 'Всего было продано ' . $count . ' едениц обычного товара по цене ' . $price . 
		     ' р. Выручка составила ' . $price*$count . ' р</br>';
	}
}