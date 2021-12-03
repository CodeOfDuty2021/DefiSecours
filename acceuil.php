<?php
$con = mysqli_connect("localhost","root","","sauvetage");

if(isset($_POST['btnlogin'])){
	 if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
		 
        $email = mysqli_real_escape_string($con,utf8_encode( $_POST['email']));
        $password = mysqli_real_escape_string($con,utf8_encode( $_POST['password']));
		
		$query= "SELECT * FROM utilisateurs WHERE  id_u = '".$email."' and mdp = '".$password."'";
        $check = mysqli_query( $con, $query );
	
        $nb_rows = mysqli_fetch_array($check);
		$ida= $nb_rows['id_u'];
        if ($nb_rows >0) {
		session_start() ;
			
            $_SESSION["pseudo"] = $email;
			$_SESSION["id_u"] = $ida;
				header("location:profile.php?ida=".$ida."") ;
			} else {
            echo "Email et\ou Mot De Passe Erroné!";
        }
    } else {
        echo 'Veuillez remplir tous les champs!';
    }
}
?>

