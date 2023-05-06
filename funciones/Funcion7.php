<form method="post" action="funcion7.php">
  ingresa el nombre del producto:
  <br />
  <input type="text" name="nombre" id="">
  <br />
  ingresa el valor del producto :
  <br />
  <input type="number" name="numero" id="numero" required>
  <br />
  ingrese el iva (teniendo en cuenta que el 1% es igual a 0.10):
  <input type="float" name="iva" id="">
  <button type="submit">Verificar</button>
</form>
<?php

function suma()
{
 
    $numeros = $_POST['numero'];
    $iva = $_POST['iva'];
  
    switch (isset($_POST[''])) {
    
        case ($iva <= 0.10):
          $total = $numeros * $iva; 
            echo "enero";
            break;
  }
}

?>