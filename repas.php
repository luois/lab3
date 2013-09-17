<?php
$connect = mysql_connect ('localhost', 'root', 'admin123') or die("Impossible de se connecter à la base de données")or die("Impossible de se connecter à la base de données");

mysql_select_db ('repas', $connect) ;
?>
<meta http-equiv="content-type" content="text/html" charset="ISO-8859-1">
<html>
<head>
    <title>Repas</title>
</head>
<body>
<h1>SA marche!</h1>
<?php
$sql ="SELECT pays FROM Pays ";
$request = mysql_query($sql);
echo '<select>';
while($result = mysql_fetch_assoc($request))
{
    echo '<option value="'.$result['pays'].'">'.$result['pays'].'</option>';
}
mysql_close($connect);
?>
</body>
</html>

