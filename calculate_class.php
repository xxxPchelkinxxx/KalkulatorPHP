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
						       
  
  
  }


?>
