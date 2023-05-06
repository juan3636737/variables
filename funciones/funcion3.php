<form method="post" action="Funcion3.php">
Ingresa el valor de la altura:
<br/>
<input type="float" name="altura" id="" required>
<br/>
ingresa el valor de el radio:
<br/>
<input type="float" name="radio" id="">
<br/>    
<button type="submit">Verificar</button>
</form>
<?php
    function volumen ()
{
    echo "el volumen de su cilindro es de  ";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $altura = $_POST['altura'];
        $radio = $_POST['radio'];
        $pi = 3.1416;
        $pif = $pi * $pi;
        $radiof = $radio * $radio;
       
        $total =  $altura * $pif * $radiof;
       
        
       echo $total ; 
       }}
volumen ();
    
?>






