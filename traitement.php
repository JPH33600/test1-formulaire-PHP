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
			<h1>Bonjour <?php echo htmlspecialchars($_POST['pseudo']) ?> !</h1>
			<p><?php donnerladate();?></p>
			<p>Voici une petite synthèse des renseignements que tu as donnés en remplissant le formulaire précédent :</p>
				<ul>
					<li>
					<?php 
						if (!empty($_POST['pseudo']) and !empty($_POST['prenom']) and !empty($_POST['nom']))
							{
								echo 'Ton pseudo est ' . htmlspecialchars($_POST['pseudo']) . ' mais en vrai tu t\'appelles ' . htmlspecialchars($_POST['prenom']) . ' ' . htmlspecialchars($_POST['nom']) . '.<br/>';
							}
						else
							{
								echo 'Tu n\'as pas renseigné de pseudo, de prénom et/ou de nom... Mais t\'es qui en fait ?!?';
								$i++;
							} 
					?>
					</li>

					<li>
					<?php 
						if (!empty($_POST['quand']))
							{
								echo 'Tu t\'es inscrit(e) le ' . htmlspecialchars($_POST['quand']) . '.<br/>';
							}
						else
							{
								echo 'Tu n\'as pas renseigné ta date d\'inscription...';
								$i++;
							}
					?>
					</li>

					<li>
					<?php 
						if (!empty($_POST['age']))
							{
								echo 'Tu as ' . htmlspecialchars($_POST['age']) . ' ans et tu viens de ' . htmlspecialchars($_POST['region']) . '.<br/>';
							}
						else
							{
								echo 'Tu n\'as pas renseigné ton âge...';
								$i++;
							}
					?>
					</li>

					<li>
					<?php 
						if (isset($_POST['vegetarien']))
							{
								echo 'En ce qui concerne ton alimentation, tu es vététarien(ne), tu ne manges donc pas de viande.<br/>';
							}
						else
							{
								if (isset($_POST['boeuf']) or isset($_POST['porc']) or isset($_POST['agneau']) or isset($_POST['veau']) or isset($_POST['mouton']) or isset($_POST['cheval']) or isset($_POST['volaille']) or isset($_POST['poisson']) or isset($_POST['gibier']) or isset($_POST['autre']))
									{
										echo 'En ce qui concerne ton alimentation, tu n\'es pas vététarien(ne) et tu manges donc de la viande... surtout :<br/>';
											if (isset($_POST['boeuf']))
												{
													echo '<ul><li> le boeuf</li></ul>';
												}
											if (isset($_POST['porc']))
												{
													echo '<ul><li> le porc</li></ul>';
												}
											if (isset($_POST['agneau']))
												{
													echo '<ul><li> l\'agneau</li></ul>';
												}
											if (isset($_POST['veau']))
												{
													echo '<ul><li> le veau</li></ul>';
												}
											if (isset($_POST['mouton']))
												{
													echo '<ul><li> le mouton</li></ul>';
												}
											if (isset($_POST['cheval']))
												{
													echo '<ul><li> le cheval (en particulier le poney... hmmmm le poney...)</li></ul>';
												}
											if (isset($_POST['volaille']))
												{
													echo '<ul><li> la volaille (poulet, dinde, chapon, poule au pot, coq au vin, etc.)</li></ul>';
												}
											if (isset($_POST['poisson']))
												{
													echo '<ul><li> le poisson</li></ul>';
												}
											if (isset($_POST['gibier']))
												{
													echo '<ul><li> le gibier</li></ul>';
												}
											if (isset($_POST['autre']))
												{
													echo '<ul><li> la chair humaine ???? brrrr...</li></ul>';
												}
									}								
								
									else
										{
											echo 'Tu n\'as rien précisé en ce qui concerne ton alimenation...';
											$i++;
										}
							}
					?>
					</li>

					<li>
					<?php 
						if (!empty($_POST['phone']))
							{
								echo 'Tu m\'as dit que je pouvais te joindre au ' . htmlspecialchars($_POST['phone']) . '.';
							}
						else
							{
								echo 'Tu n\'as pas renseigné de numéro de téléphone...';
								$i++;
							}
					?>
					</li>

					<li>
					<?php 
						if (!empty($_POST['mail']))
							{
								echo 'Je peux éventuellement t\'écrire à l\'adresse ' . htmlspecialchars($_POST['mail']) . '.';
							}
						else
							{
								echo 'Tu n\'as pas renseigné d\'adresse mail...';
								$i++;
							}
					?>
					</li>

				</ul>

				<?php 

					if ($i >= 6)
						{
							echo '<div class="rien">Tu n\'as rien renseigné du tout en fait !!</div>';
						}

				?>
		</div>



	</body>

</html>