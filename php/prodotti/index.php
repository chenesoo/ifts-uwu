<?php
include_once("include/connessione_db.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco prodotti</title>
</head>
<body>
    <!-- Ultimo esercizio prima dell' esame -->
    <?php 
    $binds=[];
    $sql="SELECT * FROM prodotti INNER JOIN categorie ON cat_id = pro_cat_id";
    if(isset($_REQUEST['cat_id'])){
        $cat_id = $_REQUEST['cat_id'];
        if($cat_id!="tutto"){
            $sql .= " WHERE cat_id = :cat_id ";
            $binds[]=['segnaposto'=>"cat_id", 'var'=>$cat_id];
        }
    }
    ?>

    <form method="POST">
    <select name="cat_id">
        <option value="tutto">Tutte le categorie</option>
        <?php
        $categorie=fz_sql("SELECT * FROM categorie");
        foreach($categorie as $categoria){
            $selected="";
            if($categoria['cat_id']==$cat_id){
                $selected="selected";
            }
            echo "<option $selected value='{$categoria['cat_id']}'>{$categoria['cat_nome']}</option>";
        }
        ?>
        
    </select>
    <input type="submit" value="Cerca">
    </form>
    <br><br>
    <?php
    
    $prodotti = fz_sql($sql, $binds);
    foreach($prodotti as $prodotto){
        echo  "<a href = './dettagli_prodotto.php?id=".$prodotto['pro_id']."'>" . $prodotto['pro_nome'] . " " . $prodotto['cat_nome'] ."</a>" . "<br>";        
    }
    ?>
    
</body>
</html>