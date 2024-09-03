<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=BOOTSTRAPCSS.'bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?=FONTAWESOMECSS.'fontawesome.min.css'?>">
    <link rel="stylesheet" href="<?=CSS.'Sign.css' ?>">

    <script src="<?=BOOTSTRAPJS.'bootstrap.min.js'?>"></script>
    <script src="<?=FONTAWESOMEJS.'fontawesome.min.js'?>"></script>
    <script src="<?=JS.'jquery.js' ?>"></script>
    <title>Inscription</title>
</head>
<body>
    <div class="logo">
        <h1><span id="akory">Akory</span> Bank</h1>
    </div>

    <p>Veuillez remplir les formulaires suivantes:</p>

    <div class="formulaire">
        <form action="<?= base_url('public/userStore')?>" method="POST">

            <div class="form-group row">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom"  required >
            </div>
            
            <div class="form-group row">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom"  required >
            </div>


            <div class="form-group row">
                <label for="cin">N° CIN</label>
                <input type="text" class="form-control" id="cin" name="cin"  required >
            </div>

            <div class="form-group row">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adress"  required >
            </div>

            <div class="form-group row">
                <label for="telephone">Téléphone</label>
                <input type="text" class="form-control" id="telephone" name="telephone"  required >
            </div>

            <div class="form-group row">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email"  required >
            </div>

            <div class="form-group row">
                <label for="mdp">Mot de passe</label>
                <input type="text" class="form-control" id="mdp" name="mdp"  required >
            </div>

            <button  class="btn btn-primary" id="sign">S'inscrire</button>
        </form>
</body>
</html>