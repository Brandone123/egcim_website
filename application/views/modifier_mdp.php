
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
                <h3>Modification du Mot de passe</h3>
              </div>
          </div>
          <br><br>
          <div class="row gutters-sm">

            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <form method="post" action="<?= site_url('profile/modifier_mdp_post')?>" enctype="multipart/form-data" onSubmit="return validatePassword();">
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Login</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="text" name="login" class="form-control" value="<?= $user->login;?>">
                      </div>
                    </div>
                    <hr>
                    <div class="row" hidden>
                      <div class="col-sm-3">
                        <h6 class="mb-0">Ancien Mot de passe</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="password" name="password" class="form-control">
                        
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Entrez le nouveau mot de passe</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="password" name="npassword" class="form-control" required>
                        
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Entrez de nouveau le mot de passe</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="password" name="vnpassword" class="form-control" required>
                        
                      </div>
                    </div>
                    <hr>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <button type="submit" class="btn btn-success">Valider</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</body>
<!-- <script src="<?= asset_url('js/bootstrap/bootstrap.min.js')?>"></script> -->
<script type="text/javascript">

    function validatePassword() {
    var password,npassword,vnpassword,output = true;

    password = document.frmChange.password;
    npassword = document.frmChange.npassword;
    vnpassword = document.frmChange.vnpassword;

    if(!password.value) {
      password.focus();
      document.getElementById("password").innerHTML = "required";
      output = false;
    }
    else if(!npassword.value) {
      npassword.focus();
      document.getElementById("npassword").innerHTML = "required";
      output = false;
    }
    else if(!vnpassword.value) {
      vnpassword.focus();
      document.getElementById("vnpassword").innerHTML = "required";
      output = false;
    }
    if(npassword.value != vnpassword.value) {
      npassword.value="";
      vnpassword.value="";
      npassword.focus();
      document.getElementById("vnpassword").innerHTML = "not same";
      output = false;
    }   
    return output;
    }

</script>
</html>
