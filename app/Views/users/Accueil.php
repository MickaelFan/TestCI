<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=BOOTSTRAPCSS.'bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?=FONTAWESOMECSS.'fontawesome.min.css'?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="stylesheet" href="<?=CSS.'accueil.css' ?>">

    <script src="<?=BOOTSTRAPJS.'bootstrap.min.js'?>"></script>
    <script src="<?=FONTAWESOMEJS.'fontawesome.min.js'?>"></script>
    <script src="<?=JS.'jquery.js' ?>"></script>
    <title>Accueil</title>
</head>
<body>
    <header>
        <span class="logo"><h1><span id="akory">Akory</span> Bank</h1></span>

        <nav class=" d-none d-sm-block navbar">
            
                <a href="<?=  base_url('public/accueil')?>">Accueil</a>
                <a href="<?=  base_url('public/depot')?>">Dépôt</a>
                <a href="<?=  base_url('public/retrait')?>">Retrait</a>
                <a href="#">Profil</a>

            
            
        </nav>
        <i class="fas fa-bars bouton"></i>
    </header>

    <div class="menu">
        <ul class="container">
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Dépôt</a></li>
            <li><a href="#">Retrait</a></li>
            <li><a href="#">Profil</a></li>
        </ul>
    </div>

    <div class="contenu container">
            <div class="row">
                <div class="col-md-8 gauche">
                    <h2><?=$welcome_message?></h2>

                    <p class="p1">Nous sommes ravis de vous accueillir sur votre espace bancaire en ligne. Ici, vous avez accès à tous vos comptes et services en un seul endroit, avec une sécurité renforcée et une interface intuitive pour faciliter la gestion de vos finances.</p>
                    
                    <p><strong>Gérez vos finances en toute simplicité :</strong></p>
                
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vue d’ensemble du compte : Consultez votre solde et suivez vos transactions récentes d’un simple coup d’œil.</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Effectuez des virements : Transférez de l’argent entre vos comptes ou vers des bénéficiaires externes en quelques clics.</p>
                
                    <p><strong>Nous sommes là pour vous aider :</strong></p>
                    
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Notre équipe de support est disponible pour répondre à vos questions et vous assister dans l’utilisation de notre plateforme. Vous pouvez nous contacter par chat, téléphone, ou email à tout moment.</p>
                    <p>Merci de faire confiance à [Nom de la Banque] pour la gestion de vos finances. Nous nous engageons à vous offrir une expérience bancaire sûre, fluide et personnalisée.</p>
                    <p>Explorez les fonctionnalités de votre espace maintenant et prenez le contrôle de votre avenir financier !</p>
                
                </div>

                <div class="col-md-4 droite">
                    
                    <div class="container solde">
                        <h2>Solde</h2>
                        <h3><?= $solde?> Ar</h3>

                            
                                <a href="<?=  base_url('public/depot')?>" type="button" class="btn btn-success btn">Déposer</a>
                                <a href="<?=  base_url('public/retrait')?>" type="button" class="btn btn-danger btn">Retirer</a>
                            
                            
                    </div>
                </div>
            </div>
         </div>
    </div>

<footer>
    <div class="icon_footer">
        <i class="fab fa-facebook icon"></i>
        <i class="fab fa-facebook-messenger icon"></i>
        <i class="fas fa-envelope icon"></i>
    </div>
</footer>
</body>
</html>