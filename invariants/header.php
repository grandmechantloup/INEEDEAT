<header id="Header">	
	<article id="log">
		<p>
			<a href="../accueil/accueil.php">
				<img src="../images/images_site/logo_i_need_eat_miniature.png" alt="logo I need Eat" title="page d'accueil" id="logo">
			</a>
			<h1 class="titre_site"> Vente et échange de fruits et légumes frais </h1>
		</p>
	</article>
	<div id="recherche">
		<form action="../invariants/traitement_recherche.php" method="post" >
			<p>
				<input type="search" name="recherche" id="Barre" placeholder="Fruits, légumes, ..." size="45" />
				<input type="submit" value="Rechercher" id="bt_recherche"  >
			</p>
		</form>
	</div>
	<section class="connection">		
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
	<nav id="navigation">
		<table>
			<td id="td1"><a href="../offres/offres.php" class="liens_invariants">Offres</a></td>
			<td id="td2"><a href="../formulaires/annonce.php" class="liens_invariants">Poser une annonce</a></td>
			<td id="td3"><a href="../compte/mes_annonces.php" class="liens_invariants">Mes annonces</a></td>
			<td id="td4"><a href="../compte/panier.php" class="liens_invariants">Mon panier</a></td>
		</table>
	</nav>
</header>