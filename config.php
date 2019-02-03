<? php
abstract class Config {

  const Data = array (
    // Продукты пчелы
    'product' => array(
      array(''), //Первый элемент пустой
      array(
        'name' => 'Nalewka z propolisu',
        'name_negative' => 'nalewki z propolisu',
        'unit' => array('krapla', 'krapli', 'krapel'), // Еденицы измерения со склонением
        'vital' => array('butelka', 'butelki', 'butelek'), //Емкость со склонением
        'image' => '', //Изображение продукта
        'age' => array( //Норма употреления исходя из возраста
          array(''),
          array('name' => '3-6 lat', 'n' => 5),
          array('name' => '7-10 lat', 'n' => 10),
          array('name' => '11-16 lat', 'n' => 15),
          array('name' => '17-23 lata', 'n' => 25),
          array('name' => '24-100 lat', 'n' => 30),
          ),
        ),
      
      
  
}
?>
