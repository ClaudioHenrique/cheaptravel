<?php
	
	include_once('./interfaces/iCrawler.php');
	include_once('./lib/simple_html_dom.php');

	class MundiCrawler implements iCrawler {
		
		private $melhorPreco;

		//A Magia tá aqui :D
		public function getBestPrice($link){

			$opts = array(
				'http'=>array(
				'method'=>"GET",
				'header'=>"User-Agent: User-Agent:Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.52 Safari/536.5\r\n"
				)
			);

			$context = stream_context_create($opts);

			$html = file_get_html($link,false,$context);
			$bestPrice = $html->find('.lowest-price');
			foreach($bestPrice as $price){
				$this->menorPreco = $price;
				break;
			}

			$this->isCheap($this->menorPreco);
		}

		//Envia uma notificação se o preço da busca atual for inferior do atual na base de dados
		public function sendNotification($mail){
			
		}

		//Método responsavel por verificar se o preço informado é menor que o atual na base de dados
		//p.s: No primeiro momento da execução obviamente isso vai ser true 
		public function isCheap($price){
			$file = fopen("precoAtual.txt","w");
		}

		public function saveData($price){
			
		}
	}
?>