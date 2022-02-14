
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<title>Egcim</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<link rel="stylesheet" href="<?= asset_url('css/bootstrap.min.css')?>">
<link rel="stylesheet" href="<?= asset_url('css/font-awesome.min.css')?>">
 <link rel="icon" href="<?= asset_url('img/logoEGCIM40.png')?>">
 <script type="text/javascript" src="<?= asset_url('js/jquery/jquery-2.2.4.min.js')?>"></script>
 <script src="<?= asset_url('js/bootstrap/bootstrap.min.js')?>"></script>
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
h6 span .btn-success {
  background-color: #3483eb!important;
}
</style>
</head>
<body>
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= site_url('/')?>">Accueil</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">Utilisateur</a></li>
              <li class="breadcrumb-item"><a href="<?= site_url('departements');?>">Département</a></li>
              <li class="breadcrumb-item active" aria-current="page">Profile</li>

              &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
              <li>
                  <a href="<?= site_url('login/logout')?>">Se Deconnecter</a>
              </li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="http://egcim-univ-ndere.cm/assets/photos/<?=$user->photo?>" alt="Utilisateur" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?= $user->titre.' '.$user->noms_prenoms;?></h4>
                      <p class="text-secondary mb-1"><?= $user->grade;?></p>
                      <p class="text-muted font-size-sm"><?= $user->fonction;?></p>
                        <p><span class='btn btn-outline-primary' data-toggle='modal' data-target='#mdp'>
                            <i class="fa fa-edit">Modifier Mot de passe</i>
                        </span></p>
                      <a class="btn btn-outline-primary" href="<?= site_url('profile/modifier/'.$user->id_enseignant)?>">Modifier le profil</a>
                      
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
                    <span class="text-secondary">454, Ngaoundéré</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                       <h6 class="d-flex align-items-center mb-3">Email Personnel</h6>
                      <small><?= $user->email;?></small>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Email professionnel</h6>
                    <span class="text-secondary"><?= $user->email_prof;?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Téléphone</h6>
                    <span class="text-secondary"><?= $user->tel;?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Enseignements</h6>
                    <span class="text-secondary"><?= $user->enseignements;?></span>
                  </li>
                </ul>
              </div>

              <div class="card mt-3">
                <div style="margin: 15px">
                  <b><p>Publications</p></b>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0">
                          Journaux et Articles
                      </h6>
                      <span class="text-secondary"></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                         <h6 class="d-flex align-items-center mb-3">Conferences et Colloques</h6>
                        <small></small>
                    </li>
                  </ul>
                  </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12" style="text-align: justify;">
                        <h6 class="mb-0">Brève Biographie</h6>
                        <div class="text-secondary"><?= $user->bibliographie;?></div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-4">
                      <h6 class="mb-0">Axe de recherche</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= $user->axe_recherche;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Domaine</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?= $user->domaine;?>
                    </div>
                  </div>
                  <hr>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Lien vers mon équipe de recherche</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <a href="">
                        <?= $user->equipe;?>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <div style="margin: 15px">
                  <b><p>Publications</p></b>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0">
                          Articles 
                          <span class='btn btn-success' data-toggle='modal' data-target='#journaux' id=''>
                            <i class="fa fa-plus"></i>
                          </span>
                      </h6>
                      <span class="text-secondary"></span>
                    </li>
                    <li class="list-group-item">
                      <?php foreach ($journaux as $key) {?>
                        <b>Titre: <?= $key->titre;?></b><br>
                        <i>Nom: <?= $key->name;?></i>
                        <p>Auteurs: <?= $key->auteurs;?></p>
                        <p>Annee: <?= $key->annee;?></p>
                      <?php } ?>
                      <span class="text-secondary">Articles</span><hr>
                    </li>
                    <!-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                         <h6 class="d-flex align-items-center mb-3">
                         Articles
                         <span class='btn btn-success' data-toggle='modal' data-target='#articles' id=''>
                            <i class="fa fa-plus"></i>
                          </span>
                       </h6>
                    </li>
                    <li class="list-group-item">
                      <?php foreach ($articles as $key) {?>
                        <b>Titre: <?= $key->titre;?></b><br>
                        <i>Nom: <?= $key->name;?></i>
                        <p>Auteurs: <?= $key->auteurs;?></p>
                        <p>Annee: <?= $key->annee;?></p>
                      <?php } ?>
                      <span class="text-secondary">Articles</span><hr>
                    </li> -->
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="d-flex align-items-center mb-3">
                          Conferences et Colloques
                          <span class='btn btn-success' data-toggle='modal' data-target='#conferences' id=''>
                            <i class="fa fa-plus"></i>
                          </span>
                        </h6>
                    </li>
                    <li class="list-group-item">
                      <?php foreach ($conferences as $key) {?>
                        <b>Titre: <?= $key->titre;?></b><br>
                        <i>Nom: <?= $key->name;?></i>
                        <p>Auteurs: <?= $key->auteurs;?></p>
                        <p>Annee: <?= $key->annee;?></p>
                        <p>Lieu: <?= $key->lieu;?></p>
                      <?php } ?>
                      <span class="text-secondary">Conferences/Colloques</span><hr>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="modal fade" id="journaux" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" ></h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form method="post" action="<?= site_url('journaux') ?>">
                    <strong>Liste des auteurs (separes par la virgule):</strong>
                    <input name='auteurs' id="auteurs" class="form-control" required placeholder="Auteurs" type="text"><br>
                    <strong>Titre:</strong>
                    <input name='titre' id="titre" class="form-control" required placeholder="Titre" type="text"><br>
                    <strong>Nom du journal:</strong>
                    <input name='name' id="name" class="form-control" required placeholder="Nom du journal" type="text"><br>
                    <strong>Annee de publication:</strong>
                    <input name='annee' id="anne" class="form-control" required placeholder="Annee de publication" type="number" step="1" min="1990" max="2021"><br>
                    <div class="modal-footer">
                        <button type="submit" id="confirmer" class="btn btn-success">Modifier</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        
                    </div>
                  </form>
              </div>
          </div>
        </div>
    </div>
    <div class="modal fade" id="mdp" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" >MODIFICATION DU MOT DE PASSE</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form method="post" action="<?= site_url('profile/modifier_mdp_post') ?>" id='modif_mdp'>
                    <strong>Login:</strong>
                    <input name='login' class="form-control" required value="<?= $user->login?>" type="text"><br>
                    <strong>Ancien Mot de passe:</strong>
                    <input name='password' class="form-control" required value="<?= $user->password?>" type="password"><br>
                    <strong>Nouveau mot de passe:</strong>
                    <input name='npassword' id='npassword' class="form-control" required placeholder="Nouveau mot de passe" type="password"><br>
                    <strong>Confirmation de mot de passe:</strong>
                    <input name='cpassword' id='cpassword' class="form-control" required placeholder="Confirmez votre mot de passe" type="password"><br>
                    <div class="modal-footer">
                        <button type="submit" id="confirmer" class="btn btn-success">Modifier</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        
                    </div>
                  </form>
              </div>
          </div>
        </div>
    </div>
    <div class="modal fade" id="articles" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title">
                    AJOUT D'UN ARTICLE
                  </h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form method="post" action="<?= site_url('articles') ?>" id="formu1">
                    <strong>Liste des auteurs (separes par la virgule):</strong>
                    <input name='auteurs' id="auteurs" class="form-control" required placeholder="Auteurs" type="text"><br>
                    <strong>Titre:</strong>
                    <input name='titre' id="titre" class="form-control" required placeholder="Titre" type="text"><br>
                    <strong>Nom de l'article:</strong>
                    <input name='name' id="name" class="form-control" required placeholder="Nom de l'article" type="text"><br>
                    <strong>Annee de publication:</strong>
                    <input name='annee' id="anne" class="form-control" required placeholder="Annee de publication" type="number" step="1" min="1990" max="2021"><br>
                    <div class="modal-footer">
                        <button type="submit" id="confirmer" class="btn btn-success">Modifier</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        
                    </div>
                  </form>
              </div>
          </div>
      </div>
    </div>

    <div class="modal fade" id="conferences" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title">
                    AJOUT D'UNE CONFERENCE/COLLOQUES
                  </h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form method="post" action="<?= site_url('conferences') ?>" id="formu1">
                    <strong>Liste des auteurs (separes par la virgule):</strong>
                    <input name='auteurs' id="auteurs" class="form-control" required placeholder="Auteurs" type="text"><br>
                    <strong>Titre:</strong>
                    <input name='titre' id="titre" class="form-control" required placeholder="Titre" type="text"><br>
                    <strong>Nom de la conference/colloques:</strong>
                    <input name='name' id="name" class="form-control" required placeholder="Nom de l'article" type="text"><br>
                    <strong>Annee de publication:</strong>
                    <input name='annee' id="anne" class="form-control" required placeholder="Annee de publication" type="number" step="1" min="1990" max="2021"><br>
                    <strong>Lieu:</strong>
                    <input name='lieu' id="lieu" class="form-control" required placeholder="Lieu" type="text"><br>
                    <div class="modal-footer">
                        <button type="submit" id="confirmer" class="btn btn-success">Modifier</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        
                    </div>
                  </form>
              </div>
          </div>
      </div>
    </div>
<script type="text/javascript">
  $('#journaux').on('show.bs.modal', function (event)
    {
        var modal = $(this);
        modal.find('.modal-title').text("AJOUT D'UN JOURNAL")
    })

    $('#modif_mdp').submit(function(){
        var p = $('#cpassword').val();
        var np = $('#npassword').val();
        if(p != np){
            return false;
            $('#npassword').val('');
            $('#cpassword').val('');
        }
    })
</script>
</body>

</html>
