<? php
abstract class Config {

  const Data = array (
    // Produkty pszczoly
    'product' => array(
      array(''), //Первый элемент пустой
      array(
        'name' => 'Nalewka z propolisu', // Nazwa produktu
        'name_negative' => 'nalewki z propolisu', // Nazwa produktu w dopelniaczu
        'unit' => array('krapla', 'krapli', 'krapel'), // Nazwa jednostki ze spadkiem.
        'vital' => array('butelka', 'butelki', 'butelek'), //Nazwa zbiornika ze spadkiem
        'volume' => 2700, // Ilość kropiel w butelce
        'image' => '', // Изображение продукта
        'age' => array( // Norma przyjmowania dla grup wiekowych
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
    // Ile razy dziennie przyjmowac
    
  'times' => array(
    array(''), //Pierwszy massyw jest pusty
    array('n' =>1, 'name' => '1 raz'), // Mnozymy na 1
    array('n' => 2, 'name' => '2 razy'),
    array('n' = > 3, 'name' => '3 razy'),
  ),
    
    // Okres przyjmowania
    'period' => array(
      array(''), //
      array('n' => 14, 'name' => '14 dni'), // nozymy na 14
      array('n' => 30, 'name' => '1 miesiąc'), // na 30
      array('n' => 60, 'name' => '3 miesiące'), // na 60
      array('n' => 90, 'name' => '6 miesięcy'), // na 90
      ),
  );
      
}
?>
