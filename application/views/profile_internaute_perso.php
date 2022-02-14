
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<title>Egcim</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<link rel="stylesheet" href="<?= asset_url('css/bootstrap.min.css')?>">
 <link rel="shortcut icon" type="image/x-icon" href="<?= asset_url('img/logoEGCIM40.png')?>">
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
              <li class="breadcrumb-item"><a href="javascript:void(0)">Utilisateur</a></li>&nbsp/&nbsp
              <a href="<?= site_url('departements')?>">Département</a>&nbsp/&nbsp
              <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?= asset_url('photos/'.$user->photo)?>" alt="Utilisateur" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?= $user->titre.' '.$user->noms_prenoms;?></h4>
                      <p class="text-secondary mb-1"><?= $user->grade;?></p>
                      <p class="text-muted font-size-sm"><?= $user->fonction;?></p>
                      <!-- <button class="btn btn-outline-primary">Message</button> -->
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
                  
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-1"> </div>
                    <div class="col-sm-10" style="text-align: justify;">
                        <h6 class="mb-0">Brève Biographie</h6>
                        <?= $user->bibliographie;?>
                    </div>
                    <div class="col-sm-1"> </div>
                  </div>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</body>
<script src="<?= asset_url('js/bootstap/bootstrap.min.js')?>"></script>
</html>
