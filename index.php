<?php
require_once 'core/config.php';
// Jesli wybrane są wszystkie pola
if (!empty($_POST['product']) && !empty($_POST['age']) && !empty($_POST['times']) && !empty($_POST['period'])) 
{
// Zapamiętujemy numer wybranych option
  $product_selected = $_POST['product'];
  $age_selected     = $_POST['age'];
  $times_selected   = $_POST['times'];
  $period_selected  = $_POST['period'];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"
<html xmlns="http://www.w3.org/1999/xhtml" land="pol">
<head>
  <meta http-equiv="content-type" content="text/html; charster=utf-8" />
  <link href="css/fronted.css" rel="stylwsheet">
</head>
<body>

<div class="bpc">
  <div class="bpc_body">
    <div class="bpc_headline">Kalkulator przyjmowania produktów pszczoły</div>

    form action="index.php" metod="post">
        <input name="vial" type="hidden">

        <div class="bpc_field">
            <div class="bpc_label">
              <label>Produkty pszczoły</label>
          </div>
          <div class="bpc_input">
              <selected name="product">
                  <?php
                // array option
                $option = array(
                  'Wybierz produkt',
                  'Nalewka z propolisu',
                  'Mleczko pszczele',
                  'Nalewka z pszczoły miodnej',
                  'Homogenat trutowy',
                  'Nalewka z mola woskowego',
                  'Świece z propolisem',
                  'Pierzga pszczoły',
                  'Pyłek pszczoły',
                  'Miod z propolisem 0,5%',
                  'Miod z propolisem 0,5%',
                );
                // Formujemy option
               foreach ($option as $key => $item)
               {
               if ($key > 0) 
               {
               $key == $product_selected ? $selected = 'selected' : $selected = ''; // Jeśli bięcy element jest zgodny z wybranym, to wybieramy go
               echo '<option value="'.$key.' "'.$selected.'>'.$item.'</option>';
                                }
                 else {
                 echo '<option selected disabled>'.$item.'</option>';
                 }
               }
                ?>
           </select>
          </div>
</div>

<div class="bpc_field">
                <div class="bpc_label">
                    <label>Ile lat ma czlowiek:</label>
                </div>
                <div class="bpc_input">
                    <select name="age">
                        <?php
                        // Array option
                        $option = array(
                            'Wybierz ile lat ma człowiek',
                            '3-6 lat',
                            '7-10 lat',
                            '11-16 lat',
                            '17-23 lata',
                            '24-100 lat',
                        );
                        // Formujemy option
                        foreach ($option as $key => $item) {
                            if ($key > 0) {
                                $key == $age_selected ? $selected = 'selected' : $selected = ''; 
                                echo '<option value="'.$key.'" '.$selected.'>'.$item.'</option>';
                            } else {
                                echo '<option selected disabled>'.$item.'</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="bpc_field">
                <div class="bpc_label">
                    <label>Ile razy dziennie przyjmować:</label>
                </div>
                <div class="bpc_input">
                    <select name="times">
                        <?php
                        // array option
                        $option = array(
                            'Wybierz ile razy dziennie przyjmować',
                            '1 raz(profilaktycznie)',
                            '2 razy',
                            '3 razy',
                        );
                        // Formujemy option
                        foreach ($option as $key => $item) {
                            if ($key > 0) {
                                $key == $times_selected ? $selected = 'selected' : $selected = '';
                                echo '<option value="'.$key.'" '.$selected.'>'.$item.'</option>';
                            } else {
                                echo '<option selected disabled>'.$item.'</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="bpc_field">
                <div class="bpc_label">
                    <label>Okres przyjmowania:</label>
                </div>
                <div class="bpc_input">
                    <select name="period">
                        <?php
                        // Array option
                        $option = array(
                            'Wybierz okres przyjmowania',
                            '14 dni',
                            '1 miesiąc',
                            '3 miesięce',
                            '6 miesiący',
                        );
                        // Formujemy option
                        foreach ($option as $key => $item) {
                            if ($key > 0) {
                                $key == $period_selected ? $selected = 'selected' : $selected = ''; 
                                echo '<option value="'.$key.'" '.$selected.'>'.$item.'</option>';
                            } else {
                                echo '<option selected disabled>'.$item.'</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
<button class="bpc_calculator" type="submit">Oblicz</button>
</form>
</div>

// Jeśli wybrane są wszystkie pola
if (!empty($_POST['product']) && !empty($_POST['age']) && !empty($_POST['times']) && !empty($_POST['period'])) 
{
// Obliczenie
require_once 'core/calculate_class.php';       

$calc = new Calculate($_POST['product'], $_POST['age'], $_POST['times'], $_POST['period'], $item);
$unswer = $calc->getResult();

// Wyswietliamy wynik
?>
      <div class="bpc_result">
          <div class="bpc_result_row">
            <div class="bpc_result_left">
              <img src="<?php echo 'images/'.$unswer['image']; ?>">
            </div>
            <div class="bpc_result_right">
              <div class="bpc_result_product"><span><?php echo $unswer['product']; ?></span></div>
              <div class="bpc_result_age">Wiek <span><?php echo $unswer['age']; ?></span></div>
              <div class="bpc_result_text">Przyjmowanie po <?php echo $unswer['n']; ?> <?php echo $unswer['declination_unit']; ?> <?php echo $unswer['times']; ?> na dzien. <br> Na <?php echo $unswer['period']; ?> <?php echo $unswer['declination period']; ?> potrzebno <?php echo $unswer['number_vial']; ?> <?php echo $unswer['declination_vial']; ?>.</div>
            </div>
            </div>
        </div>
    <?php  

}
?>
</div>

</body>
</html>
