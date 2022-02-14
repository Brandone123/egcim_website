
<style type="text/css">
    * {margin: 0; padding: 0;}

/*div.prof {
  margin: 20px;
}*/

ul.prof {
  list-style-type: none;
  /*width: 300px;*/
}

h3.prof {
  font: bold 20px/2 Helvetica, Verdana, sans-serif;
}

li img.prof {
  float: left;
  margin: 0 15px 0 0;
  width: 25%;
}

li p.prof {
  font: 200 12px/1.5 Georgia, Times New Roman, serif;
}

li.prof {
  padding: 10px;
  overflow: auto;
}

li.prof:hover {
  background: #eee;
  cursor: pointer;
}
</style>
 
        
        <div id="templatemo_content">
        
            <div class="templatemo_box">
                <div class="section-heading style-2">
                    <dir>
                        <div id="cbox1">
                          <h4 style="color: black;"><?= $departement->nom_departement;?> </h4> 
                          <div class="line"></div>&nbsp
                          <span id="dots"></span>
                          <span>
                              <p style="text-align: justify; font-family: Roboto,sans-serif; font-size: 15px;">
                              <?= $departement->description;?>
                          </p>
                          </span>
                          
                          
                      </div>
                      <div class="prof">
                          <?php foreach ($enseignants as $key){?>
                        <ul class="prof">
                          <li class="prof">
                            <img src="<?= asset_url('photos/'.$key->photo)?>" class="prof">
                            <h4 class="prof"><a href="<?= site_url('profile/index/'.$key->id_enseignant)?>" class="post-title" style="color: black; font-size: 18px;"><?= $key->titre.' '.$key->noms_prenoms;?></h4>
                            <p class="prof"><u style="font-size: 14px;"><b>Grade:</b></u> <i><?= $key->grade;?></i></p>
                                      <p class="prof"><u><b>Fonction:</b></u> <i><?= $key->fonction;?></i></p>
                                      <p><a href="<?= site_url('profile/index/'.$key->id_enseignant)?>" class="prof" class="btn btn-info">Voir profil</a></p>
                          </li>
                        </ul>
                        <?php }?>
                      </div>
                    </dir>
                </div>
            </div>
            
        </div> <!-- end of templatemo_content -->
        
        