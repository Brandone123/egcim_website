<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Concours EGCIM UN</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="<?= asset_url('concours/css/raleway-font.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= asset_url('concours/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')?>">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="<?= asset_url('concours/css/style.css')?>"/>
     <link rel="icon" href="http://egcim.smartedubizness.com/assets/img/logoEGCIM40.png">
     <script src="<?= asset_url('concours/js/jquery-3.3.1.min.js')?>"></script>
     <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script src="<?= asset_url('concours/js/jquery.steps.js')?>"></script>
	<script src="<?= asset_url('concours/js/main.js')?>"></script>
     <style type="text/css">
     	.form-row p{
     		color: white
     	}
     	.form-row li a{
     		color: white
     	}
     	.form-row li p{
     		color: white
     	}
     	.form-row li{
     		color: white
     	}
     </style>
</head>
<body>
	
	<div class="page-content" style="background-image: url(<?= asset_url('concours/images/wizard-v1.jpg')?>)">
		<div class="wizard-v1-content">
			<div class="wizard-form">
				<h3>Inscription au concours 2021 de l'EGCIM</h3>
		        <form class="form-register" id="form-register" action="<?= site_url('concours/post')?>" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
		        		<h2>
			            	<span class="step-icon"><i class="zmdi zmdi-info"></i></span>
			            	<span class="step-number">Etape 01</span>
			            	<span class="step-text">Prerequis</span>
			            </h2>
			            <section>
			                <div class="inner">
								<div class="form-row">
									<p>Bienvenue cher(e) Candidat(e) !!!</p>
									<p>Avant de commencer, vous devez:</p>
								</div>
								<div class="form-row">
									<ol>
										<li>
											<p>Avoir un adresse mail</p>
											<p>
												Sinon:
												<ul>
													<li>
														<a href="https://accounts.google.com/signup/v2/webcreateaccount?continue=https%3A%2F%2Faccounts.google.com%2FManageAccount%3Fnc%3D1&dsh=S2047115876%3A1619525293439714&gmb=exp&biz=false&flowName=GlifWebSignIn&flowEntry=SignUp" target="_blank">Creer un compte Gmail</a>
													</li>
													<li>
														<a href="https://login.yahoo.com/account/create?.intl=fr&.lang=fr-FR&src=ym&activity=mail-direct&pspid=159600001&.done=https%3A%2F%2Ffr.mail.yahoo.com%2Fd&specId=yidReg&done=https%3A%2F%2Ffr.mail.yahoo.com%2Fd" target="_blank">
														Creer un compte Yahoo</a>
													</li>
												</ul>
											</p>
										</li>
										<li>
											Avoir tous les documents requis
										</li>
										<li>Avoir payé les frais d'inscription au concours</li>
									</ol>
									
								</div>
								<p>
										<strong style="color: white;">Télécharger la décision du concours : <a href="http://egcim.smartedubizness.com/assets/communique&autre/Fiche concours Premiière année EGCIM 2020.pdf">  1ere Année</a>&nbsp&nbsp&nbsp<a href="http://egcim.smartedubizness.com/assets/communique&autre/Fiche concours Troisième Année EGCIM  2020.pdf">3eme Année</a></strong>
									</p>
									<br>
								<p>
									Connectez-vous si vous vous êtes déjà enregistré <button><a href="<?= site_url('concours/login')?>"> Login</a></button> 
								</p>
							</div>
			            </section>
			            <!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
			            	<span class="step-number">Etape 02</span>
			            	<span class="step-text">Identification du Candidat</span>
			            </h2>
			            <section>
			                <div class="inner">
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="username">Noms*</label>
										<input type="text" placeholder="Noms" class="form-control" id="username" name="noms" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="username">Prenoms</label>
										<input type="text" placeholder="Prenoms" class="form-control" id="last_name" name="prenoms">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="username">Date de naissance*</label>
										<input type="date" class="form-control" id="date_naissance" name="date_naissance" required min="01/01/2006">
									</div>
									<div class="form-holder form-holder-2">
										<label for="username">Lieu de naissance</label>
										<input type="text" class="form-control" id="lieu_naissance" name="lieu_naissance">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="username">Sexe*</label>
										<select name="sexe" id="sexe" class="form-control" required>
											<option value="" disabled selected>Sexe</option>
											<option value="Homme">Homme</option>
											<option value="Femme">Femme</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="username">Fils ou Fille de</label>
										<input type="text" class="form-control" id="nom_pere" name="nom_pere">
									</div>
									<div class="form-holder form-holder-2">
										<label for="username">Et de</label>
										<input type="text" class="form-control" id="et_de" name="nom_mere">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="pays">Pays D'origine*</label>
										<select name="pays" required id="pays_origine" onchange="getPays();">
											<option>--Pays--</option>
											<option value="Cameroun">Cameroun </option>
											<option value="Tchad">Tchad </option>
											<option value="RCA">République Centre Africain</option>
											<option value="Gabon">Gabon </option>
											<option value="Ghana">Ghana </option>
											<option value="Guinee">Guinee </option>
											<option value="Guinee equatoriale">Guinee_Equatoriale </option>
											<option value="Mali">Mali </option>
											<option value="Maroc">Maroc </option>
											<option value="Rwanda">Rwanda </option>
											<option value="Afrique_du_sud">Afrique_du_Sud </option>
											<option value="Algerie">Algerie </option>
											<option value="Belgique">Belgique </option>
											<option value="Botswana">Botswana </option>
											<option value="Congo">Congo </option>
											<option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
											<option value="Egypte">Egypte </option>
											<option value="Ethiopie">Ethiopie </option>
											<option value="Kenya">Kenya </option>
											<option value="Togo">Togo </option> 
											<option value="Tunisie">Tunisie </option>
											<option value="Zambie">Zambie </option>
											<option value="Zimbabwe">Zimbabwe </option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2" id='r'>
										<label for="username">Région d'origine*</label>
										<select name="region_origine" required id="region_origine">
											<option disabled>Région</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="email">Adresse Email</label>
										<input type="email" placeholder="Your Email" class="form-control" id="email" name="email" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
									</div>
									<div class="form-holder form-holder-2">
										<label for="tel">Téléphone*</label>
										<input type="text" placeholder="+237" class="form-control" id="tel" name="tel" maxlength="9" pattern="^6[0-9]{8}" required>
									</div>
								</div>
							</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
			            	<span class="step-number">Etape 03</span>
			            	<span class="step-text">Cursus Scolaire et Universitaire</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="form-row">
			                		<div class="form-holder form-holder-2">
										<label for="center">Année d'entrée*</label>
										<select name="anne_entree" id="anne_entree" class="form-control" required>
											<option value="" disabled selected>Année d'entrée</option>
											<option value="Premiere Annee">Premiere Année</option>
											<option value="Troisieme Annee">Troisieme Année</option>
										</select>
									</div>
									<div class="form-holder form-holder-2">
										<label for="center">Centre d'Examen choisie*</label>
										<select name="centre_examen" id="centre_examen" class="form-control" required>
											<option value="" disabled selected>Centre</option>
											<option value="Ngaoundéré">Ngaoundéré</option>
											<option value="Yaoundé">Yaoundé</option>
											<option value="Douala">Douala</option>
											<option value="Bamenda">Bamenda</option>
											<option value="Buea">Buea</option>
											<option value="Dschang">Dschang</option>
											<option value="Maroua">Maroua</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="annee_bacc">Année d'obtention du BACC</label>
										<input type="number" class="form-control" id="annee_bacc" name="annee_bacc" min="2000">
									</div>
									<div class="form-holder form-holder-2">
										<label for="username">Serie</label>
										<input type="text" placeholder="Serie" class="form-control" id="serie" name="serie">
										
									</div>
									
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="username">Centre</label>
										<input type="text" placeholder="Centre" class="form-control" id="centre_bacc" name="centre_bacc">
									</div>
									<div class="form-holder form-holder-2">
										<label for="username">Pays</label>
										<select name="pays_bacc" required>
											<option value="Cameroun">Cameroun </option>
											<option value="Tchad">Tchad </option>
											<option value="RCA">République Centre Africain</option>
											<option value="Gabon">Gabon </option>
											<option value="Ghana">Ghana </option>
											<option value="Guinee">Guinee </option>
											<option value="Guinee equatoriale">Guinee_Equatoriale </option>
											<option value="Mali">Mali </option>
											<option value="Maroc">Maroc </option>
											<option value="Rwanda">Rwanda </option>
											<option value="Afrique_du_sud">Afrique_du_Sud </option>
											<option value="Algerie">Algerie </option>
											<option value="Belgique">Belgique </option>
											<option value="Botswana">Botswana </option>
											<option value="Congo">Congo </option>
											<option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
											<option value="Egypte">Egypte </option>
											<option value="Ethiopie">Ethiopie </option>
											<option value="Kenya">Kenya </option>
											<option value="Togo">Togo </option> 
											<option value="Tunisie">Tunisie </option>
											<option value="Zambie">Zambie </option>
											<option value="Zimbabwe">Zimbabwe </option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="username">Année d'Obtention de Licence/DUT</label>
										<input type="number" class="form-control" id="annee_licence" name="annee_licence" min="2000">
									</div>
									<div class="form-holder form-holder-2">
										<label for="username">Pays</label>
										<select name="pays_licence" required>
											<option value="Cameroun">Cameroun </option>
											<option value="Tchad">Tchad </option>
											<option value="RCA">République Centre Africain</option>
											<option value="Gabon">Gabon </option>
											<option value="Ghana">Ghana </option>
											<option value="Guinee">Guinee </option>
											<option value="Guinee equatoriale">Guinee_Equatoriale </option>
											<option value="Mali">Mali </option>
											<option value="Maroc">Maroc </option>
											<option value="Rwanda">Rwanda </option>
											<option value="Afrique_du_sud">Afrique_du_Sud </option>
											<option value="Algerie">Algerie </option>
											<option value="Belgique">Belgique </option>
											<option value="Botswana">Botswana </option>
											<option value="Congo">Congo </option>
											<option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
											<option value="Egypte">Egypte </option>
											<option value="Ethiopie">Ethiopie </option>
											<option value="Kenya">Kenya </option>
											<option value="Togo">Togo </option> 
											<option value="Tunisie">Tunisie </option>
											<option value="Zambie">Zambie </option>
											<option value="Zimbabwe">Zimbabwe </option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="username">Domaine</label>
										<input type="text" placeholder="Domaine" class="form-control" id="domaine" name="domaine">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Composez-Vous en Anglais ou en Français</legend>
												<input id="how-friend" name="langue" type="radio" value="Français">
											    <label for="how-friend" class="side-label">Français</label><br>

											    <input id="how-internet" name="langue" type="radio" value="Anglais">
											    <label for="how-internet" class="side-label">Anglais</label>
										</fieldset>
									</div>
								</div>
							</div>
			            </section>
						<!-- SECTION 4 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-home"></i></span>
			            	<span class="step-number">Etape 04</span>
			            	<span class="step-text">Années Précedent le Concours</span>
			            </h2>
			            <section>
			                <div class="inner">
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset style="width: 110%;">
											<legend>Etude des 5 dernières années précedent le Concours</legend>
												<div class="border">
						                          <div class="table-responsive">
						                          	<p>
						                          		En remplissant correctement le tableau ci-dessous, indiquez les études suivie durant les 5 années précedent le concours:
						                          	</p>
						                            <table class="table table-striped table-bordered">
						                                <thead>
						                                    <tr style="color: white;">
						                                        <th>Année</th>
						                                        <th>Etablissement Fréquenté</th>
						                                        <th>Classe Suivie</th>
						                                        <th>Examens Préparé</th>
						                                        <th>Résultats</th>
						                                        <th>Mention</th>
						                                    </tr>
						                                </thead>
						                                <tbody>
						                                    <tr>
						                                        <td>2020/2021</td>
						                                        <td><input type="text" name="etab1"></td>
						                                        <td><input type="text" name="etab2"></td>
						                                        <td><input type="text" name="etab3"></td>
						                                        <td><input type="text" name="etab4"></td>
						                                        <td><input type="text" name="etab5"></td>
						                                    </tr>
						                                    <tr>
						                                    	<td>2019/2020</td>
						                                        <td><input type="text" name="classe1"></td>
						                                        <td><input type="text" name="classe2"></td>
						                                        <td><input type="text" name="classe3"></td>
						                                        <td><input type="text" name="classe4"></td>
						                                        <td><input type="text" name="classe5"></td>
						                                    </tr>
						                                    <tr>
						                                        <td>2018/2019</td>
						                                        <td><input type="text" name="examen1"></td>
						                                        <td><input type="text" name="examen2"></td>
						                                        <td><input type="text" name="examen3"></td>
						                                        <td><input type="text" name="examen4"></td>
						                                        <td><input type="text" name="examen5"></td>
						                                    </tr>
						                                    <tr> 
						                                        <td>2017/2018</td>
						                                        <td><input type="text" name="result1"></td>
						                                        <td><input type="text" name="result2"></td>
						                                        <td><input type="text" name="result3"></td>
						                                        <td><input type="text" name="result4"></td>
						                                        <td><input type="text" name="result5"></td>
						                                    </tr>
						                                    <tr>
						                                        <td>2016/2017</td>
						                                        <td><input type="text" name="mention1"></td>
						                                        <td><input type="text" name="mention2"></td>
						                                        <td><input type="text" name="mention3"></td>
						                                        <td><input type="text" name="mention4"></td>
						                                        <td><input type="text" name="mention5"></td>
						                                    </tr>
						                                </tbody>
						                            </table>
						                        </div>
						                    	</div><br>
						                    	<p>
						                    		<strong>NB: Toute fausse information entraînera l'élimination immédiate du candidat</strong>
						                    	</p>
										</fieldset>
									</div>
								</div>
							</div>
			            </section>
			            <!-- SECTION 5 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
			            	<span class="step-number">Etape 05</span>
			            	<span class="step-text">Reçu de Paiement</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="date_paiement">Date de payement</label>
										<input type="date" class="form-control" name="date_paiement">
									</div>
								</div>
								
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="agence">Agence</label>
										<input type="text" class="form-control" name="agence">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="numero_recu">Numéro de Reçu </label>
										<input type="number" class="form-control" name="numero_recu">
									</div>
								</div>
			                	<div>
			                		<i>Cliquez sur "Valider"</i>
			            			<button class="btn btn-success" type="submit">Valider</button>
			                	</div>
							</div>
			            </section>
									            <!-- SECTION 6 
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
			            	<span class="step-number">Etape 06</span>
			            	<span class="step-text">Confirmation</span>
			            </h2>
			            <section>
			                <div class="inner">
					            <h3>Comfirm Details</h3>
									<div class="form-row table-responsive">
										<table class="table">
											<tbody>
												<tr class="space-row">
													<th>Noms et Prénom:</th>
													<td id="username-val"></td>
												</tr>
												<tr class="space-row">
													<th>Date de naissance:</th>
													<td id="date_naissance-val"></td>
												</tr>
												<tr class="space-row">
													<th>Lieu de naissance:</th>
													<td id="lieu_naissance-val"></td>
												</tr>
												<tr class="space-row">
													<th>Région d'Origine:</th>
													<td id="region_origine-val"></td>
												</tr>
												<tr class="space-row">
													<th>Nationalité:</th>
													<td id="nationalite-val"></td>
												</tr>
												<tr class="space-row">
													<th>Numéro de Téléphone:</th>
													<td id="number-val"></td>
												</tr>
												<tr class="space-row">
													<th>Centre d'Examen Choisier:</th>
													<td id="centre_choisi-val"></td>
												</tr>
												<tr class="space-row">
													<th>Langue de composition:</th>
													<td id="langue_compos-val"></td>
												</tr>
											</tbody>
										</table>
									</div>
									<strong>Veuillez Vous Rassurez que vos informations sont corrects </strong>
									<p>
										<a href="" style="color: white;">Imprimer ?</a>
									</p>
							</div>
						</section>
						-->
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		console.log('ksadfadklfj');
		$("#pays_origine").change(function(){
			console.log('Testons voir');
			var valeur = $(this).val();
			var texte = '';
			alert(valeur);
			if (valeur == 'Cameroun') {
				
				texte += '<option value="AD">Adamaoua</option>';
				texte += '<option value="CE">Centre</option>';
				texte += '<option value="EN">Extrême-Nord</option>';
				texte += '<option value="ES">Est</option>';
				texte += '<option value="LT">Littoral</option>';
				texte += '<option value="NO">Nord</option>';
				texte += '<option value="NW">Nord-Ouest</option>';
				texte += '<option value="OU">Ouest</option>';
				texte += '<option value="SU">Sud</option>';
				texte += '<option value="SW">Sud-Ouest</option>';
				$('#region_origine').append(text);
			}
			else{
				texte = '<label for="region_origine">Région d\'origine </label><input type="text" class="form-control" id="region_origine" name="region_origine">';
				$('#region_origine').empty();
				$('#r').append(text);

			}
		});

		function getPays() {
			// body...
			var el = document.getElementById('pays_origine');
			var valeur = el.value;
			//alert(valeur);
			var texte = '';
			var option = '';
			//console.log(valeur);
			var region = document.getElementById('region_origine');
			if (valeur == "Cameroun") {
				//console.log('verifie');
				option = document.createElement("option");
				option.text = "Adamaoua";
				option.value = "AD";
				region.add(option);
				option = document.createElement("option");
				option.text = "Centre";
				option.value = "AD";
				region.add(option);
				option = document.createElement("option");
				option.text = "Extrême-Nord";
				option.value = "AD";
				region.add(option);
				option = document.createElement("option");
				option.text = "Est";
				option.value = "AD";
				region.add(option);
				option = document.createElement("option");
				option.text = "Littoral";
				option.value = "AD";
				region.add(option);
				option = document.createElement("option");
				option.text = "Nord";
				option.value = "AD";
				region.add(option);
				option = document.createElement("option");
				option.text = "Nord-Ouest";
				option.value = "AD";
				region.add(option);
				option = document.createElement("option");
				option.text = "Ouest";
				option.value = "AD";
				region.add(option);
				option = document.createElement("option");
				option.text = "Sud";
				option.value = "AD";
				region.add(option);
				option = document.createElement("option");
				option.text = "Sud-Ouest";
				option.value = "SW";
				region.add(option);
			}
			else{
				//d.parentNode.removeChild(region);
				region.remove();
				var input = document.createElement('input');
				input.type = 'text';
				input.class = 'form-control';
				input.name = 'region_origine';
				input.id = 'region_origine';
				var d = document.getElementById('r');
				d.appendChild(input);
				//$('#region_origine').empty();
				//$('#r').append(text);

			}
		}
	</script>
	
</body>
</html>