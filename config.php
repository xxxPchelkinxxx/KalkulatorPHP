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
        'volume' => 2700, // Количество капель в упаковке
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
      array(
            'name' => 'Mleczko pszczeli',
            'name_genitive' => 'mleczka pszczeli',
            'unit' => array('gram', 'gramy', 'gramów'),
            'vial' => array('butelka', 'butelki', 'butelek'),
            'volume' => 17,
            'image' => '2.jpg',
            'age' => array(
                array(''),
                array('name' => '3-6 lat',    'n' => 0.1),
                array('name' => '7-10 lat',   'n' => 0.15),
                array('name' => '11-16 lat',  'n' => 0.25),
                array('name' => '17-23 lata', 'n' => 0.25),
                array('name' => '24-100 lat', 'n' => 0.25),
            ),
        ),
      array(
            'name' => 'Nalewka z pszczoły miodnej',
            'name_genitive' => 'nalewki z pszczoły miodnej',
            'unit' => array('krapla', 'krapli', 'krapel'),
            'vial' => array('butelka', 'butelki', 'butelek'),
            'volume' => 2700,
            'image' => '3.jpg',
            'age' => array(
                array(''),
                array('name' => '3-6 lat',    'n' => 5),
                array('name' => '7-10 lat',   'n' => 10),
                array('name' => '11-16 lat',  'n' => 15),
                array('name' => '17-23 lata', 'n' => 25),
                array('name' => '24-100 lat', 'n' => 30),
            ),
        ),
      array(
            'name' => 'Homogenat trutowy',
            'name_genitive' => 'homogenatu trutowego',
            'unit' => array('gram', 'gramy', 'gramów'),
            'vial' => array('butelka', 'butelki', 'butelek'),
            'volume' => 100,
            'image' => '4.jpg',
            'age' => array(
                array(''),
                array('name' => '3-6 lat',    'n' => 1),
                array('name' => '7-10 lat',   'n' => 1),
                array('name' => '11-16 lat',  'n' => 2),
                array('name' => '17-23 lata', 'n' => 2),
                array('name' => '24-100 lat', 'n' => 4),
            )
        ),
      array(
            'name' => 'Nalewka z mola woskowego',
            'name_genitive' => 'nalewki z mola woskowego',
            'unit' => array('krapla', 'krapli', 'krapel'),
            'vial' => array('butelka', 'butelki', 'butelek'),
            'volume' => 2700,
            'image' => '5.jpg',
            'age' => array(
                array(''),
                array('name' => '3-6 lat',    'n' => 5),
                array('name' => '7-10 lat',   'n' => 10),
                array('name' => '11-16 lat',  'n' => 15),
                array('name' => '17-23 lata', 'n' => 25),
                array('name' => '24-100 lat', 'n' => 30),
            ),
        ),
      array(
            'name' => 'śweci z propolisem',
            'name_genitive' => 'śwec z propolisem',
            'unit' => array('sztuka', 'sztuki', 'sztuk'),
            'vial' => array('opakowanie', 'opakowania', 'opakowań'),
            'volume' => 10,
            'image' => '6.jpg',
            'age' => array(
                array(''),
                array('name' => '3-6 lat',    'n' => 0.5),
                array('name' => '7-10 lat',   'n' => 1),
                array('name' => '11-16 lat',  'n' => 1),
                array('name' => '17-23 lata', 'n' => 1),
                array('name' => '24-100 lat', 'n' => 1),
            ),
        ),
      array(
            'name' => 'Pierzga pszczoły',
            'name_genitive' => 'perzgi pszczoły',
            'unit' => array('gram', 'gramy', 'gramów'),
            'vial' => array('słoiczek', 'słoiczki', 'słoiczków'),
            'volume' => 100,
            'image' => '7.jpg',
            'age' => array(
                array(''),
                array('name' => '3-6 lat',    'n' => 1.25),
                array('name' => '7-10 lat',   'n' => 1.7),
                array('name' => '11-16 lat',  'n' => 2.5),
                array('name' => '17-23 lata', 'n' => 3),
                array('name' => '24-100 lat', 'n' => 3),
            ),
        ),
      array(
            'name' => 'Pyłek pszczoły',
            'name_genitive' => 'pyłku pszczoły',
            'unit' => array('gram', 'gramy', 'gramów'),
            'vial' => array('opakowanie', 'opakowania', 'opakowań'),
            'volume' => 100,
            'image' => '8.jpg',
            'age' => array(
                array(''),
                array('name' => '3-6 lat',    'n' => 1.4),
                array('name' => '7-10 lat',   'n' => 2),
                array('name' => '11-16 lat',  'n' => 4),
                array('name' => '17-23 lata', 'n' => 4),
                array('name' => '24-100 lat', 'n' => 4),
            ),
        ),
      array(
            'name' => 'Miod z propolisem 0,5%',
            'name_genitive' => 'miodu z propolisem 0,5%',
            'unit' => array('gram', 'gramy', 'gramów'),
            'vial' => array('słoiczek', 'słoiczki', 'słoiczków'),
            'volume' => 360,
            'image' => '9.jpg',
            'age' => array(
                array(''),
                array('name' => '3-6 lat',    'n' => 2),
                array('name' => '7-10 lat',   'n' => 2.7),
                array('name' => '11-16 lat',  'n' => 8),
                array('name' => '17-23 lata', 'n' => 8),
                array('name' => '24-100 lat', 'n' => 8),
            ),
        ),
      array(
            'name' => 'Miod z propolisem 3%',
            'name_genitive' => 'miodu z propolisem 3%',
            'unit' => array('gram', 'gramy', 'gramów'),
            'vial' => array('słoiczek', 'słoiczki', 'słoiczków'),
            'volume' => 180,
            'image' => '10.jpg',
            'age' => array(
                array(''),
                array('name' => '3-6 lat',    'n' => 1.6),
                array('name' => '7-10 lat',   'n' => 2.7),
                array('name' => '11-16 lat',  'n' => 4),
                array('name' => '17-23 lata', 'n' => 4),
                array('name' => '24-100 lat', 'n' => 4),
            ),
        ),
      ),
    // Сколько раз в день принимать
    
  
}
?>
