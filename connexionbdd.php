<?php
	try {
		new PDO('mysql:host=localost:3306;dbname=test;charset=utf8', 'root', '');
	}catch(PDOException $e){
		die(' Error : '. $e->getMessage());
	}
	
	/**
	
	<?php
		try
		{
			// On se connecte à MySQL
			$bdd = new PDO('mysql:host=localhost;dbname=jeux_video;charset=utf8', 'root', '');
		}
		catch(Exception $e)
		{
			// En cas d'erreur, on affiche un message et on arrête tout
				die('Erreur : '.$e->getMessage());
		}

		// Si tout va bien, on peut continuer

		//////////////// Récupérer les données ////////////////




		// On récupère tout le contenu de la table jeux_video
		$reponse = $bdd->query('SELECT * FROM jeux_video');
		

		// Récupére contenu avec plusieurs paramétres

		$reponse = $bdd->prepare('SELECT nom FROM jeux_video WHERE possesseur = ? AND prix <= ?');
		$reponse->execute(array($_GET['possesseur'], $_GET['prix_max']));

		// On affiche chaque entrée une à une
		while ($donnees = $reponse->fetch())
		{
		?>
			<p>
			<strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />
			Le possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, et il le vend à <?php echo $donnees['prix']; ?> euros !<br />
			Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer à <?php echo $donnees['nbre_joueurs_max']; ?> au maximum<br />
			<?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur <?php echo $donnees['nom']; ?> : <em><?php echo $donnees['commentaires']; ?></em>
		   </p>
		<?php
		}

		$reponse->closeCursor(); // Termine le traitement de la requête


	///////////// Ajoute des données /////////////

	$req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
	$req->execute(array(
		'nom' => $nom,
		'possesseur' => $possesseur,
		'console' => $console,
		'prix' => $prix,
		'nbre_joueurs_max' => $nbre_joueurs_max,
		'commentaires' => $commentaires
		));

	echo 'Le jeu a bien été ajouté !';


	?>
	
	
	
	
	**/
?>