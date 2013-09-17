
<html>
<head>
    <title>Repas</title>
</head>
<body><?php
if(!($connect = mysql_connect ('localhost', 'root', 'admin123'))) {
    echo 'La connexion a été établi';

}// or die("Impossible de se connecter à la base de données")or die("Impossible de se connecter à la base de données");

mysql_select_db ('repas', $connect) ;
?>
<?php
$sql ="SELECT * FROM Pays";
mysql_query($sql);
echo '<select>';
while($result = mysql = mysql_fetch_assoc($sql)){
    echo '<option value="'.$result['pays'].'">'.$result[''].'</option>';
}
mysql_close($connect);
?>
</body>
</html>

