<style type="text/css">
    /*body {
    background: #262a2b;
}*/
.tilesWrap {
    padding: 0;
    margin: 50px auto;
    list-style: none;
    text-align: center;
}
.tilesWrap li {
    display: inline-block;
    width: 40%;
    min-width: 200px;
    max-width: 430px;
    padding: 60px 22px 14px;
    position: relative;
    vertical-align: top;
    margin: 10px;
    font-family: 'helvetica', san-serif;
    min-height: 25vh;
    background: darkslategray;
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

button{
  user-select:none;
  -webkit-user-select:none;
  -moz-user-select:none;
  -ms-user-select:none;
  cursor:pointer;
  border:none;
  padding:10px;
  font-size:15px;
  background:linear-gradient(141deg, #3483eb 0%, #1fc8db 51%, #2cb5e8 75%);
  color:white;
  font-family:cursive;
  box-sizing:border-box;
  border-radius: 5px;
}
</style>

       
<div id="templatemo_content">

    <div class="templatemo_box">
        <div class="section-heading style-2">
            <h4  style="color: black;">Mot du Directeur</h4>
            <div class="line"></div>&nbsp
                <p style="text-align: justify; font-family: Roboto,sans-serif; font-size: 15px;">
                <img class="alignleft"  alt="Pr Nkouam Gilles Bernard" src="<?= base_url()?>assets/img/directeur.jpg"><strong>Bienvenue ?? l'??cole de G??nie Chimique et des Industries Min??rales (EGCIM) de l???Universit?? de Ngaound??r??  </strong><br><br> L???Ecole de G??nie Chimique et des Industries Min??rales (EGCIM) de l???Universit?? de Ngaound??r?? est un ??tablissement de l???Universit?? de Ngaound??r?? cr??e par d??cret N??2017/585 du 24 Novembre 2017, d??cid??e par le Gouvernement Camerounais. Il a pour missions :
                <ul style="margin-left: 10px;text-align: justify; font-family: Roboto,sans-serif; font-size: 15px;">
                    <li style="list-style: disc;">La formation initiale et continue ainsi que la recherche dans les domaines du g??nie chimique et des industries min??rale</li>
                    <li style="list-style: disc;">Le recyclage et le perfectionnement des professionnels dans les domaines susvis??s</li>
                    <li style="list-style: disc;">L???appui au d??veloppement, en particulier sous forme de prestation de services et de gestion du d??veloppement durable.</li>
                </ul>
                 <p style="text-align: justify; font-family: Roboto,sans-serif; font-size: 15px;">
                 L???EGCIM est implant?? ?? c??t?? des berges du lac de Dang et s???efforce ?? remplir ses missions tout en:
                </p>
                <ul style="margin-left: 10px; text-align: justify; font-family: Roboto,sans-serif; font-size: 15px;">
                    <li style="list-style: disc;">Entretenant les relations ??troites avec les milieux socioprofessionnels</li>
                    <li style="list-style: disc;">N??gociant des conventions et accords de coop??ration avec des entreprises, des institutions et organisations nationales ou ??trang??res, conform??ment aux lois et r??glement en vigueur au Cameroun.</li>
                </ul>
                </p>
                <p style="text-align: justify; font-family: Roboto,sans-serif; font-size: 15px;">
                L???EGCIM est un ??tablissement sous l?????gide du LMD (Licence Master Doctorat) oeuvrant ?? former des futurs citoyens professionnels de qualit?? dans les domaines du G??nie Chimique et du G??nie Min??ral. Nous dotons nos ??tudiants de connaissances et comp??tences pour cr??er des industries de transformation pour le d??veloppement de l?????conomie nationale.  
                Afin de s???arrimer ?? la <b>????l???ad??quation formation-emploi, et ?? l???employabilit?? des jeunes</b>, l???EGCIM insiste tout au long de la formation sur des activit??s autour de l???entrepreneuriat en collaboration avec les experts du secteur, et oriente la recherche, ?? travers son centre de recherche, au d??veloppement. <br>  
                L???EGCIM offre un environnement convivial et num??rique, connect?? ?? Internet, permettant aux ??tudiants, personnel d???appui et enseignants d?????tre efficients dans leurs t??ches. Les enseignements sont d??livr??s en pr??sentiel et en ligne ?? travers notre plateforme de formation ?? distance et d???autres technologies de communication ?? distance permanemment d??ploy??s pour permettre aux experts collaborateurs de l???ext??rieur de renforcer les comp??tences des ??tudiants.<br>
                </p>
                
                <span id="text" style="display: none;">
                <p style="text-align: justify; font-family: Roboto,sans-serif; font-size: 15px;">
                L???ex??cution scrupuleuse et disciplin??e de ses pr??rogatives est r??alis??e gr??ce ?? l?????quipe talentueuse, dynamique, et d??vou??e  qui ne m??nage aucun effort pour fournir les r??sultats concrets. D???ailleurs, les retours satisfaisants des ??tudiants et des visiteurs d??montrent de la qualit?? de cette ??quipe. Elle comprend :
                <ul style="margin-left: 10px; text-align: justify; font-family: Roboto,sans-serif;font-size: 15px;">
                    <li style="list-style: disc;">Un personnel enseignant permanent constitu?? de 31 enseignants comp??tents exp??riment??s et bien impr??gn??s aux techniques p??dagogiques classiques et innovantes (num??rique ??ducatif)</li>
                    <li style="list-style: disc;">Un personnel administratif constitu?? d'environ 10 personnes d??vou??es ayant pour responsabilit?? de servir avec fiert??</li>
                    <li style="list-style: disc;">Une vingtaine d???enseignants vacataires provenant du monde de l???entreprise, des universit??s nationales et ??trang??res (en Afrique et en Europe).</li>
                </ul>
                </p>
                <p style="text-align: justify; font-family: Roboto,sans-serif; font-size: 15px;">
                Trois autres atouts que nous pouvons relever sont :
                <ul style="margin-left: 10px; text-align: justify; font-family: Roboto,sans-serif; font-size: 15px;">
                    <li style="list-style: disc;">L???entretien de collaborations interuniversitaires pour faciliter la recherche ainsi que des conventions entretenues avec les entreprises nationales pour l???obtention des stages acad??miques et la formation continue de leurs professionnels</li>
                    <li style="list-style: disc;">Le caract??re sous r??gional coll?? ?? l???EGCIM qui comprend des ??tudiants venant de la sous-r??gion d???Afrique Centrale</li>
                    <li style="list-style: disc;">La forte participation du genre f??minin au sein de l?????quipe d???administration de l???EGCIM</li>
                </ul>
                </p>
                <p style="text-align: justify; font-family: Roboto,sans-serif; font-size: 15px;">
                Chers parents, chers ??tudiants, l???EGCIM est l???endroit id??al dans le cas o?? votre d??sir ultime est l???insertion dans le monde socio-professionnel. Nous attendons de nouvelles personnes afin de faire d???elles, de futurs entrepreneurs et leaders ??conomiques dans les secteurs du G??nie Chimique et Industries Min??rales.<br><br>
                 
                Pr Gilles Bernard NKouam<br>  
                Directeur de l???EGCIM
                </p>
                </span>
                <div class="btn-container">
                <button id="toggle">Lire Plus</button>
                </div>
        </div>
    </div>
    
</div> <!-- end of templatemo_content -->
<script type="text/javascript">
    $(document).ready(function() {
      $("#toggle").click(function() {
        var elem = $("#toggle").text();
        if (elem == "Lire Plus") {
          //Stuff to do when btn is in the read more state
          $("#toggle").text("Lire Moins");
          $("#text").slideDown();
        } else {
          //Stuff to do when btn is in the read less state
          $("#toggle").text("Lire Plus");
          $("#text").slideUp();
        }
      });
    });
</script>
         

    

