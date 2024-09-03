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

    <link rel="stylesheet" href="<?=CSS.'depot.css' ?>">

    <script src="<?=BOOTSTRAPJS.'bootstrap.min.js'?>"></script>
    <script src="<?=FONTAWESOMEJS.'fontawesome.min.js'?>"></script>
    <script src="<?=JS.'jquery.js' ?>"></script>
    <title>Depot</title>
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

    </header>
        <h1 class="titre">Faire un dépôt</h1>

        <div class="container contenu">
           
                
            <div class="formulaire">
                <form action="<?=  base_url('public/faireDepot')?>" method="post" >

                    <div class="mb-3">
                      <label for="montant" class="form-label">Montant à déposer (Ar)</label>
                      <input type="" class="form-control" id="montant" name="montant" required>
                      
                    </div>

                    <div class="mb-3">
                      <label for="montant" class="form-label">Téléphone</label>
                      <input type="" class="form-control" id="telephone" name="telephone" required>
                      
                    </div>
                    <div class="mb-3">
                      <label for="mdp" class="form-label">Mot de passe </label>
                      <input type="password" class="form-control" id="mdp" name="password" required>
                    </div>

                    <?php if (session()->getFlashdata('error')): ?>
                    
                        <p class="erreur"><?= session()->getFlashdata('error') ?></p>
                    
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('success')): ?>
                    
                    <p class="succes"><?= session()->getFlashdata('success') ?></p>
                    
                    <?php endif; ?>
                    
                    <button type="submit" class="btn btn-primary">Confirmer</button>
                  </form>
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