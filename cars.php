<?php 
include __DIR__ . '/database/db.php';
?>

<div class="car">
        <h2><?php echo $car['brand'] ?></h2>
        <h1><?php echo $car['modello'] ?></h1>
        <div class="img">
            <img src="<?php echo $car['foto'] ?>" alt="">
        </div>
        <div>
        <?php echo $car['caratteristicheAuto'] ?>
        </div>
        <ul>
         <li>Anno: <?php echo $car['anno'] ?></li>
         <li>Colore: <?php echo $car['colore'] ?></li>
         <li>Alimentazione: <?php echo $car['alimentazione'] ?></li>
         <li>Chilometraggio: <?php echo $car['chilometraggio'] ?></li>
         <li>Porte: <?php echo $car['porte'] ?></li>
         <li>Cavalli: <?php echo $car['cavalli'] ?></li>
         <li>N Proprietari: <?php echo $car['nProprietari'] ?></li>
         <li>Condizioni: <?php echo $car['condizioni'] ?></li>
        </ul>
        <h3>Prezzo: <?php echo $car['prezzo'] ?></h3>
         </div>
        