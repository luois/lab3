<?php
$connect = mysql_connect ('localhost', 'root', 'admin123') or die("Impossible de se connecter à la base de données")or die("Impossible de se connecter à la base de données");

mysql_select_db ('repas', $connect) ;
?>

<html>
<meta http-equiv="content-type" content="text/html" charset="ISO-8859-1">
<head>

    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <title>Repas</title>
</head>
<body>
<form role="form">
    <div class="form-actions">
        <div class="form-group">
            <label for="Pays">pays</label>
            <?php
            $sql ="SELECT pays FROM Pays ";
            $request = mysql_query($sql);
            echo '<select>';
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
            echo '<select>';
            while($result = mysql_fetch_array($request))
            {
                echo '<option value="'.$result['Type'].'">'.$result['type'].'</option>';
            }
            echo '</select>';
            ?>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nom du repas</label>
            <input class="form-control" id="focusedInput" type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer le repas voulu">
            <?php
            $sql ="SELECT Repas FROM repas ";
            $request = mysql_query($sql);
            echo '<br><select>';
            while($result = mysql_fetch_array($request))
            {
                echo '<option value="'.$result['Type'].'">'.$result['type'].'</option>';
            }
            echo '</select>'
            ?>
        </div>
        <div class="form-group">
            <input type="radio" id="végétarien" name="Vege" value="Oui" /> Vegetarien
            <input type="radio" id="Canivore" name="Vege" value="Non" /> Carnivore
            <?php
            echo $_vegechoix['choix'];
            ?>
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputPassword1">Prix</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer le prix">
            <?php
            $sql ="SELECT Repas FROM prix ";
            $request = mysql_query($sql);
            echo '<br><select>';
            while($result = mysql_fetch_array($request))
            {
                echo '<option value="'.$result['Type'].'">'.$result['type'].'</option>';
            }
            echo '</select>';
            ?>
        </div>
        <div class="form-group">
            <label for="exampleInputFile"></label>

            <p class="help-block"></p>
        </div>
        <div class="checkbox">

        </div>

    </div>

    <button type="button" class="btn btn-primary btn-lg btn-block">A la Bouffe!!!</button>
    <button type="button" class="btn btn-default btn-lg btn-block">Annuler</button>
</form>


<?php
mysql_close($connect);
?>
</body>
</html>

