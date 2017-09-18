<?php
/**
* 
*/
class DigitalProduct extends Goods {
	function cost($price, $count) {
		echo 'Всего было продано ' . $count . ' едениц цифрового товара по цене ' . $price/2 . 
		     ' р. Выручка составила ' . $price/2*$count . ' р</br>';
	}
}