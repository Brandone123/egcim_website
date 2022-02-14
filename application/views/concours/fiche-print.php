<html>
<head>
    <title>Fiche de candidat</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./logo40.png">
    <style type="text/css">
        table{
            margin: auto;
        }
        *{
            font-size: 14px;
            font-family: Century, sans-serif;
        }

        .titre{
            font-size: 26px;
        }.titre2{
             font-size: 18px;
         }
        .footer td{
            padding: 10px;
        }
        .content td{
            padding: 5px;
        }
        small,.small{
            font-size: 12px;
        }
        .header{
            background: lightgray;
        }
        

        .bold{
            font-weight: bold;
        }
        .content{
            border-collapse: collapse;
        }
        .content td{
            border-collapse: collapse;

            border: 1px solid #6b6d6e;
        }
        .content th{
             border-collapse: collapse;

             border: 1px solid #6b6d6e;
         }
        .col-pk-2{
            width: 20%;
        }
        .col-pk-4{
            width: 40%;
        }
        .col-pk-10{
            width: 100%;
        }
        .text-center{
            text-align: center;
        }
        .total{
            text-align: center;
            background: cyan;
            font-weight: bold;
            font-size: 24px;
        }
        b,i,p,td{
            font-family: century;
        }
    </style>
</head>
<body>
    <table style='vertical-align: top; line-height: 4mm;' class="col-pk-10">
        <tr class="col-pk-10">
            <td class='text-center col-pk-10'>
                <b style="font-family: century, Times; font-size: 15px">FICHE DE CANDIDATURE AU CONCOURS D'ENTREE EN <?= strtoupper($informations->anne_entree)?> DE L'ÉCOLE DE GÉNIE CHIMIQUE ET DES INDUSTRIES MINÉRALES (EGCIM) DE NGAOUNDERE</b><br>
                <b><i style="font-family: century, Times; font-size: 15px">Candidate's Form For the Entrance Examination into the 
                <?php 
                    if($informations->anne_entree == "Premiere Annee"){
                        echo "First Year";
                    }
                    else
                        echo "Third Year";
                ?> 
                of Chemical Engineering And Mineral Industries School (EGCIM) of Ngaoundere</i></b>
            </td>
            
            <td class='text-center col-pk-2' style="border: 1px solid black;">
                <br><br>
                Timbre fiscal <br>
                de 1000 FCFA <br>
                <i>(Fiscal stamp)</i> <br>
                <br><br>

            </td>
        </tr>
    </table>
    <p>
        <b>Année académique: 2020/2021</b> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Code: <?= $informations->code?><br>
        <i>Academic Year</i>
    </p>
    <p align="center">
        <b style="font-family: century; text-align: center; font-size: 14px">I- ETAT CIVIL</b><br>
        <i style="font-family: century; text-align: center; font-size: 14px">PERSONAL DATA</i>
    </p>
    <p style="margin-bottom: 5px">
        <b>Nom</b>/
        <i>Name: <?= $informations->noms?></i>
        
    </p>
    <p style="margin-top: 0px; margin-bottom: 5px">
        <b>Prénoms/</b>
        <i>First name:</i>
        <b><?= $informations->prenoms?></b>
        
    </p>
    <p style="margin-top: 0px; margin-bottom: 5px">
        <b>Né(e) le:  <?= (new DateTime($informations->date_naissance))->format('d/m/Y')?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;à : 
        <?= $informations->lieu_naissance?> </b><br>
        <i>Date of birth</i> 
    </p>
    <p style="margin-top: 0px; margin-bottom: 5px">
        <b>Fils ou fille de : <?= $informations->nom_pere?></b><br>
        <i>Son or daughter of</i>
    </p>
    <p style="margin-top: 0px; margin-bottom: 5px">
        <b>Et de</b>/
        <i>and of: <?= $informations->nom_mere?></i>
    </p>
    <p style="margin-top: 0px; margin-bottom: 5px">
        <b>Région d’origine : <?= $informations->region_origine?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nationalité: <?= $informations->pays?></b><br>
        <i>Region of origin Nationality</i>
    </p>
    <p style="margin-top: 0px; margin-bottom: 5px">
        <b>Adresse personnelle/</b>
        <i>Personal address:</i>
    </p>
    <p style="margin-top: 0px; margin-bottom: 5px">
        <b>Email: <?= $informations->email?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tél.: <?= $informations->tel?></b>
    </p>
    <p align="center">
        <b style="font-family: century; text-align: center; font-size: 14px">II- CONCOURS ET CURSUS SCOLAIRE ET/OU UNIVERSITAIRE</b><br>
        <i style="font-family: century; text-align: center; font-size: 14px"></i>
    </p>
    <p style="margin-top: 0px; margin-bottom: 5px">
        <b>Centre d'Examen choisi (*) : <?= $informations->centre_examen?></b><br>
        <i>Examination Centre choosen</i>
    </p>
    <p style="margin-top: 0px; margin-bottom: 5px">
        <b>Année d'obtention du BACC: <?= $informations->annee_bacc?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Série: <?= $informations->serie?>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pays: <?= $informations->pays_bacc?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Centre: <?= $informations->centre_bacc?></b><br>
        <i>Year of obtaining of the GCE/AL Specialisation Country Centre</i>
    </p>
    <p style="margin-top: 0px; margin-bottom: 5px">
        <b>Composez-vous en anglais ou en français ?(*): <?= $informations->langue?></b><br>
        <i>Will you write in English or French?</i>
    </p>
    <p style="margin-top: 0px; margin-bottom: 5px">
        <b>En remplissant correctement le tableau ci-dessous, indiquez les études suivies durant les cinq(5) années précédant le concours.</b><br>
        <i>Fill the table below, indicating the type of studies you did during the last five (5) prior to the date of sitting this Entrance Examination.</i>
    </p>
    <table style="border: 1px solid black; border-collapse: collapse; width: 100%" >
        <tr>
            <td style="border: 1px solid black; text-align: center;">
                <b>Année</b><br>
                <i>Year</i>
            </td>
            <td style="border: 1px solid black; text-align: center;">
                <b>Etablissement fréquenté</b><br>
                <i>School in which you studied</i>
            </td>
            <td style="border: 1px solid black; text-align: center;">
                <b>Classe suivie</b><br>
                <i>Class attended</i>
            </td>
            <td style="border: 1px solid black; text-align: center;">
                <b>Examen préparé</b><br>
                <i>Examination prepared</i>
            </td>
            <td style="border: 1px solid black; text-align: center;">
                <b>Résultats</b><br>
                <i>Results</i>
            </td>
            <td style="border: 1px solid black; text-align: center;">
                <b>Mention</b><br>
                <i>Rank</i>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid black; font-family: century">
                2019/2020
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->etab1?>
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->etab2?>
                
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->etab3?>
                
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->etab4?>
                
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->etab5?>
                
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid black;">
                2018/2019
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->classe1?>
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->classe2?>
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->classe3?>
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->classe4?>
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->classe5?>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid black;">
                2017/2018
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->examen1?>
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->examen2?>
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->examen3?>
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->examen4?>
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->examen5?>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid black;">
                2016/2017
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->result1?>
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->result2?>
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->result3?>
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->result4?>
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->result5?>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid black;">
                2015/2016
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->mention1?>
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->mention2?>
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->mention3?>
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->mention4?>
            </td>
            <td style="border: 1px solid black;">
                <?= $informations->mention5?>
            </td>
        </tr>
    </table><br>
    <p>
        <b>N.B. : Toute fausse information entraînera l'élimination immédiate du candidat.</b><br>
        <i>Any false information will immediately disqualify the candidate.</i>
    </p>
    <table style='vertical-align: top; line-height: 4mm;' class="col-pk-10">
        <tr class="col-pk-12">
            <td class='text-center col-pk-2' style="border: 1px solid black;">
                <br><br>
                Coller votre photo <br>
                <i>(Photograph)</i> <br>
                <br><br>

            </td>
            <td class='col-pk-10'>
                <b style="text-align: left">A:__________________________________ Le __________________________________________</b> <br> 
                <i>At &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On</i><br>
                <p align="center">
                    <b>Nom et signature du candidat</b>/
                    <i>Name and signature</i>
                </p>
            </td>
        </tr>
    </table>
</body>
</html>