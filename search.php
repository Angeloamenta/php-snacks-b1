<?php 
include __DIR__ . '/database/db.php';
$carsFilter = $cars;
if (isset($_GET["color"]) !== false) {
    $color = $_GET["color"];
    if ($color === "all") {
        $carsFilter = $cars;
    }else {
        $carsFilter = [];
        foreach ($cars as $car) {
            if ($car['colore'] === $color) {
                $carsFilter[] = $car;
            }
        }
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container" id="app">
<form action='search.php' method='GET'>
<select name='color' id='color'>
      <option>all</option>
      <option>blue</option>
      <option>rosso</option>
      <option>grigio</option>
      <option>arancione</option>
    </select>
    <button>Cerca</button>
</form>
<div class="container-cars">
<?php
    foreach ($carsFilter as $car) {
            include __DIR__ . '/cars.php'; 
    }
?> 
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>