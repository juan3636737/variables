<form method="post" action="funcion5.php">
    ingresa el número que desee incrementar :
    <br/>
    <input type="number" name="numero" id="numero" required>
      <br/>
    <button type="submit">Verificar</button>
</form>
<?php
  function incremento (){

  if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];

  $numerof = $numero +1;
echo "el numero final es de ".$numerof;
    } 
}
incremento()
 ?>
