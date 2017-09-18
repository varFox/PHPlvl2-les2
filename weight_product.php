<?php
class WeightProduct extends Goods {
	function cost($price, $count) {
		echo 'Всего было продано ' . $count . ' килограмм весового товара по цене ' . $price . 
		     ' р за 1 кг. Выручка составила ' . $price*$count . ' р</br>';
	}
}