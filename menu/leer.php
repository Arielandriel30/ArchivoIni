<?php
function mostrarMenu(){   
if (isset($_POST['guardar'])) {
    $comida = $_POST['comida'];
    echo '<h1>Usted seleccionó</h1>';
    $archivo = __DIR__ . "/menu.ini";
    $contenido = parse_ini_file($archivo, true); 
          foreach ($_POST['comida'] as $position => $value) {
            seccionar($value, $contenido);
      }
    
  }
}    

function seccionar($a, $b){
  if ($a <= 2){
    echo '<div class="w3-container">';
    echo '<span class="w3-tag w3-xxlarge w3-padding w3-orange w3-center">';
    echo '<strong>';
    echo 'Entrada=' . $b["comida"]["entrada"][$a];
    echo '</strong>';
    echo '<br>';
    echo '</span>';
    echo '</div>';
   }elseif ($a <= 5) {
     echo '<div class="w3-container">';
    echo '<span class="w3-tag w3-xxlarge w3-padding w3-orange w3-center">';
    echo '<strong>';
    echo 'Plato Principal=' . $b["comida"]["entrada"][$a];
    echo '</strong>';
    echo '<br>';
    echo '</span>';
    echo '</div>';
   }else if ($a <= 8) {
     echo '<div class="w3-container">';
     echo '<span class="w3-tag w3-xxlarge w3-padding w3-orange w3-center">';
     echo '<strong>';
     echo 'Acompañamiento=' . $b["comida"]["entrada"][$a];
     echo '</strong>';
     echo '<br>';
     echo '</span>';
     echo '</div>';
   }else{
     echo '<div class="w3-container">';
     echo '<span class="w3-tag w3-xxlarge w3-padding w3-orange w3-center">';
     echo '<strong>';
     echo 'Postre=' . $b["comida"]["entrada"][$a];
     echo '</strong>';
     echo '<br>';
     echo '</span>';
     echo '</div>';
   }
}
/*
$plato = $contenido["plato_principal"]["principal"][2];
$acompa = $contenido["acompanamientos"]["acompanamiento"][1];
$postre = $contenido["postres"]["postre"][0];*/


/*echo "Entrada=$entrada";
echo'<br>';  
echo "Plato Principal=$plato";
echo'<br>';
echo "Acompañamiento=$acompa";
echo'<br>';
echo "Postre=$postre"; */


// Analizar sin secciones
/*$matriz_ini = parse_ini_file("menu.ini");
print_r($matriz_ini);*/ 

// Analizar con secciones
/*$matriz_ini = parse_ini_file("menu.ini", true);
print_r($matriz_ini);*/
?>