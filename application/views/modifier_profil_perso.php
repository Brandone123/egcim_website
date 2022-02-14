
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<title>Egcim</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<link rel="stylesheet" href="<?= asset_url('css/bootstrap.min.css')?>">
 <link rel="icon" href="<?= asset_url('img/logoEGCIM40.png')?>">
<style>
    body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 10px;
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
<div>
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
                  <a href="<?= site_url('login/logout')?>"></a>
              </li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
          <div class="card">
              <div class="card-body">
                <h3>Modification du profil</h3>
              </div>
          </div>
          <br><br>
          <div class="row gutters-sm">

            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <form method="post" action="<?= site_url('profile/modifier_post')?>" enctype="multipart/form-data">
                    
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Noms et prénoms</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="text" name="noms_prenoms" class="form-control" required value="<?= $user->noms_prenoms;?>">
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Phone</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="text" name="tel" class="form-control" required value="<?= $user->tel;?>">
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="email" name="email" class="form-control" required value="<?= $user->email;?>">
                        
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Email Professionnel</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="email" name="email_prof" class="form-control" value="<?= $user->email_prof;?>">
                        
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Fonction</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="text" name="fonction" class="form-control" required value="<?= $user->fonction;?>">
                        
                      </div>
                    </div>
                    <hr>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Brève Biographie</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <textarea name="bibliographie" class="form-control"><?= $user->biographie;?></textarea>
                      
                    </div>
                  </div>
                  <hr>
                  
                  <button class="btn btn-success">Valider</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</body>
<script src="<?= asset_url('js/bootstrap/bootstrap.min.js')?>"></script>
</html>
