<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=BOOTSTRAPCSS.'bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?=FONTAWESOMECSS.'fontawesome.min.css'?>">
    <link rel="stylesheet" href="<?=CSS.'Login.css' ?>">

    <script src="<?=BOOTSTRAPJS.'bootstrap.min.js'?>"></script>
    <script src="<?=FONTAWESOMEJS.'fontawesome.min.js'?>"></script>
    <script src="<?=JS.'jquery.js' ?>"></script>
    <title>Connexion</title>

</head>
<body>
    <div class="logo">
        <h1><span id="akory">Akory</span> Bank</h1>
    </div>
        <?php 
            if(session()->getFlashdata('status')){
                echo "<h3>".session()->getFlashdata('status')."</h3>";
            }
        ?>
    <div class="formulaire">
        <form action="<?= base_url('public/login')?>" method="post">

            <div class="form-group">
                <input type="text" class="form-control" id="telephone" name="telephone" placeholder="téléphone" required >
            </div>
            <div class="form-group">
                
                <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
            </div>
            <?php if (session()->getFlashdata('error')): ?>
            <div class="message_alert">
             <p><?= session()->getFlashdata('error') ?></p>
            </div>
            <?php endif; ?>
            <button  class="btn btn-primary" id="log"><span>Se connecter</span></button>

            <a href="<?= base_url('public/inscription')?>" class="btn btn-primary" id="sign">S'inscrire</a>
        </form>
    </div>
</body>
</html>