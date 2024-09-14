<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=BOOTSTRAPCSS.'bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?=FONTAWESOMECSS.'fontawesome.min.css'?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="stylesheet" href="<?=CSS.'back.css' ?>">

    <script src="<?=BOOTSTRAPJS.'bootstrap.min.js'?>"></script>
    <script src="<?=FONTAWESOMEJS.'fontawesome.min.js'?>"></script>
    <script src="<?=JS.'jquery.js' ?>"></script>
    <title>Back-office</title>
</head>
<body>
    <div class="navigation">
        <span class="logo"><h1><span id="akory">Akory</span> Bank</h1></span>

        <div class="menu">
            <a href="#">Clients</a>
        </div>
    </div>


    <div class="droite">

        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Listes des clients
                            <a href="<?= base_url('public/dirAjout')?>" class="btn btn-primary float-end">Ajouter client</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>CIN</th>
                                    <th>Adresse</th>
                                    <th>Téléphone</th>
                                    <th>Email</th>
                                    <th>Solde</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($user as $row): ?>

                                    <tr>
                                        <td><?= $row['id']?></td>
                                        <td><?= $row['Nom']?></td>
                                        <td><?= $row['Prenom']?></td>
                                        <td><?= $row['CIN']?></td>
                                        <td><?= $row['Adresse']?></td>
                                        <td><?= $row['Telephone']?></td>
                                        <td><?= $row['Email']?></td>
                                        <td><?= $row['Solde']?></td>
                                        <td id="boutons">
                                            <a href="" class="btn btn-success btn-sm">Modifier</a>
                                            <a href="" class="btn btn-danger btn-sm">Supprimer</a>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>
</html>