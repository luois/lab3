<?php
$connect = mysql_connect ('localhost', 'root', 'admin123') or die("Impossible de se connecter à la base de données")or die("Impossible de se connecter à la base de données");


$repas=$_REQUEST['nom'];
$pays=$_REQUEST['listePays'];
$Type=$_REQUEST['listeType'];
$vege=$_REQUEST['Vege'];
$prix=$_REQUEST['prix'];
mysql_select_db ('repas', $connect) ;
?>

<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <title>Repas</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
</head>
<body>
<p>
<?php
    if(isset($_REQUEST['OK'])){
        if(isset($repas) && is_numeric($prix) && isset($vege)){
            $commande = "INSERT INTO Repas (`idPays`, `idTypes`, `repas`, `vege`, `prix`) VALUES ('$pays','$Type','$repas','$vege','$prix')";
            $request = mysql_query($commande);
            //echo'Votre repas est : '.$repas.'et cout : '.$prix.'';
        }
        else
        {
            echo 'erreur de formatage de données';
        }
    }
?>
</p>
<form role="form" action="repas.php" method="POST">
    <div class="form-actions">
        <div class="form-group">
            <label for="Pays">pays</label>
            <?php
            $sql ="SELECT * FROM Pays ";
            $request = mysql_query($sql);
            echo '<select name="listePays">';
            while($result = mysql_fetch_array($request))
            {
                echo '<option value="'.$result['*idPays'].'">'.$result['pays'].'</option>';
            }
            echo '</select>';
            ?>
        </div>
        <div class="form-group" >
            <label for="exampleInputPassword1">Service de repas</label>
            <?php
            $sql ="SELECT * FROM Type ";
            $request = mysql_query($sql);
            echo '<select name="listeType">';
            while($result = mysql_fetch_array($request))
            {
                echo '<option value="'.$result['*idTypes'].'">'.$result['type'].'</option>';
            }
            echo '</select>';
            ?>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nom du repas</label>
            <input class="form-control" id="focusedInput" type="text" class="form-control" id="exampleInputPassword1" name="nom" placeholder="Entrer le repas voulu">
        </div>
        <div class="form-group">
            <input type="radio" id="végétarien" name="Vege" value="1" /> Végétarien
            <input type="radio" id="Canivore" name="Vege" value="0" /> Carnivore
            <?php
            echo $_vegechoix['choix'];
            ?>
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputPassword1">Prix</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="prix" placeholder="Entrer le prix">
        </div>
        <div class="form-group">
            <label for="exampleInputFile"></label>

            <p class="help-block"></p>
        </div>
        <div class="checkbox">

        </div>

    </div>

    <?php
    ?>
    <button type="submit" class="btn btn-primary btn-lg btn-block" name="OK">A la Bouffe!!!</button>
    <button type="button" class="btn btn-default btn-lg btn-block" name="CANCEL">Annuler</button>
</form>


<?php
mysql_close($connect);
?>
</body>
</html>

