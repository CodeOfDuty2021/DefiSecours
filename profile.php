<?php
    $con = mysqli_connect("localhost","root","","sauvetage");

    $nomSauveteur = $_POST['nomSauveteur'];
    $bateau = $_POST['bateau'];
    $lieu = $_POST['lieu'];
    $date = $_POST['date'];
    $nomSauvee = $_POST['nomSauvee'];

    if(isset($_POST['rechercher'])){

        if(empty($nomSauveteur) && empty($bateau) && empty($lieu) && empty($date) && empty($nomSauvee)){

            echo "Il faut remplir au moins un champs!";
        }
        else{
            
            $query = "SELECT * FROM acte_sauvetage, sauveteur, personnes_sauves ";

            $conditions = array();

            if(!empty($nomSauveteur)){
                $conditions = "capitaine_bateau = ".$nomSauveteur;
            }

            if(!empty($nomSauveteur)){
                $conditions = "bateau = ".$bateau;
            }

            if(!empty($lieu)){
                $conditions = "lieu = ".$lieu;
            }

            if(!empty($date)){
                $conditions = "date = ".$date;
            }

            if(!empty($nomSauvee)){
                $conditions = "nomSauvee = ".$nomSauvee;
            }

            $sql = $query;
            if (count($conditions) > 0) {
              $sql .= " WHERE " . implode(' AND ', $conditions)." INNER JOIN acte_sauvetage ON acte_sauvetage.capitaine_bateau = sauveteur.id_sauveteur INNER JOIN personnes_sauves ON personnes_sauves.id_acte = acte_sauvetage.id_acte;";
            }
        
            $result = mysql_query($sql);

            if($row = mysqli_fetch_array($result)){

                $nomSauveteur = $row['nomSauveteur'];
                $bateau = $row['bateau'];
                $lieu = $row['lieu'];
                $date = $row['date'];
                $nombre_sauves = $row['nombre_sauves'];
                $nombre_decedes = $row['nombre_decedes'];
                $description = $row['description'];
                $listeSauvees = array();
                $listeSauvees[] = $listeSauvees .implode($row['nomSauvee']);
            
            }
        }
    }
if(isset($_POST['modifier_acte'])){
    $bateau = $_POST['bateau'];
    $query="SELECT * FROM acte_sauvetage WHERE bateau=".$bateau.";";
    $result=mysql_query($query);
    
    if($row = mysqli_fetch_array($result)){
        $bateau = $row['bateau'];
        $lieu = $row['lieu'];
        $date = $row['date'];
        $nombre_sauves = $row['nombre_sauves'];
        $nombre_decedes = $row['nombre_decedes'];
        $description = $row['description'];
    }
    if(isset($_POST['submit'])){
        $bateau =$_POST['bateau'];
        $lieu = $_POST['lieu'];
        $date = $_POST['date'];
        $nombre_sauves = $_POST['nombre_sauves'];
        $nombre_decedes = $_POST['nombre_decedes'];
        $description = $_POST['description'];
    }
    $query="UPDATE acte_sauvetage SET bateau=".$bateau.",  lieu=".$lieu.", date=".$date.", nombre_sauves=".$nombre_sauves.", nombre_decedes=".$nombre_decedes.", description=".$description.";";
}
if(isset($_POST['modifier_sauveteur'])){
    $nomSauveteur = $_POST['nomSauveteur'];
    $query="SELECT * FROM sauveteurs WHERE nomSauveteur=".$nomSauveteur.";";
    $result=mysql_query($query);
    
    if($row = mysqli_fetch_array($result)){
        $nomSauveteur = $row['nomSauveteur'];
        $date_naissance = $row['date_naissance'];
        $description = $row['description'];
        
    }
    if(isset($_POST['submit'])){
        $nomSauveteur =$_POST['nomSauveteur'];
        $date_naissance = $_POST['date_naissance'];
        $description = $_POST['description'];

    }
    $query="UPDATE sauveteurs SET nomSauveteur=".$nomSauveteur.",  date_naissance=".$date_naissance.", description=".$description.";";
}

?>