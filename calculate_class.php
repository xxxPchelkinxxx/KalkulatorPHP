<?php 

class Calculate 
{
private $product; // приватная Переменная для продкта
	private $age; // приватная Переменная для возраста
	private $times; // приватная Переменная для сколько раз в день принимать
	private $period; // приватная Переменная для период приема
	private $item; // приватная Переменная, которая в index.php везде используется
	private $n; // Сколько принимать капель/грамм/штук
  
	//Конструктор, сюда передаем данные пользователя
	public function_construct($product, $age, $times, $period, $item)
				  { $this->item = $item; // Инициализируем переменную item
				   $this-> insertValue($this->intDo($product), $this->intDo($age), $this->intDo($times), $this->intDo(%period); //вызываем метод, в котором получаем данные из конфига
				  }	
	//Метод, который преобразует переменную в тип int
private function intDo($data)
						       {
							       return (int) $data;
						       }
       // метод Сколько принимать капель/грам/шт
private function countG()
						       {
						       foreach ($this->product['age'] as $this->item){
							       if ($this->item['name'] ==$this->age['name']){
							       $this->n = (float) $this->item['n'];
								       breack;
							       }
						       } 
						       }
						       
  // Метод количество емкостей
	private function containers()
						       {
						       $this->countG(); //Вызов метода countG
							      return ceil($this->n*$this->period['n']*$this->times['n']/$this->product['volume']);
							      						       }
						       // Метод который формирует массив и возвращает его
						       public function getResult()
						       {
							       $number_vial = $this->containers(); // Вызов метода, чтоб получить значение
							       return array(
								       'image'		=> $this->product['image'], //Изображение
								       'product'	=> $this->product['name'], // Название продукта
								       'age'		=> $this->age['name'], // Возраст
								       'n'		=>$this->n, // Сколько принимать капель, граммб штук
								       'times'		=>$this->times['name'], // Сколько раз принимат в день
								       'period'		=>$this->period['n'], // Период приема
								       'number_vial'	=>$number_vial, // Количество емкостей
								       'declination_unit'	=>$this->declination($this->n, $this->product['unit']), // Склонение единицы измерения
								       'declination_period'	=>$this->declination($this->period['n'], array('dzień','dniu','dni')), // Склонение периода
								       'declination_vial'	=>$this->declination($number_vial, $this->product['vial']),	 //	Склонение емкости		     
						       );
								       }
						       // Метод склонения существительных с числительными
						       private function declination ($n, $form) 
						       {
						       $n = abs($n)%100;
						       $n1 = $n%10;
							       
							       if ($n > 10 && $n < 20) return $form[2];
							       if ($n > 1 && $n1 < 5) return $form[1];
							       if ($n > 0 && $n1 <= 1) return $form[0];
							       
							       return $form[2];
						       }
						       //Метод который получает данные из массива, которые находятся в классе config
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
