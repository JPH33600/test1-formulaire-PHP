<!DOCTYPE html>
<html>

	<head>

        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inscription</title>
        <meta name="description" content="test de formulaire par JPH33600">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/formulaire.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

	</head>

	<body>

	<?php
	
	function donnerladate()
		{
			$jour = date('d');
			$mois = date('m');
			$annee = date('Y');
			$heure = date('H')+6;
			$minute = date('i');

			echo 'Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . ' et il est exactement ' . $heure . 'h' . $minute . '.<br/>';
		}
	?>
		<div class="container">
			<p>Bonjour <?php echo htmlspecialchars($_POST['pseudo']) ?> !</p>
			<p><?php donnerladate();?></p>
			<p>Voici une petite synthèse des renseignements que tu as donnés en remplissant le formulaire précédent :</p>
				<ul>
					<?php 
						if (isset($_POST['pseudo']) and isset($_POST['prenom']) and isset($_POST['nom']))
							{
								echo "Ton pseudo est " . htmlspecialchars($_POST['pseudo']) . " mais en vrai tu t'appelles " . htmlspecialchars($_POST['prenom']) . " " . htmlspecialchars($_POST['nom']) . ".<br/>";
							}
						else
							{
								echo "Tu as oublié de renseigner ton pseudo, ton prénom et/ou ton nom... Merci d'y remédier.";
							}
					?>

					<?php 
						if (isset($_POST['quand']))
							{
								echo "Tu t'es inscrit(e) le " . htmlspecialchars($_POST['quand']) . ".<br/>";
							}
						else
							{
								echo "Tu n'as pas coché ta date d'inscription... Comment veux-tu queje m'en sorte moi ?!";
							}
					?>

					<?php 
						if (isset($_POST['age']))
							{
								echo "Tu as " . htmlspecialchars($_POST['age']) . " ans et tu viens de " . htmlspecialchars($_POST['region']) . ".<br/>";
							}
						else
							{
								echo "Tu n'as pas d'âge et tu ne viens de nulle part... Soit t'es immortel et sénile, soit tu es un extraterrestre !";
							}
					?>

					<?php 
						if (isset($_POST['vegetarien']))
							{
								echo "En ce qui concerne ton alimentation, tu es vététarien(ne), tu ne manges donc pas de viande.<br/>";
							}
						else
							{
								echo "	En ce qui concerne ton alimentation :
											<ul>
												<li> tu n'es pas vététarien(ne) et tu manges donc de la viande.</li>
												<li> tu aimes tout particulièrement :
													<ul>";
														if (isset($_POST['boeuf']))
															{
																echo "<li> le boeuf</li>";
															}
														if (isset($_POST['porc']))
															{
																echo "<li> le porc</li>";
															}
														if (isset($_POST['agneau']))
														{
															echo "<li> l'agneau</li>";
														}
														if (isset($_POST['veau']))
															{
																echo "<li> le veau</li>";
															}
														if (isset($_POST['mouton']))
															{
																echo "<li> le mouton</li>";
															}
														if (isset($_POST['cheval']))
														{
															echo "<li> le cheval (hmmm yabon le cheval)</li>";
														}
														if (isset($_POST['volaille']))
														{
															echo "<li> la volaille (poulet, dinde, chapon, poule au pot, coq au vin, etc.)</li>";
														}
														if (isset($_POST['poisson']))
														{
															echo "<li> le poisson</li>";
														}
														if (isset($_POST['gibier']))
														{
															echo "<li> le gibier</li>";
														}
														if (isset($_POST['autre']))
														{
															echo "<li> la chair humaine ???? brrrr...</li>";
														}
															"
													</ul>
												</li>
											</ul>
									";
							}
					?>

					<?php 
						if (isset($_POST['phone']))
							{
								echo "Tu m'as dit que je pouvais te joindre au " . htmlspecialchars($_POST['phone']) . ".";
							}
					?>

					<?php 
						if (isset($_POST['mail']))
							{
								echo "Je peux éventuellement t'écrire à l'adresse " . htmlspecialchars($_POST['mail']) . ".";
							}
					?>

				</ul>
			<p></p>
		</div>



	</body>

</html>