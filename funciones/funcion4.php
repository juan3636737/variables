<form method="post" action="funcion4.php">
    ingresa el número :
    <br/>
    <input type="number" name="numero" id="numero" required>
      <br/>
    <button type="submit">Verificar</button>
</form>


<?php
function parOinpar (){
if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];
  
    if ($numero %2 == 0) {
        echo "su numero es par";
    } else {
        echo "su numero es inpar";
    }}
} 
parOinpar()
?>