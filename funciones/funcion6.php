<form method="post" action="funcion6.php">
    ingresa un numero del 1 al 12 teniendo en cuenta que 1 es enero y 12 es diciembre :

    <br />
    <input type="number" name="numero" id="numero" required>
    <br />
    <button type="submit">Verificar</button>
</form>
<?php

$imc = $_POST['numero'];
switch (isset($_POST['numero'])) {

    case ($imc <= 1):
        echo "enero";
        break;
    case ($imc <= 2):
        echo "febrero";
        break;
    case ($imc  <= 3):
        echo "marzo ";
        break;
    case ($imc  <= 4):
        echo "abril";
        break;
    case ($imc  <= 5):
        echo "mayo";
        break;
        break;
    case ($imc  <= 6):
        echo "junio";
        break;
    case ($imc <= 7):
        echo "julio" . $imc;
        break;
    case ($imc <= 8):
        echo "agosto";
        break;
    case ($imc  <= 9):
        echo "septiembre";
        break;
    case ($imc  <= 10):
        echo "octubre";
        break;
    case ($imc  <= 11):
        echo "noviembre";
        break;
        break;
    case ($imc  <= 12):
        echo "bebienbre";
        break;

    default:
        echo "muchas gracias";
}
?>