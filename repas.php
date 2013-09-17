<?php
$base = mysql_connect ('localhost', 'root', 'admin123') or die("Impossible de se connecter à la base de données")or die("Impossible de se connecter à la base de données");

mysql_select_db ('repas', $base) ;
?>
<html>
<head>
    <title>Repas</title>
</head>
<body>
<?php
$sql ="SELECT pays FROM Pays() WHERE "

?>
</body>
</html>

