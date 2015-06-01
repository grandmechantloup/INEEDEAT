<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/invariants.css">
		

	</head>

	<body>
		
		<header id="Header">

						<img id="Logo" src="../images/logo_i_need_eat_miniature.png">

			<div id="Recherche">

					<h2> Vente et échange de fruits et légumes frais </h2>
					    <input type="search" name="Recherche" id="Barre" placeholder="Fruits,Légumes..." size="40"/>
						<input type="submit" value="Rechercher">

			</div>

	<section>
					<?php
						if(isset($_SESSION['pseudo']))
						{
							include("../invariants/connexion_connecte.php");
						}
						else
						{
						include("../invariants/connexion_non_connecte.php");
						}
						?>	

				
	</section>

			<section id="Connexion">
				<div id="Identifiant">

				<form method="post" action="#.php">
					<p>
						<label for="ID">Votre email:</label> 
						<input type="Email" name="Email" id="Email" placeholder="exemple@ex.com" size="15"/>
					<br>
					<br>
						<label for="M_d_P">Mot de passe:</label> 
						<input type="password" name="M_D_P" id="M_D_P" placeholder="xxxxxxxx"  size="15"/>
					<br>
						<a href="formulaireMDP.php"> Mot de passe oublié?				</a>
					</p>
				</form>	
				</div>	
				

				<div id="Bouton">

						<a href="connect.php" class="myButton"> Connectez-vous!          </a>
						
					<br>
						<a href="../formulaires/inscription.php"> Pas encore Inscrit?					</a>
				</div>
			</section>
			<br>
			<br>
			<nav class="navigation">
				<table>
					<td> <a href="Offres.html"> Offres 									</a>	</td>
					<td> <a href="PoserAnnonces.html"> Proposer une annonce 					</a>	</td>
					<td> <a href="MesAnnonces.html"> Mes Annonces 						</a>	</td>
				</table>				
			</nav>
		</header>