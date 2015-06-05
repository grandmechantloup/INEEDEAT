<header id="Header">	
	<article id="log">
		<p>
			<a href="../accueil/accueil.php">
				<img src="../images/images_site/logo_i_need_eat_miniature.png" alt="logo I need Eat" title="page d'accueil" id="logo">
			</a>
			<h2> Vente et échange de fruits et légumes frais </h2>
		</p>
	</article>
	<div id="recherche">
		
		<form action="" method="post" >
			<p>
				<input type="search" name="recherche" id="Barre" placeholder="Fruits, légumes, ..." />
				<input type="submit" id="bt_recherche"  >
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
	<nav id="navigation">
		<table>
			<td id="td1"><a href="../offres/offres.php">Offres</a></td>
			<td id="td2"><a href="../formulaires/annonce.php">Poser une annonce</a></td>
			<td id="td3"><a href="../compte/mes_annonces.php">Mes annonces</a></td>
		</table>
	</nav>
</header>