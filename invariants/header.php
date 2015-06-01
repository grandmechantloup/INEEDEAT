
<!--

<<<<<<< Updated upstream

	<header id="Header">	
		<article id="log">
			<p>
				<a href="../accueil/accueil.php">
					<img src="../images/logo_i_need_eat_miniature.png" alt="logo I need Eat" title="page d'accueil" id="logo">
				</a>
			</p>
		</article>
		<div id="search_bar">	
			<form action="../invariants/traitement.php" method="post" >
				<p>
					<input type="search" name="search" placeholder="recherche" size="50" maxlength="50"/>
				</p>
			</form>
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
		<nav class="nav_header">
			<ul class="menu">
				<li><a href="../offres/offres.php">Offres</a></li>
				<li><a href="../formulaires/annonce.php">Poser une annonce</a></li>
				<li><a href="../compte/mes_annonces.php">Mes annonces</a></li>
			</ul>
		</nav>
	</header>

-->

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
					
					  	<input type="search" name="Recherche" id="Barre" placeholder="Fruits,Légumes..." size="60"/>
						<input type="submit" value="Rechercher">

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
			<br>
			<br>
			<nav id="navigation">
				<table>
					<td> <a href="Offres.html"> Offres 									</a>	</td>
					<td> <a href="PoserAnnonces.html"> Proposer une annonce 					</a>	</td>
					<td> <a href="MesAnnonces.html"> Mes Annonces 						</a>	</td>
				</table>				
			</nav>
		</header>
