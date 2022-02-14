 <style type="text/css">

    @media all and (max-width: 1024px) {
    .border {
        max-width: 335px;
        width: auto;
        border-collapse: collapse; 
    }
}


 </style>

        <div id="templatemo_content">
        
            <div class="templatemo_box">
                <div class="section-heading style-2">
                    
                        <br><h5 style="color: black;">Staff de L'EGCIM</h5>
                        <div class="line"></div>&nbsp
                        <div class="border">
                          <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                              <thead>
                                <tr>
                                  <th>N°</th>
                                  <th>Noms et Prénom</th>
                                  <th>Département</th>
                                  <th>Grade</th>
                                  <th>Fonction</th>
                                  <th>Visité</th>
                                </tr>
                              </thead>
                              <tbody>
                                 <?php foreach($enseignants as $key): ?>

                                <tr>

                                  <td><?php echo $key->id_enseignant ?></td>
                                  <td><?php echo $key->titre.' '.$key->noms_prenoms ?></td>
                                  <td><?php echo $key->departement?></td>
                                  <td><?php echo $key->grade ?></td>
                                  <td><?php echo $key->fonction ?></td>
                                  <td><a href="<?= site_url('profile/index/'.$key->id_enseignant)?>" class="prof" class="btn btn-info">Voir profil</a></td>

                                  
                                </tr>
                                <?php endforeach;?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        
                </div>
            </div>
            
        </div> <!-- end of templatemo_content -->
        
    
