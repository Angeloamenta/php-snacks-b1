<?php 

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
    <select @change="filtroArray" v-model="selected">
  <option>all</option>
  <option>blue</option>
  <option>rosso</option>
  <option>grigio</option>
  <option>arancione</option>
</select>
<div class="container-cars">
    <div class="car" v-for="(car, index) in arrayCars">
        <h2>{{car.brand}}</h2>
        <h1>{{car.modello}}</h1>
        <div class="img">
            <img :src="car.foto" alt="">
        </div>
        <div>
             {{car.caratteristicheAuto}}
        </div>
        <ul>
         <li>Anno: {{car.anno}}</li>
         <li>Colore: {{car.colore}}</li>
         <li>Alimentazione: {{car.alimentazione}}</li>
         <li>Chilometraggio: {{car.chilometraggio}}</li>
         <li>Porte: {{car.porte}}</li>
         <li>Cavalli: {{car.cavalli}}</li>
         <li>N Proprietari: {{car.nProprietari}}</li>
         <li>Condizioni: {{car.condizioni}}</li>
        </ul>
        <h3>Prezzo: {{car.prezzo}}</h3>
         </div>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>