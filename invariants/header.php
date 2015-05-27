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
				<li><a href="#">Demandes</a></li>
				<li><a href="../formulaires/annonce.php">Poser une annonce</a></li>
				<li><a href="../compte/mes_annonces.php">Mes annonces</a></li>
			</ul>
		</nav>
	</header>