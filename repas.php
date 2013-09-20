<?php
$connect = mysql_connect ('localhost', 'root', 'admin123') or die("Impossible de se connecter à la base de données")or die("Impossible de se connecter à la base de données");

mysql_select_db ('repas', $connect) ;
?>

<html>

<head>
    <meta http-equiv="content-type" content="text/html" charset="ISO-8859-1">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <title>Repas</title>
</head>
<body>
<form role="form">
    <div class="form-group">
        <label for="Pays">pays</label>
        <?php
        $sql ="SELECT pays FROM Pays ";
        $request = mysql_query($sql);
        echo '<select class="form-control">';
        while($result = mysql_fetch_array($request))
        {
            echo '<option value="'.$result['pays'].'">'.$result['pays'].'</option>';
        }
        echo '</select>';
        ?>
    </div>
    <div class="form-group" >
        <label for="exampleInputPassword1">Service de repas</label>
        <?php
        $sql ="SELECT type FROM Type ";
        $request = mysql_query($sql);
        echo '<select class="form-control">';
        while($result = mysql_fetch_array($request))
        {
            echo '<option value="'.$result['Type'].'">'.$result['type'].'</option>';
        }
        echo '</select>';
        ?>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Nom du repas</label>
        <input type="Nom du repas" class="form-control" id="exampleInputPassword1" placeholder="Entrer le repas voulu">
    </div>
    <div class="form-group">
        <input type="radio" id="végétarien" name="Vege" value="Oui" /> Végétarien
        <input type="radio" id="Canivore" name="Vege" value="Non" /> Carnivore
        <?php
        echo $_POST['choix'];
        ?>
    </div>

    <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile">
        <p class="help-block">Example block-level help text here.</p>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox"> Check me out
        </label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>


<?php

// Nom du repas
$sql ="SELECT Repas FROM Type ";
$request = mysql_query($sql);
echo '<br><select>';
while($result = mysql_fetch_array($request))
{
    echo '<option value="'.$result['Type'].'">'.$result['type'].'</option>';
}


//Prix du repas

mysql_close($connect);
echo '</select>';
?>
</body>
</html>

