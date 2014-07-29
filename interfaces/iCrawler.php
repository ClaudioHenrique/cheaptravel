<?php
	interface iCrawler {
		public function getBestPrice($link);
		public function sendNotification($mail); 
		public function isCheap($price);
		public function readFile();
		public function writeFile($price);
	}
?>