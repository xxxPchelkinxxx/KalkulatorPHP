<?php
require_once 'core/config.php';
// Если выбраны все поля
if (!empty($_POST['product']) && !empty($_POST['age']) && !empty($_POST['times']) && !empty($_POST['period'])) 
{
// Запоминаем номер выбранных option
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
                // <assiv option
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




</body>
</html>
