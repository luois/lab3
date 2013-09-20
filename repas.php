<?php
$connect = mysql_connect ('localhost', 'root', 'admin123') or die("Impossible de se connecter à la base de données")or die("Impossible de se connecter à la base de données");

mysql_select_db ('repas', $connect) ;
?>

<html>

<head>
    <meta http-equiv="content-type" content="text/html" charset="ISO-8859-1">
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <title>Repas</title>
</head>
<body>
<h1>SA marche!</h1>
<?php
//NOm du pays
$sql ="SELECT pays FROM Pays ";
$request = mysql_query($sql);
echo '<select>';
while($result = mysql_fetch_array($request))
{
    echo '<option value="'.$result['pays'].'">'.$result['pays'].'</option>';
}
echo '</select>';

//Type de repas
$sql ="SELECT type FROM Type ";
$request = mysql_query($sql);
echo '<br><select>';
while($result = mysql_fetch_array($request))
{
    echo '<option value="'.$result['Type'].'">'.$result['type'].'</option>';
}
//Type select repas
$sql ="SELECT Repas FROM Type ";
$request = mysql_query($sql);
echo '<br><select>';
while($result = mysql_fetch_array($request))
{
    echo '<option value="'.$result['Type'].'">'.$result['type'].'</option>';
}
// Nom du repas

//Prix du repas

mysql_close($connect);
echo '</select>';
?>
</body>
</html>

