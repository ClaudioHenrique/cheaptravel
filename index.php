<?php
	include('classes/Mundi.php');
	$mundi = new MundiCrawler();
	$menorPreco = $mundi->getBestPrice('http://www.mundi.com.br/flightmetasearch?airport1=PNZ&airport2=SAO&triptype=1&date1=03/12/2014&date2=08/12/2014&numadults=1&numbabies=0&numchildren=0&page=1&sortType=2&currency=BRL&cabintype=null');
?>