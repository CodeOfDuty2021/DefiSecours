<?php
$con = mysqli_connect("localhost","root","","sauvetage");

if(isset($_POST['btnInscrire'])){
	 if (!empty($_POST['email']) && !empty($_POST['password']) && !empty('nom_prenom')) {
		 
        $email = mysqli_real_escape_string($con,utf8_encode( $_POST['email']));
        $password = mysqli_real_escape_string($con,utf8_encode( $_POST['password']));
        $nom = mysqli_real_escape_string($con,utf8_encode( $_POST['nom_prenom']));
        
		
		$query= "INSERT INTO utilisateurs('nom_prenom','email','mdp') VALUES('".$nom."','".$email."','".$password."');";
        
        $check = mysqli_query( $con, $query );
        $result = mysql_affected_rows($query);
		
        if ($result >0) {
		
            header("location:profile.php"") ;
            echo "L scription est effectuée avec succés!";
        }
        else{
            echo "L inscription est echoué!";
        }
    } else {
        echo 'Veuillez remplir tous les champs';
    }
}
?>
