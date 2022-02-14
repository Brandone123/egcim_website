
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<title>Egcim</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<link rel="stylesheet" href="http://egcim.smartedubizness.com/assets/css/bootstrap.min.css">
 <link rel="shortcut icon" type="image/x-icon" href="http://egcim.smartedubizness.com/assets/img/logo_un.jfif">
 <link rel="stylesheet" type="text/css" href="http://egcim.smartedubizness.com/assets/admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<style>
    body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;  
    font-size: 15px; font-family:Roboto,sans-serif  
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
</style>
</head>
<body>
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <a href="<?= site_url('/')?>">Accueil</a>&nbsp/&nbsp
              <li class="breadcrumb-item"><a href="javascript:void(0)">Candidat</a></li>&nbsp/&nbsp
              <li class="breadcrumb-item active" aria-current="page">Profile</li>/
              <li><a href="<?= site_url('concours/logout')?>">Deconnecter</a></li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
          <div class="row">
            <h3>Candidat au concours de l'EGCIM UN 2021</h3>
          </div>
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    
                    <div class="mt-3">
                      <h4>Noms et Prenoms: <?= $user->noms.' '.$user->prenoms;?></h4>
                      <p class="text-secondary mb-1">
                        Cycle: <?= $user->anne_entree;?></p>
                      <p class="text-muted font-size-sm">
                        Centre de: <?= $user->centre_examen;?></p>
                      <p class="text-muted font-size-sm">
                        Langue de composition: <?= $user->langue;?></p>
                      <h4>Code: <?= $user->code;?></h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="2" y1="12" x2="22" y2="12"></line>
                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                        </svg>
                        Adresse
                    </h6>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="d-flex align-items-center mb-3">Date de naissance:</h6>
                      <small><?= (new DateTime($user->date_naissance))->format('d/m/Y')?></small> 
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                       <h6 class="d-flex align-items-center mb-3">Email Personnel</h6>
                      <small><?= $user->email;?></small>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                       <h6 class="d-flex align-items-center mb-3">Lieu de naissance</h6>
                      <small><?= $user->lieu_naissance;?></small>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Téléphone</h6>
                    <span class="text-secondary"><?= $user->tel;?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Genre</h6>
                    <span class="text-secondary"><?= $user->sexe;?></span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-10">
                        <h6 class="mb-0">Pays</h6>
                        <?= $user->pays;?>
                    </div>
                    <div class="col-sm-1"> </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-4">
                      <h6 class="mb-0">Region d'origine</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= $user->region_origine;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <h6 class="mb-0">Obtention du Bacc</h6>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3 text-secondary">
                      Annee: <?= $user->annee_bacc;?>
                    </div>
                    <div class="col-sm-3 text-secondary">
                      Serie: <?= $user->serie;?>
                    </div>
                    <div class="col-sm-3 text-secondary">
                      Centre: <?= $user->centre_bacc;?>
                    </div>
                    <div class="col-sm-3 text-secondary">
                      Pays: <?= $user->pays_bacc;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <h6 class="mb-0">Obtention de la Licence</h6>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 text-secondary">
                      Annee: <?= $user->annee_licence;?>
                    </div>
                    <div class="col-sm-6 text-secondary">
                      Domaine: <?= $user->domaine;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <h6 class="mb-0">Informations paiement</h6>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4 text-secondary">
                      Date de paiement: <?= (new DateTime($user->date_paiement))->format('d/m/Y');?>
                    </div>
                    <div class="col-sm-4 text-secondary">
                      Agence: <?= $user->agence;?>
                    </div>
                    <div class="col-sm-4 text-secondary">
                      Numero du recu: <?= $user->numero_recu;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Telecharger ma fiche</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <a href="<?= site_url('pdf_test/imprimer')?>" target='_blank'>
                        <i class="fa fa-download"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</body>
<script src="http://egcim.smartedubizness.com/assets/js/bootstrap.min.js"></script>
</html>
