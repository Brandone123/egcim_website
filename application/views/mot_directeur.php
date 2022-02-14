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
                <img class="alignleft"  alt="Pr Nkouam Gilles Bernard" src="<?= base_url()?>assets/img/directeur.jpg"><strong>Bienvenue à l'École de Génie Chimique et des Industries Minérales (EGCIM) de l’Université de Ngaoundéré  </strong><br><br> L’Ecole de Génie Chimique et des Industries Minérales (EGCIM) de l’Université de Ngaoundéré est un établissement de l’Université de Ngaoundéré crée par décret N°2017/585 du 24 Novembre 2017, décidée par le Gouvernement Camerounais. Il a pour missions :
                <ul style="margin-left: 10px;text-align: justify; font-family: Roboto,sans-serif; font-size: 15px;">
                    <li style="list-style: disc;">La formation initiale et continue ainsi que la recherche dans les domaines du génie chimique et des industries minérale</li>
                    <li style="list-style: disc;">Le recyclage et le perfectionnement des professionnels dans les domaines susvisés</li>
                    <li style="list-style: disc;">L’appui au développement, en particulier sous forme de prestation de services et de gestion du développement durable.</li>
                </ul>
                 <p style="text-align: justify; font-family: Roboto,sans-serif; font-size: 15px;">
                 L’EGCIM est implanté à côté des berges du lac de Dang et s’efforce à remplir ses missions tout en:
                </p>
                <ul style="margin-left: 10px; text-align: justify; font-family: Roboto,sans-serif; font-size: 15px;">
                    <li style="list-style: disc;">Entretenant les relations étroites avec les milieux socioprofessionnels</li>
                    <li style="list-style: disc;">Négociant des conventions et accords de coopération avec des entreprises, des institutions et organisations nationales ou étrangères, conformément aux lois et règlement en vigueur au Cameroun.</li>
                </ul>
                </p>
                <p style="text-align: justify; font-family: Roboto,sans-serif; font-size: 15px;">
                L’EGCIM est un établissement sous l’égide du LMD (Licence Master Doctorat) oeuvrant à former des futurs citoyens professionnels de qualité dans les domaines du Génie Chimique et du Génie Minéral. Nous dotons nos étudiants de connaissances et compétences pour créer des industries de transformation pour le développement de l’économie nationale.  
                Afin de s’arrimer à la <b>à l’adéquation formation-emploi, et à l’employabilité des jeunes</b>, l’EGCIM insiste tout au long de la formation sur des activités autour de l’entrepreneuriat en collaboration avec les experts du secteur, et oriente la recherche, à travers son centre de recherche, au développement. <br>  
                L’EGCIM offre un environnement convivial et numérique, connecté à Internet, permettant aux étudiants, personnel d’appui et enseignants d’être efficients dans leurs tâches. Les enseignements sont délivrés en présentiel et en ligne à travers notre plateforme de formation à distance et d’autres technologies de communication à distance permanemment déployés pour permettre aux experts collaborateurs de l’extérieur de renforcer les compétences des étudiants.<br>
                </p>
                
                <span id="text" style="display: none;">
                <p style="text-align: justify; font-family: Roboto,sans-serif; font-size: 15px;">
                L’exécution scrupuleuse et disciplinée de ses prérogatives est réalisée grâce à l’équipe talentueuse, dynamique, et dévouée  qui ne ménage aucun effort pour fournir les résultats concrets. D’ailleurs, les retours satisfaisants des étudiants et des visiteurs démontrent de la qualité de cette équipe. Elle comprend :
                <ul style="margin-left: 10px; text-align: justify; font-family: Roboto,sans-serif;font-size: 15px;">
                    <li style="list-style: disc;">Un personnel enseignant permanent constitué de 31 enseignants compétents expérimentés et bien imprégnés aux techniques pédagogiques classiques et innovantes (numérique éducatif)</li>
                    <li style="list-style: disc;">Un personnel administratif constitué d'environ 10 personnes dévouées ayant pour responsabilité de servir avec fierté</li>
                    <li style="list-style: disc;">Une vingtaine d’enseignants vacataires provenant du monde de l’entreprise, des universités nationales et étrangères (en Afrique et en Europe).</li>
                </ul>
                </p>
                <p style="text-align: justify; font-family: Roboto,sans-serif; font-size: 15px;">
                Trois autres atouts que nous pouvons relever sont :
                <ul style="margin-left: 10px; text-align: justify; font-family: Roboto,sans-serif; font-size: 15px;">
                    <li style="list-style: disc;">L’entretien de collaborations interuniversitaires pour faciliter la recherche ainsi que des conventions entretenues avec les entreprises nationales pour l’obtention des stages académiques et la formation continue de leurs professionnels</li>
                    <li style="list-style: disc;">Le caractère sous régional collé à l’EGCIM qui comprend des étudiants venant de la sous-région d’Afrique Centrale</li>
                    <li style="list-style: disc;">La forte participation du genre féminin au sein de l’équipe d’administration de l’EGCIM</li>
                </ul>
                </p>
                <p style="text-align: justify; font-family: Roboto,sans-serif; font-size: 15px;">
                Chers parents, chers étudiants, l’EGCIM est l’endroit idéal dans le cas où votre désir ultime est l’insertion dans le monde socio-professionnel. Nous attendons de nouvelles personnes afin de faire d’elles, de futurs entrepreneurs et leaders économiques dans les secteurs du Génie Chimique et Industries Minérales.<br><br>
                 
                Pr Gilles Bernard NKouam<br>  
                Directeur de l’EGCIM
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
         

    

