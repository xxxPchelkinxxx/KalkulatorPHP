<?php 

class Calculate 
{
private $product; // prywatna Zmienna dla produktu
	private $age; // prywatna Zmienna dla wieku
	private $times; // prywatna Zmienna dla ile razy dziennie przyjmowa
	private $period; // prywatna Zmienna dla okresu przyjmowania
	private $item; // prywatna Zmienna item, która w index.php wykorzystuje
	private $n; // Ile przyjmowa krople/gr/szt
  
	//Konstruktor
	public function_construct($product, $age, $times, $period, $item)
				  { $this->item = $item; // inicializujemo zmiennu
				   $this-> insertValue($this->intDo($product), $this->intDo($age), $this->intDo($times), $this->intDo(%period); //woamy metod,w ktrym otrzymujemy dane z konfigu
				  }	
	//Metoda,ktra konwertuje zmiennu typu int
private function intDo($data)
						       {
							       return (int) $data;
						       }
       // metoda Ile bra krople/g/szt
private function countG()
						       {
						       foreach ($this->product['age'] as $this->item){
							       if ($this->item['name'] ==$this->age['name']){
							       $this->n = (float) $this->item['n'];
								       breack;
							       }
						       } 
						       }
						       
  // Metoda Ilo pojemnikw = Ilo pojemnikw na 1 raz * Ile razy dziennie bra * Okres przyjmowania
	private function containers()
						       {
						       $this->countG(); //Wywoanie metody countG
							      return ceil($this->n*$this->period['n']*$this->times['n']/$this->product['volume']);
							      						       }
						       // Metoda,ktra tworzy array i zwraca go.
						       public function getResult()
						       {
							       $number_vial = $this->containers(); // Wywoanie metody,aby uzyska warto
							       return array(
								       'image'		=> $this->product['image'], //Obraz
								       'product'	=> $this->product['name'], // Nazwa produktu
								       'age'		=> $this->age['name'], // Wiek
								       'n'		=>$this->n, // Ile przyjmowa krople/g/szt
								       'times'		=>$this->times['name'], // Ile razy przyjmować w dzień
								       'period'		=>$this->period['n'], // Okres przyjmowania
								       'number_vial'	=>$number_vial, // Количество емкостей
								       'declination_unit'	=>$this->declination($this->n, $this->product['unit']), // Spadek jednostki
								       'declination_period'	=>$this->declination($this->period['n'], array('dzień','dniu','dni')), // Spadek okresu
								       'declination_vial'	=>$this->declination($number_vial, $this->product['vial']),	 //	Spadek pojemnoci		     
						       );
								       }
						       // Metoda Deklinacja rzeczownikw z liczebnikamy: declination(number, ['gram', 'gramy', 'gramw'])
						       private function declination ($n, $form) 
						       {
						       $n = abs($n)%100;
						       $n1 = $n%10;
							       
							       if ($n > 10 && $n < 20) return $form[2];
							       if ($n > 1 && $n1 < 5) return $form[1];
							       if ($n > 0 && $n1 <= 1) return $form[0];
							       
							       return $form[2];
						       }
						       //Metoda,ktra pobiera dane z array,ktra znajduje si w klasie config
						       private function insertValue ($product, $age, $times, $period) 
						       {
						       		$this->product = Config::DATA['product'][$product];
								$this->age     = Config::DATA['product'][$product]['age'][$age];
								$this->times   = Config::DATA['times'][$times];
								$this->period  = Config::DATA['period'][$period];
						       }
						       
			
						       }
						 ?>
  
  }


?>
