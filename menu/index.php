<!DOCTYPE html>
<?php
include 'leer.php';
?>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<form class="w3-container w3-card-4" action="#" method="post">
  <h1>Seleccione lo que va a comer</h1>
  <h2>Menu</h2>
  <h3>Entrada</h3>
  <p>
  <input class="w3-check" type="checkbox" value="0" name="comida[]" >
  <label>Papas</label></p>
  <p>
  <input class="w3-check" type="checkbox" value="1" name="comida[]">
  <label> Rabas</label></p>
  <p>
  <input class="w3-check" type="checkbox" value="2" name="comida[]">
  <label>Snacks</label></p>
  <!--  -->
  <h3>Plato Principal</h3>
  <p>
  <input class="w3-check" type="checkbox" value="3" name="comida[]">
  <label>Milanesa</label></p>
  <p>
  <input class="w3-check" type="checkbox" value="4" name="comida[]">
  <label>Vacio</label></p>
  <p>
  <input class="w3-check" type="checkbox" value="5"  name="comida[]">
  <label>Hamburguesa Vegana</label></p>
  <!--  -->
  <h3>Acompañamiento</h3>
  <p>
  <input class="w3-check" type="checkbox" value="6" name="comida[]">
  <label>Pure</label></p>
  <p>
  <input class="w3-check" type="checkbox" value="7" name="comida[]">
  <label>Papas al Horno</label></p>
  <p>
  <input class="w3-check" type="checkbox" value="8" name="comida[]">
  <label>Ensalada</label></p>
  <!--  -->
  <h3>Postre</h3>
  <p>
  <input class="w3-check" type="checkbox" value="9" name="comida[]">
  <label>Helado</label></p>
  <p>
  <input class="w3-check" type="checkbox" value="10" name="comida[]">
  <label>Flan</label></p>
  <p>
  <input class="w3-check" type="checkbox" value="11" name="comida[]">
  <label>Budín de pan</label></p>
  <input type="submit"  class="w3-button w3-khaki " name="guardar">
</form>
<?php

mostrarMenu();

?>
</body>
</html>
