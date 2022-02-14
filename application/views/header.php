<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src="https://kit.fontawesome.com/b4cffaa154.js" crossorigin="anonymous"></script>
    <!-- Title -->
    <title>EGCIM UN</title>

    <!-- Favicon -->
    <link rel="icon" href="<?= asset_url('img/logoEGCIM40.png')?>">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?= asset_url('style.css')?>">
    <!-- Stylesheet of slideshow -->  
    <link href="<?= asset_url('css/wow-slider.css')?>" rel="stylesheet" type="text/css">
   <link href="<?= asset_url('css/slider-style.css')?>" rel="stylesheet" type="text/css">
   <script type="text/javascript" src="<?= asset_url('js/jquery.js')?>"></script>
    <!-- sitebarCSS -->
    <link href="http://fonts.googleapis.com/css?family=Archivo+Narrow:400,700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans|Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="<?= asset_url('css/default.css')?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?= asset_url('css/bodyStyle.css')?>" rel="stylesheet" type="text/css"/>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <script language="javascript" type="text/javascript">
    function clearText(field)
    {
        if (field.defaultValue == field.value) field.value = '';
        else if (field.value == '') field.value = field.defaultValue;
    }
    </script>
    <!-- Script for sharing social media-->
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=60b249fe2a32fe0011bf9d06&product=sticky-share-buttons' async='async'></script>

    <style type="text/css">

        body, .hero--area, .trending-posts-area, .vizew-post-area{
            background-color: #F6FCFE;
            color: black;
        }

        .top-header-area{
            background-color: black;
        }
        #more {display: none;}
    </style>
    

    <style type="text/css">
    @import url("http://fonts.googleapis.com/css?family=Source+Sans+Pro&subset=latin,latin-ext");
    * html #jslider-container{ width: 550px }
    /*.slider-box {
        background: none repeat scroll 0 0 #FAFAFA;
        border-radius: 5px 5px 5px 5px;
        box-shadow: 0 0 3px #333333;
        margin: 0 auto;
        width: 780px;
     overflow: hidden;
    }*/
    #slider-wrapper {
        margin: 0 auto;
        padding: 8px;
    }
    #jslider-container {
        border: 2px solid #FFFFFF;
        /*max-width: 660px;*/
        position: relative;
        text-align: left;
        z-index: 90;
    }

.slider-box {
    background: none repeat scroll 0 0 #FAFAFA;
    border-radius: 5px 5px 5px 5px;
    box-shadow: 0 0 3px #333333;
    margin: 30px;
    /*width: 780px;*/
    overflow: hidden;
}

#jslider-container .jslider_images ul{
    position:relative;
    width: 10000%; 
    height:auto;
    left:0;
    list-style:none;
    margin:0;
    padding:0;
    border-spacing:0;
    overflow: visible;
    /*table-layout:fixed;*/
}
#jslider-container .jslider_images ul li{
    width:1%;
    line-height:0; /*opera*/
    float:left;
    font-size:0;
    padding:0 0 0 0 !important;
    margin:0 0 0 0 !important;
}

#jslider-container .jslider_images{
    position: relative;
    left:0;
    top:0;
    width:100%;
    height:100%;
    overflow:hidden;
}
#jslider-container .jslider_images a{
    width:100%;
    display:block;
    color:transparent;
}
#jslider-container img{
    max-width: none !important;
}
#jslider-container .jslider_images img{
    width:100%;
    border:none 0;
    max-width: none;
    padding:0;
}
#jslider-container a{ 
    text-decoration: none; 
    outline: none; 
    border: none; 
}

#jslider-container  .ws_bullets { 
    font-size: 0px; 
    float: left;
    position:absolute;
    z-index:70;
}
#jslider-container  .ws_bullets div{
    position:relative;
    float:left;
}
#jslider-container  a.wsl{
    display:none;
}
#jslider-container  .ws_bullets { 
    padding: 10px; 
}
#jslider-container .ws_bullets a { 
    margin-left:4px;
    width:9px;
    height:9px;
    background: url(./bullet.png) left 50% no-repeat;
    float: left; 
    text-indent: -4000px; 
    position:relative;
    color:transparent;
}
#jslider-container .ws_bullets a.ws_selbull, #jslider-container .ws_bullets a:hover{
    background-position: right 50%;
}
#jslider-container a.ws_next, #jslider-container a.ws_prev {
    position:absolute;
    display:none;
    top:50%;
    margin-top:-28px;
    z-index:60;
    height: 48px;
    width: 48px;
    background-image: url(../images/arrows.png);
}
#jslider-container a.ws_next{
    background-position: 100% 0;
    right:5px;
}
#jslider-container a.ws_prev {
    left:5px;
    background-position: 0 0; 
}
#jslider-container a.ws_next:hover{
    background-position: 100% 100%;
}
#jslider-container a.ws_prev:hover {
    background-position: 0 100%; 
}
* html #jslider-container a.ws_next,* html #jslider-container a.ws_prev{display:block}
#jslider-container:hover a.ws_next, #jslider-container:hover a.ws_prev {display:block}
/* bottom center */
#jslider-container .ws_bullets {
    top:0;
    right: 0;
}

/* separate */
#jslider-container .ws-title{
    position: absolute;
    display:block; 
    bottom:20px;
    left:25px;
    margin-right:25px;
    z-index: 50;
    color: #6E7476; 
    font-family: "Roboto", sans-serif;
    font-size: 22px;
    line-height: 24pxpx;

}
#jslider-container .ws-title div,#jslider-container .ws-title span{ 
    display:inline-block; 
    margin-top:10px;
    padding: 7px;
    background:#FFFFFF;
    font-weight: normal;    
    border-radius:0;
    opacity:0.7;
    filter:progid:DXImageTransform.Microsoft.Alpha(opacity=90); 

}
#jslider-container .ws-title div{ 
    display:block;
    margin-top:10px; 
    background:#6cbe42; 
    color: #FFFFFF;
}

#jslider-container  .jslider_thumbs { 
    font-size: 0px; 
    position:absolute;
    overflow:auto;
    z-index:70;
}
#jslider-container .jslider_thumbs a { 
    position:relative;
    text-indent: -4000px; 
    color:transparent;
    opacity:0.85;
}
#jslider-container .jslider_thumbs a:hover{
    opacity:1;
}
#jslider-container .jslider_thumbs a:hover img{
    visibility:visible;
}
#jslider-container  .jslider_thumbs { 
    right: -106px;
    top: 0;
    width:101px;
    height:100%;
}
#jslider-container  .jslider_thumbs div{
    position:relative;
    width:100%;

}
#jslider-container .jslider_thumbs .ws_selthumb img{
    border-color:#6cbe42;
}

#jslider-container .jslider_thumbs  a img{
    margin:3px;
    text-indent:0;
    border: 5px solid #FFFFFF;
    max-width:none;
}

#jslider-container .jslider_images ul{
    animation: wsBasic 24s infinite;
    -moz-animation: wsBasic 24s infinite;
    -webkit-animation: wsBasic 24s infinite;
}
@keyframes wsBasic{0%{left:-0%} 8.33%{left:-0%} 16.67%{left:-100%} 25%{left:-100%} 33.33%{left:-200%} 41.67%{left:-200%} 50%{left:-300%} 58.33%{left:-300%} 66.67%{left:-400%} 75%{left:-400%} 83.33%{left:-500%} 91.67%{left:-500%} }
@-moz-keyframes wsBasic{0%{left:-0%} 8.33%{left:-0%} 16.67%{left:-100%} 25%{left:-100%} 33.33%{left:-200%} 41.67%{left:-200%} 50%{left:-300%} 58.33%{left:-300%} 66.67%{left:-400%} 75%{left:-400%} 83.33%{left:-500%} 91.67%{left:-500%} }
@-webkit-keyframes wsBasic{0%{left:-0%} 8.33%{left:-0%} 16.67%{left:-100%} 25%{left:-100%} 33.33%{left:-200%} 41.67%{left:-200%} 50%{left:-300%} 58.33%{left:-300%} 66.67%{left:-400%} 75%{left:-400%} 83.33%{left:-500%} 91.67%{left:-500%} }

#jslider-container .ws_bullets  a img{
    text-indent:0;
    display:block;
    top:16px;
    left:-43px;
    visibility:hidden;
    position:absolute;
    border: 5px solid #FFFFFF;
    max-width:none;
}
#jslider-container .ws_bullets a:hover img{
    visibility:visible;
}

#jslider-container .ws_bulframe div div{
    height:48px;
    overflow:visible;
    position:relative;
}
#jslider-container .ws_bulframe div {
    left:0;
    overflow:hidden;
    position:relative;
    width:85px;
    background-color:#DEDEDE;
}
#jslider-container  .ws_bullets .ws_bulframe{
    display:none;
    top:15px;
    overflow:visible;
    position:absolute;
    cursor:pointer;
    border: 5px solid #FFFFFF;
}
#jslider-container .ws_bulframe span{
    display:block;
    position:absolute;
    top:-11px;
    margin-left:-7px;
    left:43px;
    background: url(triangle.png);
    width:13px;
    height:7px;
}
    </style>
    <!-- Style of container2 -->
<style type="text/css">
  * {
  box-sizing: border-radius;
  font-family: "Roboto", sans-serif;
}

.container2 {
  /*border: 1px solid black;*/
  /*position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;*/
  margin: auto;
  display: grid;
  place-items: center;
  /*background-color: #128cfc;*/
}

.items2 {
  width: 290px;
  background: #fffffe;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  border-top: 13px solid #0b5aa2;
  text-align: left;
}

.items-head2 p {
  padding: 5px 20px;
  margin: 6px;
  color: #0b5aa2;
  font-weight: bold;
  font-size: 20px;
}

.items-head2 hr {
  width: 20%;
  margin: 0px 30px;
  border: 1px solid #0b5aa2;
}

.items-body2 {
  padding: 8px;
  /*margin: 10px;*/
  display: flow-root;
  grid-gap: 10px;
}

.items-body-content2 {
  padding: 10px;
  padding-right: 0px;
  display: grid;
  grid-template-columns: 10fr 1fr;
  font-size: 13px;
  grid-gap: 10px;
  border: 1px solid transparent;
  cursor: pointer;
}

.items-body-content2:hover {
  border-radius: 15px;
  border: 1px solid #0b5aa2;
}

.items-body-content2 i {
  align-self: center;
  font-size: 15px;
  color: #0b5aa2;
  font-weight: bold;
  animation: icon 1.5s infinite forwards;
}

@keyframes icon {
  0%, 100% {
    transform: translate(0px);
  }
  50% {
    transform: translate(3px);
  }
}
</style>
<!-- End Style of container2 -->

<style type="text/css">
    .classynav ul li ul li a:hover {
        color: #3483eb !important;
    }
    .owl-carousel .owl-item img {
    display: block;
    width: 30%;
    }
    .section-heading {
    position: relative;
    z-index: 1;
    margin-bottom: 10px;
    text-align: center;
}
</style>
<style type="text/css">
    .line::after{
        width: 60px;
        height: 2px;
        background-color: #3483eb !important;
        content: '';
        position: absolute;
        bottom: 0;
        left: 10%;
        margin-left: -30px;
    }
    .line{
        /*width: 150px;*/
        height: 1px;
        background-color: #4e5152;
        margin: 0 auto;
        position: relative;
        z-index: 1;
    }
    .sport-video-slides .owl-prev, .sport-video-slides .owl-next, .business-video-slides .owl-prev, .business-video-slides .owl-next, .featured-post-slides .owl-prev, .featured-post-slides .owl-next {
        top: -45px;
    }
    .top-header-area .top-social-info {
        margin-right: 0px;
    }
    
</style>
<style type="text/css">
    .sid {
    max-width: 31%;
}
.single-widget {
        background-image: url(assets/img/bg-img/backimage.jpg);
    }
    /* style background color phone*/
    @media all and (max-width: 1024px)
    {
        .sid {
            max-width: 100%;
        }
        #fh5co-intro .fh5co-block {
            padding: 10px;
        }
        .single-widget {
            background-image: url(assets/img/bg-img/backimage.jpg);
        }
        section {
            background-image: url(assets/img/bg-img/backimage.jpg) none;
        }
    }
</style>

</head>

<body>
    
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-5">
                        <!-- Breaking News Widget -->
                        <div class="breaking-news-area d-flex align-items-center">
                            <div class="news-title">
                                <p>Breaking News:</p>
                            </div>
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                    <li><a href="https://egcim-univ-ndere.cm/assets/concours/images/Resultat_EGCIM_2021_3e annee.pdf">Resultats du concours de l'EGCIM année 2021/2022 déjà disponible</a></li>
                                    <li><a href="https://egcim-univ-ndere.cm/assets/communique&autre/communique_concour.jpg">Les salles de composition pour le concours sont connues, se rendre dans les "actualités"</a></li>
                                    <li><a href="https://egcim-univ-ndere.cm/assets/communique&autre/communique_concour.jpg">Date du concours d'entrée à L'EGCIM Samedi 23 Octobre 2021 à 7H00</a></li>
                                   <li><a href="https://egcim-univ-ndere.cm/assets/communique&autre/coupe_directeur.jpeg">Final de la Coupe du Directeur, samedi 3 juillet au stade Gazonné à 13h</a></li>
                                     <!--  <li><a href="https://egcim-univ-ndere.cm/assets/communique&autre/soirée_parainage.jpeg">Soirée de parainage 1ere édition, samedi 3 juillet au restaurant universitaire à 19h</a></li>
                                    <li><a href="https://egcim-univ-ndere.cm/assets/communique&autre/Planning_Examen_Second_semestre_02_au_04_Juin_2021.pdf">Examen du second semestre programmé du 02 au 04 Juin 2021 Niveau 3</a></li>
                                    <li><a href="http://concours-egcim.cm/">Inscription en ligne pour le concours de L'EGCIM 2021/2022</a></li> -->
                                    <!-- <li><a href="/">Arrêt des cours : 19 mars à 15h30 </a></li>
                                    <li><a href="/">Reprise des cours à partir du 05 Avril à 7h30 </a></li> -->

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="top-meta-data d-flex align-items-center justify-content-end">
                            <!-- Top Social Info -->
                            
                        <div id="covid">
                                <img  alt="" src="<?= base_url()?>assets/img/bg-img/virus.png" width="35">&nbsp&nbsp&nbsp&nbsp
                                <img  alt="" src="<?= base_url()?>assets/img/bg-img/mask.png" width="35">&nbsp&nbsp&nbsp&nbsp
                                <img  alt="" src="<?= base_url()?>assets/img/bg-img/soap.png" width="35">&nbsp&nbsp&nbsp&nbsp
                                <img  alt="" src="<?= base_url()?>assets/img/bg-img/handshake.png" width="35">&nbsp&nbsp&nbsp&nbsp
                                <img  alt="" src="<?= base_url()?>assets/img/bg-img/distancing.png" width="35">
                                
                            </div>
                            <div class="top-social-info">
                                <a href="#"><i class="fa fa-facebook" style="color: white;"></i></a>
                                <!-- <a href="#"><i class="fa fa-twitter" style="color: white;"></i></a>
                                <a href="#"><i class="fa fa-pinterest" style="color: white;"></i></a>
                                <a href="#"><i class="fa fa-linkedin" style="color: white;"></i></a> -->
                                <a href="#"><i class="fa fa-youtube-play" style="color: white;"></i></a>
                            </div>
                            
                            <div class="top-social-info">
                                <a href="http://concours-egcim.cm/" style="color: white;">Concours <i class="fa fa-file-signature" style="color: white;"></i></a>
                                
                            </div>
                            <div class="top-social-info">
                                <a href="https://dc03-webmail.237rs.cc/" style="color: white;">Mailing <i class="fa fa-envelope" style="color: white;"></i></a>
                                
                            </div>
                            <div class="top-social-info">
                                <a href="/index.php/login" style="color: white;">Login <i class="fa fa-sign-in" style="color: white;"></i></a>
                                
                            </div>
                            <!-- Top Search Area -->
                            <!-- <div class="top-search-area">
                                <form action="index.html" method="post">
                                    <input type="search" name="top-search" id="topSearch" placeholder="Search...">
                                    <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div> -->
                            <!-- Login -->
                            <!-- <a href="login.html" class="login-btn"><i class="fa fa-user" aria-hidden="true" style="color: white;"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="vizew-main-menu" id="sticker" >
            <div class="classy-nav-container breakpoint-off" style="background-color: #3483eb;">
                <div class="container">

                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="vizewNav">

                        <!-- Nav brand -->
                        <a href="/" class="nav-brand"><img src="<?= asset_url('img/EGCIM-logo.png')?>" width="50" height="50" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="/">Home</a></li>
                                    <li><a href="#">L'EGCIM</a>
                                        <ul class="dropdown">
                                            <li><a href="<?= site_url('welcome/mot_directeur')?>">Mot du Directeur</a></li>
                                            <li><a href="<?= site_url('/')?>">Présentation</a></li>
                                            <li><a href="<?= site_url('welcome/organisation_admin')?>">Organisation</a></li>
                                            <li><a href="<?= site_url('etudiants/statistique')?>">Statistiques</a></li>
                                            <li><a href="<?= site_url('staff')?>">Staff</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li><a href="#">Formation</a>
                                        <ul class="dropdown">
                                          <!-- <li><a href="<?= site_url('welcome/page_en_construction')?>">Formation continue</a></li> -->
                                           <li><a href="<?= site_url('welcome/formation_distance')?>">Formation à distance</a></li>
                                            <li><a href="<?= site_url('departements')?>">Départements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Etudiants</a>
                                        <ul class="dropdown">
                                            <li><a href="<?= site_url('etudiants/admission')?>">Admission</a></li>
                                            <li><a href="<?= site_url('etudiants/ae_egcim')?>">AE-EGCIM</a></li>
                                            <li><a href="<?= site_url('etudiants/club_gm')?>">Club Genie-Chimique</a></li>
                                           <li><a href="<?= site_url('welcome/page_en_construction')?>">Annuaire</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Recherche</a>
                                        <ul class="dropdown"  style="width: max-content !important;">
                                            <li><a href="<?= site_url('welcome/page_en_construction')?>">Axes</a></li>
                                           <li><a href="<?= site_url('welcome/page_en_construction')?>">Equipes</a></li>
                                           <li><a href="<?= site_url('welcome/page_en_construction')?>">Organisation</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Coopération</a>
                                        <ul class="dropdown"  style="width: max-content !important;">
                                            <li><a href="<?= site_url('welcome/page_en_construction')?>">Coopération nationale</a></li>
                                            <li><a href="<?= site_url('welcome/page_en_construction')?>">Coopération internationale</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Stage</a>
                                        <ul class="dropdown">
                                            <li><a href="<?= site_url('welcome/page_en_construction')?>">Organisation</a></li>
                                            <li><a href="<?= site_url('welcome/page_en_construction')?>">Déroulement</a></li>
                                            <li><a href="<?= site_url('welcome/page_en_construction')?>">Convention</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <br>
  <!-- ##### slidershow #### -->
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> -->

<section class="container">
<div class="row" style="background-color: black;">
<div class="slider-box">
	<div id="slider-wrapper">
		<div id="jslider-container">
			<div class="jslider_images ">
		      <ul id="">
				  <li>
				  	<a href="#">
				  		<img src="<?= asset_url('img/egcim01_opt.jpg')?>" title="EGCIM"/>
					</a> Photos de famille
					  
				  </li>
				  <li>
				  	<a href="#">
					  <img src="<?= asset_url('img/egcim02_opt.jpg')?>" title="EGCIM"/>
					</a>Formation initiale et continue
				  </li>
				  <li>
				  	<a href="#">
					  <img src="<?= asset_url('img/egcim03_opt.jpg')?>" title="EGCIM"/>
					</a>L'appui au développement
				  </li>
				  <li>
				  	<a href="#">
					  <img src="<?= asset_url('img/egcim05_opt.jpg')?>" title="EGCIM"/>
					</a>
					 Recyclage et Perfectionnement 
				  </li>
				  <li>
				  	<a href="#">
					  <img src="<?= asset_url('img/egcim07_opt.jpg')?>" title="EGCIM"/>
					</a>Promotion de la recherche 
				  </li>
				   <li>
				  	<a href="#">
					  <img src="<?= asset_url('img/egcim04_opt.jpg')?>" title="EGCIM"/>
					</a>Formation des Ingénieurs de Travaux/Conception
				  </li>
			   </ul>
			</div> 
			    
			 <div class="jslider_thumbs">
		        <div>
				  <a class="" href="#" title="egcim01_opt"><img src="<?= asset_url('img/egcim01_opt_opt.jpg')?>"/></a>
				  <a class="" href="#" title="egcim02_opt"><img src="<?= asset_url('img/egcim02_opt_opt.jpg')?>"/></a>
				  <a class="" href="#" title="egcim03_opt"><img src="<?= asset_url('img/egcim03_opt_opt.jpg')?>"/></a>
				  <a class="" href="#" title="egcim05_opt"><img src="<?= asset_url('img/egcim05_opt_opt.jpg')?>"/></a>
				  <a class="" href="#" title="egcim07_opt"><img src="<?= asset_url('img/egcim07_opt_opt.jpg')?>"/></a>
				  <a class="" href="#" title="egcim04_opt"><img src="<?= asset_url('img/egcim04_opt_opt.jpg')?>"/></a>
		        </div>
			 </div>
		</div>

	</div>

</div>
<script type="text/javascript" src="<?= asset_url('js/wow-slider.js')?>"></script>
<div id="side" class="container" style="color: white; box-shadow: 20px;">
	    <div id="box2" style="color: white;">
			<!-- <h2 class="title" style="color: white;">ACTUALITÉS</h2> -->
                <div class="col-12 col-lg-10">
                    <!-- Section Heading -->
                    <div class="section-heading style-2">
                        <h4 style="font-size: 15px">ACTUALITÉS</h4>
                        <div class="line"></div>
                    </div>

                    <!-- Sports Video Slides -->
                    <div class="sport-video-slides owl-carousel">
                        
                        <!-- Single Blog Post -->
                        <div class="single-post-area">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="<?= base_url()?>assets/img/resultats.jpeg" width="15" height="15" alt="" class="alignleft">
                                <p  style="color: white;">Resultats du concours de l'EGCIM année académique 2021/2022 déjà disponible, <a href="https://egcim-univ-ndere.cm/assets/concours/images/Resultat_EGCIM_2021_1ere annee.pdf">Première année</a> et <a href="https://egcim-univ-ndere.cm/assets/concours/images/Resultat_EGCIM_2021_3e annee.pdf">Troisième année</a></p>

                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-post-area">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="<?= asset_url('communique&autre/communique_concour.jpg')?>" width="10" height="10" alt="" class="alignleft">
                                <p  style="color: white;">Séminaire d'impréniation à la pédagogie universitaire organisé à l'attention des enseignants Docteurs, le 27 Oct 2021 à l'AMPHI 750 à 9H...<a href="https://egcim-univ-ndere.cm/assets/communique&autre/COMMUNIQUE_SEMINAIRE_D_IMPREGNATION.pdf">lire plus </a></p>

                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-post-area">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="<?= asset_url('concours/images/deroulement_concours.jpeg')?>" width="10" height="10" alt="" class="alignleft">
                                <p  style="color: white;">Déroulement du Concours pour le compte de l'année académique 2021-2022...<a href="https://egcim-univ-ndere.cm/assets/concours/images/deroulement_concours.jpeg">lire plus </a></p>

                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-post-area">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="<?= asset_url('communique&autre/communique_concour.jpg')?>" width="10" height="10" alt="" class="alignleft">
                                <p  style="color: white;">Le Recteur de L'université de ngaoundéré informe les candidats inscrits au Concours de L'EGCIM...<a href="https://egcim-univ-ndere.cm/assets/communique&autre/communique_concour.jpg">lire plus </a></p>

                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <!-- <div class="single-post-area">
                            <div class="post-thumbnail">
                                <img src="<?= asset_url('img/recteur.jpeg')?>" width="10" height="10" alt="" class="alignleft">
                                <p  style="color: white;">Le Recteur de L'université de ngaoundéré informe la communauté universitaire que, conformément...<a href="https://egcim-univ-ndere.cm/assets/communique&autre/communique 2021-03-17 at 06.53.55.pdf">lire plus </a></p>

                            </div>
                        </div> -->
                        <!-- Single Blog Post -->
                       <!--  <div class="single-post-area">
                            <div class="post-thumbnail">
                                <img src="<?= asset_url('communique&autre/coupe_directeur.jpeg')?>" width="10" height="10" alt="" class="alignleft">
                                <p  style="color: white;">Final de la Coupe du Directeur, samedi 3 juillet au stade Gazonné à 13h<a href="https://egcim-univ-ndere.cm/assets/communique&autre/coupe_directeur.jpeg"> Voir Plus </a></p>

                            </div>
                        </div> -->
                        <!-- Single Blog Post -->
                       <!--  <div class="single-post-area">
                            <div class="post-thumbnail">
                                <img src="<?= asset_url('communique&autre/soirée_parainage.jpeg')?>" width="20" height="20" alt="" class="alignleft">
                                <p  style="color: white;">Soirée de parainage 1ere édition, samedi 3 juillet au restaurant universitaire à 19h<a href="https://egcim-univ-ndere.cm/assets/communique&autre/soirée_parainage.jpeg">   Voir Plus </a></p>

                            </div>
                        </div> -->
                        <!-- Single Blog Post -->
                        <div class="single-post-area">
                            <div class="post-thumbnail">
                                <img src="<?= asset_url('concours/images/temoignage_concours1.mp4.png')?>" width="20" height="20" alt="" class="alignleft">
                                <p  style="color: white;">Inscription en ligne pour le concours de L'EGCIM 2021/2022<a href="http://concours-egcim.cm/">   Souscrire ici </a></p>

                            </div>
                        </div>
                    
                    </div>
                    <!-- Section Heading -->
                    <div class="section-heading style-2">
                        <h4 style="font-size: 15px">Chronogramme</h4>
                        <div class="line"></div>
                    </div>

                    <!-- Business Video Slides -->
                    <!-- <div class="business-video-slides owl-carousel"> -->
                        <!-- Single Blog Post -->
                       <!-- <div class="single-post-area"> -->
                            <!-- Post Thumbnail -->
                            <!-- <div class="post-thumbnail">
                                <p  style="color: white;">Le Recteur de L'université de ngaoundéré informe la communauté universitaire que, conformément...<a href="/">lire plus </a></p>

                            </div> -->
                       <!--  </div>  -->

                        <!-- Single Blog Post -->
                        <!-- <div class="single-post-area"> -->
                            <!-- Post Thumbnail -->
                            <!-- <div class="post-thumbnail">
                                <p  style="color: white;">Il est porté à l'attention des élèves-ingenieurs du niveau 1, qu'ils auront un examen...<a href="/">lire plus </a></p>

                            </div> -->
                      <!--   </div>
                    </div> -->
                    <!-- <i class="fa fa-calendar" aria-hidden="true" style="color: white; font-size: 30px;"></i> -->
                    <p style=" color: white; font-size: 11.5px;"><img src="<?= asset_url('img/chronogramme.jpg')?>" alt="" width="35">
                     Chronogramme des activités EGCIM 2021</p>

                      <div class="section-heading style-2">
                        <h4 style="font-size: 15px">Conseils de Direction</h4>
                        <div class="line"></div>
                    </div>
                     <p style=" color: white; font-size: 12px;"><img src="<?= asset_url('img/conseil.png')?>" alt="" width="38">
                     Conseils de Direction EGCIM 2021</p>
                </div>
               

                            
        </div>
			
		</div>
	</div>
</div>
  <!-- ##### slidershow #### -->
</section>
<!-- <div id="sfcy41yg2gmqj8qup8114n3bpdqhsbkpzge"></div>
<script type="text/javascript" src="https://counter6.stat.ovh/private/counter.js?c=y41yg2gmqj8qup8114n3bpdqhsbkpzge&down=async" async></script> -->
<!-- <noscript><a href="https://www.compteurdevisite.com" title="compteur de visite"><img src="https://counter6.stat.ovh/private/compteurdevisite.php?c=y41yg2gmqj8qup8114n3bpdqhsbkpzge" border="0" title="compteur de visite" alt="compteur de visite"></a></noscript> -->
<div class="sharethis-sticky-share-buttons"></div>