<<!DOCTYPE html>
<html>
<head>
	<title>header</title>
</head>
<body>
<header>	
		<article id="Header">
			<p>
				<a href="../accueil/accueil.php">
					<img src="../images/logo_i_need_eat_miniature.png" alt="logo I need Eat" title="page d'accueil" id="logo">
				</a>
			</p>
		</article>
		<div id="Recherche">	

			<h2>Vente et échanges de fruits et légumes frais</h2>
			<form action="../invariants/traitement.php" method="post" >
				<p>
					<input type="search" name="search" placeholder="recherche" size="50" maxlength="50"/>
				</p>
			</form>
		</div>


		
		<section id="Connection_Identifiants">		
			<?php
			if(isset($_SESSION['pseudo']))
			{
				include("../invariants/connexion_connecte.php");
			}
			else
			{
				
				include("../invariants/connection_non_connecte.php");
			}
			?>
		</section>
		<nav class="navigation">
			<ul class="menu">
				<li><a href="../offres/offres.php">Offres</a></li>
				<li><a href="../formulaires/annonce.php">Proposer une annonce</a></li>
				<li><a href="../compte/mes_annonces.php">Mes annonces</a></li>
			</ul>
		</nav>
	</header>
</body>
</html>

