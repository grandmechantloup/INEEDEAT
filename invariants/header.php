<header id="Header">	
	<article id="log">
		<p>
			<a href="../accueil/accueil.php">
				<img src="../images/images_site/logo_i_need_eat_miniature.png" alt="logo I need Eat" title="page d'accueil" id="logo">
			</a>
		</p>
	</article>
	<div id="recherche">	
		<h2> Vente et échange de fruits et légumes frais </h2>
		<form action="" method="post" >
			<p>
<<<<<<< Updated upstream
				<input type="search" name="recherche" id="Barre" placeholder="Fruits, légumes, ..." size="60" maxlength="50"/>
=======
<<<<<<< HEAD
				<a href="../accueil/accueil.php">
					<img src="../images/images_site/logo_i_need_eat_miniature.png" alt="logo I need Eat" title="page d'accueil" id="logo">
				</a>
=======
				<input type="search" name="recherche" id="Barre" placeholder="Fruits, légumes, ..." size="60" maxlength="50"/>
>>>>>>> origin/master
>>>>>>> Stashed changes
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
	<br/>
	<br/>
	<nav id="navigation">
		<table>
			<td><a href="../offres/offres.php">Offres</a></td>
			<td><a href="../formulaires/annonce.php">Poser une annonce</a></td>
			<td><a href="../compte/mes_annonces.php">Mes annonces</a></td>
		</table>
	</nav>
</header>