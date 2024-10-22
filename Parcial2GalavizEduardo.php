<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
echo "ARRAY NORMAL:"."<br>";
$Telefonos = [ 
["Telefono" => "Samsung", "Precio" => 3000], 
["Telefono" => "Android", "Precio" => 2000], 
["Telefono" => "iPhone", "Precio" => 10000], 
["Telefono" => "Galaxy A015", "Precio" => 2000], 
["Telefono" => "Xiaomi", "Precio" => 3000]];

array_push ($Telefonos, ["Telefono" => "Motorola", "Precio" => 2050]);
array_push ($Telefonos, ["Telefono" => "Nokia", "Precio" => 2100]);

foreach ($Telefonos as $telefono) {
    echo "Teléfono: " . $telefono["Telefono"] . ", Precio: " . $telefono["Precio"] . "<br>";
}


rsort($Telefonos);

echo "\nARRAY DE MAYOR A MENOR:\n"."<br>";
foreach ($Telefonos as $telefono) {
    echo "Teléfono: " . $telefono["Telefono"] . ", Precio: " . $telefono["Precio"] . "<br>";
}


?>
</body>
</html>