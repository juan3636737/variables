<form method="post">
  <table>
  
   <?php
   for ($i = 1; $i <= 5; $i++) {
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td><input type='number' name='numero[]'></td>";

   }
   ?>
  </table>
  <input type="submit" value="Enviar">
 </form>

 <?php

function suma ()
{
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $numeros = $_POST['numero'];
  echo "<p>Los números ingresados son:</p>";

  foreach ($numeros as $numero) {
  echo "<li>$numero</li>";
  }
$suma = array_sum($numeros);
echo $suma;
 }}
 suma()
 ?>
</body>
</html>