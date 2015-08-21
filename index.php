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
        
        <div class="container">
            
            <div class="jumbotron">
                <h1>Formulaire d'Inscription</h1>
            </div>

            <form method="POST" action="traitement.php">

                <!-- Date -->
                <p id="date"><label for="quand">Date de ton inscription : </label> <input type="date" name="quand" id="quand" placeholder="jj/mm/aaaa" maxlength="10" size="30"/></p>

                <fieldset>
                    <legend>Qui es-tu ?</legend>
                    
                    <div class="row">
                        <!-- Nom -->
                        <p class="col-xs-12"><label for="nom">NOM : </label><br/>
                        <input type="text" name="nom" id="nom" placeholder="Ex: BLACHAS" maxlength="50" size="50"/></p>

                        <!-- Prénom -->
                        <p class="col-xs-12"><label for="prenom">Prénom : </label><br/>
                        <input type="text" name="prenom" id="prenom" placeholder="Ex: Jérôme" maxlength="50" size="50"/></p>

                        <!-- Pseudo -->
                        <p class="col-xs-12"><label for="pseudo">Pseudo : </label><br/>
                        <input type="text" name="pseudo" id="pseudo" placeholder="Ex: toto83" maxlength="50" size="50"/></p>

                        <!-- Age -->    
                        <p class="col-xs-12"><label for="age">Age : </label><br/>
                        <input type="text" name="age" id="age" placeholder="Ex: 32" maxlength="10" size="30"/></p>

                        <!-- Région -->     
                        <p class="col-xs-12"><label for="region">D'où viens-tu ? </label><br/>
                        <input type="text" name="region" id="region" placeholder="Ex: Bordeaux" maxlength="10" size="30"/></p>
                    </div>
                    
                </fieldset>



                <fieldset>
                    <legend>Comment puis-je te joindre ?</legend>

                    <div class="row">
                        <!-- Adresse mail -->       
                        <p class="col-xs-12"><label for="mail">Adresse e-mail : </label><br/>
                        <input type="email" name="mail" id="mail" placeholder="Ex: toto@gmail.com" maxlength="30" size="30"/></p>

                        <!-- Téléphone -->      
                        <p class="col-xs-12"><label for="phone">Numéro de téléphone :  </label><br/>
                        <input type="tel" name="phone" id="phone" placeholder="Ex: 01.02.03.04.05" maxlength="14" size="30"/></p>
                    </div>

                </fieldset>

                
                <fieldset>
                    <legend>Alimentation</legend>
                   
                   <div class="row"> 
                        <!-- Végétarien -->
                        <p><label for="vegetarien" class="col-xs-2">Es-tu végétarien ? </label> <input type="checkbox" name="vegetarien" id="vegetarien" class="col-xs-1"/></p>

                        <!-- Viandes -->
                        <p class="col-xs-12">Si tu manges de la viande, lesquelles préfères-tu ?</p>
                            <p class="col-xs-12"><label for="boeuf" class="col-xs-1">Boeuf  </label> <input type="checkbox" name="boeuf" id="boeuf" class="col-xs-1"/></p>
                            <p class="col-xs-12"><label for="porc" class="col-xs-1">Porc </label> <input type="checkbox" name="porc" id="porc" class="col-xs-1"/></p>
                            <p class="col-xs-12"><label for="agneau" class="col-xs-1">Agneau </label> <input type="checkbox" name="agneau" id="agneau" class="col-xs-1"/></p>
                            <p class="col-xs-12"><label for="veau" class="col-xs-1">Veau </label> <input type="checkbox" name="veau" id="veau" class="col-xs-1"/></p>
                            <p class="col-xs-12"><label for="mouton" class="col-xs-1">Mouton </label> <input type="checkbox" name="mouton" id="mouton" class="col-xs-1"/></p>
                            <p class="col-xs-12"><label for="cheval" class="col-xs-1">Cheval </label> <input type="checkbox" name="cheval" id="cheval" class="col-xs-1"/></p>
                            <p class="col-xs-12"><label for="volaille" class="col-xs-1">Volaille </label> <input type="checkbox" name="volaille" id="volaille" class="col-xs-1"/></p>
                            <p class="col-xs-12"><label for="poisson" class="col-xs-1">Poisson </label> <input type="checkbox" name="poisson" id="poisson" class="col-xs-1"/></p>
                            <p class="col-xs-12"><label for="gibier" class="col-xs-1">Gibier </label> <input type="checkbox" name="gibier" id="gibier" class="col-xs-1"/></p>
                            <p class="col-xs-12"><label for="autre" class="col-xs-1">Autre </label> <input type="checkbox" name="autre" id="autre" class="col-xs-1"/></p>
                    </div>
                </fieldset>



                <fieldset>
                    <legend>Qu'as-tu pensé de ce formulaire ?</legend>

                    <div class="row">
                        <!-- Note 1-->      
                        <p class="col-xs-12"><label for="note-1">Esthétique : </label><br/>
                        <input type="range" min="0" max="10" step="1" name="note-1" id="note-1" /></p><br/>

                        <!-- Note 2-->      
                        <p class="col-xs-12"><label for="note-2">Mise en page : </label> <input type="range" min="0" max="10" step="1" name="note-2" id="note-2"/></p><br/>

                        <!-- Note 3-->      
                        <p class="col-xs-12"><label for="note-3">Code HTML : </label> <input type="range" min="0" max="10" step="1" name="note-3" id="note-3"/></p><br/>

                        <!-- Note 4-->      
                        <p class="col-xs-12"><label for="note-4">Code CSS : </label> <input type="range" min="0" max="10" step="1" name="note-4" id="note-4"/></p>

                        <!-- Note 5-->      
                        <p class="col-xs-12"><label for="note-5">Code PHP : </label> <input type="range" min="0" max="10" step="1" name="note-5" id="note-5"/></p>

                        <!-- Note 6-->      
                        <p class="col-xs-12"><label for="note-6">Note globale : </label> <input type="number" min="0" max="10" step="1" name="note-6" id="note-6"/></p>
                            
                        <!-- Message -->        
                        <p class="col-xs-12"><label for="message">Commentaires : </label></p>
                        <p class="col-xs-12"><textarea type="text" name="message" id="message" rows="20" cols="50"/>C'est à moi qu'tu parles ?!</textarea></p>
                    </div>
                </fieldset>

                <p><input type="submit" class="btn-custom"/></p>

            </form>

            <footer class="row text-center">
            <a class="btn btn-default" href="https://twitter.com/jph33600" target="_blank" title="Twitter - JPH33600"><i class="fa fa-twitter fa-2x"></i></a>
            <a class="btn btn-default" href="https://www.facebook.com/profile.php?id=100009716163256" target="_blank" title="Facebook - JPH JPH"><i class="fa fa-facebook fa-2x"></i></a>
            <a class="btn btn-default" href="https://plus.google.com/u/2/103683793353721378582/about" target="_blank" title="Google+ - JPH33600"><i class="fa fa-google-plus fa-2x"></i></a>
            <a class="btn btn-default" href="https://www.linkedin.com/profile/view?id=422064228&amp;trk=nav_responsive_tab_profile" target="_blank" title="LinkedIn - JPH33600"><i class="fa fa-linkedin fa-2x"></i></a>
            <a class="btn btn-default" href="https://fr.pinterest.com/jph33600/" target="_blank" title="Pinterest - JPH33600"><i class="fa fa-pinterest fa-2x"></i></a>
            <a class="btn btn-default" href="https://instagram.com/jph33600/" target="_blank" title="Instagram - JPH33600"><i class="fa fa-instagram fa-2x"></i></a>
            </footer>
        </div>

        

    </body>
</html>