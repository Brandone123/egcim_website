<style type="text/css">
    /*body {
    background: #262a2b;
}*/
.tilesWrap {
    padding: 0;
    margin: 10px;
    list-style: none;
    text-align: center;
}
.tilesWrap li {
    display: inline-block;
    /*width: 46%;
    min-width: 200px;
    max-width: 430px;*/
    padding: 60px 22px 14px;
    position: relative;
    vertical-align: top;
    margin: 10px;
    font-family: 'helvetica', san-serif;
    min-height: 25vh;
    background: #163062;
    border: 1px solid #252727;
    text-align: left;
}
@media all and (max-width: 1024px) {
    .tilesWrap li {
        width: auto;
    }
}


.tilesWrap li h2 {
    font-size: 114px;
    margin: 0;
    position: absolute;
    opacity: 0.2;
    top: 50px;
    right: 10px;
    transition: all 0.3s ease-in-out;
}
.tilesWrap li h3 {
    font-size: 20px;
    color: #b7b7b7;
    margin-bottom: 5px;
}
.tilesWrap li p {
    font-size: 16px;
    line-height: 19px;
    color: #b7b7b7;
    margin-top: 9px;
}
.tilesWrap li button {
    background: transparent;
    border: 1px solid #b7b7b7;
    padding: 10px 20px;
    color: #b7b7b7;
    border-radius: 3px;
    position: relative;
    transition: all 0.3s ease-in-out;
    transform: translateY(-40px);
    opacity: 0;
    cursor: pointer;
    overflow: hidden;
}
.tilesWrap li button:before {
    content: '';
    position: absolute;
    height: 100%;
    width: 120%;
    background: #b7b7b7;
    top: 0;
    opacity: 0;
    left: -140px;
    border-radius: 0 20px 20px 0;
    z-index: -1;
    transition: all 0.3s ease-in-out;
    
}
.tilesWrap li:hover button {
    transform: translateY(5px);
    opacity: 1;
}
.tilesWrap li button:hover {
    color: #262a2b;
}
.tilesWrap li button:hover:before {
    left: 0;
    opacity: 1;
}
.tilesWrap li:hover h2 {
    top: 0px;
    opacity: 0.6;
}

.tilesWrap li:before {
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    z-index: -1;
    background: #fff;
    transform: skew(2deg, 2deg);
}
/*.tilesWrap li:after {
    content: '';
    position: absolute;
    width: 40%;
    height: 100%;
    left: 0;
    top: 0;
    background: rgba(255, 255, 255, 0.02);
}*/
.tilesWrap li:nth-child(1):before {
    background: #C9FFBF;
background: -webkit-linear-gradient(to right, #FFAFBD, #C9FFBF);
background: linear-gradient(to right, #FFAFBD, #C9FFBF);
}
.tilesWrap li:nth-child(2):before {
    background: #f2709c;
background: -webkit-linear-gradient(to right, #ff9472, #f2709c);
background: linear-gradient(to right, #ff9472, #f2709c);
}
.tilesWrap li:nth-child(3):before {
    background: #c21500;
background: -webkit-linear-gradient(to right, #ffc500, #c21500);
background: linear-gradient(to right, #ffc500, #c21500);
}
.tilesWrap li:nth-child(4):before {
    background: #FC354C;
background: -webkit-linear-gradient(to right, #0ABFBC, #FC354C);
background: linear-gradient(to right, #0ABFBC, #FC354C);
}
</style>  
 
        
        <div id="templatemo_content">
        
            <div class="templatemo_box">
                <div class="section-heading style-2">
                        <h4 style="color: black;">Les Départements de l'EGCIM</h4>
                        <div class="line"></div>&nbsp
                        <span id="dots"></span><span>
                            <p style="text-align: justify; font-family: Roboto,sans-serif; font-size: 15px;">
                            Le Département est une unité pédagogique regroupant l'ensemble des enseignements et des activités de recherche d'une dlscipline ou groupe de disciplines déterminées. Le Département anirne, coordonne et contrôle les activités académiques, élabore, exécute et effectue, le suivi des programme des enseignements et de recherche. Le Département se réunit en Conseil.
                        </p>
                        </span>
                            
                            
                    </div>
                    <ul class="tilesWrap">
                        <?php foreach ($departements as $key){?>
                        <li>
                            <h2>0<?= $key->id_depart;?></h2>
                            <h3><?= $key->nom_departement;?></h3>
                            <p>
                                <?= $key->description;?>
                            </p>
                            <a href="<?= site_url('departements/details/'.$key->id_depart);?>" class="btn"><button>Voir plus</button></a>
                        </li>
                        <?php }?>
                    </ul>
            </div>
            
        </div> <!-- end of templatemo_content -->
        
  

