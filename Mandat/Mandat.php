<?php 
require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;



$html = "
<style>
    /* Hashage */
   *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
   }

   /* Style header */
   .header{
        position: absolute;
        font-size: 40px;
        top: 0;
        width: 100%;
    }

    /* Header - logo */
    .header img{
        width: 81px;
    }

    /* Header - Titre */
    .header h1{
        text-align: center;
        position: absolute;
        top: 20px;
        line-height: 0.5px;
        color: #0B368C;
    }

    .header span{
        font-size: 15px;
        line-height: 1px;
        position: absolute;
        top: 30px;
        left: 10px;
        
    }

    .header .logo_cerfa img{
        position: absolute;
        right: 0;
    }

    .cerfa_logo{
        position: absolute;
        right: 0;
    }

    .cerfa_logo span{
        top: 4px;
    }

    .cerfa_logo img{
        width: 60px;
        position: absolute;
        left: 30px;
    }

    .central{
        position: absolute;
        top: 150px;
        left: 50px;
    }

    .domicilie{
        position: absolute;
        font-weight: bold;
        top: 220px;
        left: 20px;
    }


</style>
<page>
    <link rel='icon' href='./src/fleche.png' >
    <!-- Haut de page -->
    <div class='header'>
        <!-- Logo du ministerer de l'intérieur -->
        <img src='./src/logo.jpg'>
        <h1>MANDAT</h1>
        <span>
            <br>
            <span style='left: 40%;'>POUR EFFECTUER <br> </span>
            <span style='left: 12%; top: 50px;'>LES FORMALITÉS D'IMMATRICULATION AUPRÈS DU MINISTRE DE L'INTÉRIEUR</span>
        </span>
        <!-- Parti cerfa logo -->
        <div class='cerfa_logo'>
            <img src='./src/logo_cerfa.png' >
            <span>N° 13757*03</span>
        </div>
    </div>
    <!-- Parti central -->
    <div style='position: absolute; top: 20px;'>
        <div class='central'>
            <div style='position: absolute; left: -28px;'>
                <span style='font-weight: bold;'>Je soussigné(e),</span>
                |<div style='border-bottom: 1px solid black; width: 400px; position: absolute; top: 14px; left: 109.7px; '></div>
                <span style='position: absolute; left: 508px; top: 0.44px;'>|</span> <br>
                <span style='font-size: 10px; top: 20px; left: 110px; position: absolute;'>NOM, NOM D’USAGE le cas échéant et PRÉNOM ou RAISON SOCIALE</span>
                </div>
                <div style='position: absolute; top: -149.9px; left: -80px;'>
                    <span style='position: absolute; top: 151px; left: 760px;'>|</span>
                    <div style='width: 210px; position: absolute; top: 164.4px; left: 570px; border-bottom: 1px solid black;'></div>
                    <span style='position: absolute; top: 151px; left: 568px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 580px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 596px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 610px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 625px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 640px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 655px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 670px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 686px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 702px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 717px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 730px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 745px;'>|</span>
                    <span style='position: absolute; top: 151px; left: 775px;'>|</span>
                </div>
            </div>
            <div class='domicilie'>
                <p>domicilié(e) à : </p>
                <span  style='position: absolute; left: 108px; top: 0;'>|</span>
                <div style='border-bottom: 1px solid black; width: 70px; position: absolute; left: 109.2px; top: 14px;' ></div>
                <span style='position: absolute; left: 177px; top: 0.4px;'>|</span> 
                <span style='font-weight: none; font-size: 10px; position: absolute; top: 18px; left: 105px;'>N° de la voie</span>   
            </div>
            <div style=' position: absolute; font-weight: bold; top: 220px; left: 100px;'>
                <span  style='position: absolute; left: 108px; top: 0;'>|</span>
                <div style='border-bottom: 1px solid black; width: 90px; position: absolute; left: 109.2px; top: 14px;' ></div>
                <span style='position: absolute; left: 198px; top: 0.4px;'>|</span> 
                <span style='font-weight: none; font-size: 10px; position: absolute; top: 18px; left: 105px;'>Extension (bis, ter, .)</span>   
            </div>
            <div style=' position: absolute; font-weight: bold; top: 220px; left: 200px;'>
                <span  style='position: absolute; left: 108px; top: 0;'>|</span>
                <div style='border-bottom: 1px solid black; width: 140px; position: absolute; left: 109.2px; top: 14px;' ></div>
                <span style='position: absolute; left: 248px; top: 0.4px;'>|</span> 
                <span style='font-weight: none; font-size: 10px; position: absolute; top: 18px; left: 105px;'>Type de voie (avenue, etc.)</span>   
            </div>
            <div style=' position: absolute; font-weight: bold; top: 220px; left: 350px;'>
                <span  style='position: absolute; left: 108px; top: 0;'>|</span>
                <div style='border-bottom: 1px solid black; width: 290px; position: absolute; left: 109.2px; top: 14px;' ></div>
                <span style='position: absolute; left: 398px; top: 0.4px;'>|</span> 
                <span style='font-weight: none; font-size: 10px; position: absolute; top: 18px; left: 105px;'>Nom de la voie</span>   
            </div>

            <!-- Deuciéme parti -->
            <div style='position: absolute; left: -438px; top: 120px;'>
                <div style='width: 84px; position: absolute; top: 164.4px; left: 570px; border-bottom: 1px solid black;'></div>
                <span style='position: absolute; top: 151px; left: 568px;'>|</span>
                <span style='position: absolute; top: 151px; left: 588px;'>|</span>
                <span style='position: absolute; top: 151px; left: 608px;'>|</span>
                <span style='position: absolute; top: 151px; left: 628px;'>|</span>
                <span style='position: absolute; top: 151px; left: 648px;'>|</span>
            </div>
            <div style='position: absolute; left: -338px; top: 120px;'>
                <div style='width: 254px; position: absolute; top: 164.4px; left: 570px; border-bottom: 1px solid black;'></div>
                <span style='position: absolute; top: 151px; left: 568px;'>|</span>
                <span style='position: absolute; top: 151px; left: 819px;'>|</span>
            </div>
            <div style='position: absolute; left: -75px; top: 120px;'>
                <div style='width: 254px; position: absolute; top: 164.4px; left: 570px; border-bottom: 1px solid black;'></div>
                <span style='position: absolute; top: 151px; left: 568px;'>|</span>
                <span style='position: absolute; top: 151px; left: 819px;'>|</span>
            </div> 
            <!-- Text adresse -->
            <div style='ont-weight: none; font-size: 10px;position: absolute; top: 290px; left: 130px;'>
                <span>Code postal</span>
                <span style='position: absolute; left: 100px;'>Nom de la commune</span>
                <span style='position: absolute; left: 370px;'>Pays</span>
            </div>
            <div style='position: absolute; top: 330px; left: 20px;'>
                <h5>donne mandat à :</h5>
                <div >
                <span style='position: absolute; left: 108px; top: 0.5px;'>|</span>
                    <div style='border-bottom: 1px solid black; width: 330px; position: absolute; top: 14px; left: 109.7px; '></div>
                    <span style='position: absolute; left: 438px; top: 0.44px;'>|</span> <br>
                    <span style='font-size: 10px; top: 20px; left: 110px; position: absolute;'>NOM, NOM D’USAGE le cas échéant et PRÉNOM ou RAISON SOCIALE </span>
                </div>
                <div style='position: absolute; left: -12px;'>
                    <span style='position: absolute; width: 250px; left: 458.5px; top: 1.7px;'>|</span>
                    <div style='border-bottom: 1px solid black; position: absolute; width: 283px; left: 460px; top: 15px;' ></div>
                    <span style='position: absolute; width: 210px; left: 478px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 498px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 518px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 538px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 558px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 578px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 598px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 618px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 638px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 658px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 678px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 698px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 718px; top: 1.7px;'>|</span>
                    <span style='position: absolute; width: 210px; left: 738px; top: 1.7px;'>|</span>
                </div> 
                <span style='position: absolute; left: 458.5px; top: 20px; font-size: 10px;'>N° SIRET, le cas échéant</span>
            </div>
            <div style='position: absolute; top: 400px; left: 20px;'>
                <h5> pour effectuer pour mon compte les formalités administratives liées à l’opération d’immatriculation suivante :</h5>
                <div style=' position: absolute; top: 50px;'>
                    <span  style='position: absolute; left: 108px; top: 0;'>|</span>
                    <div style='border-bottom: 1px solid black; width: 440px; position: absolute; left: 109.2px; top: 14px;' ></div>
                    <span style='position: absolute; left: 548px; top: 0.4px;'>|</span> 
                </div>
            </div>
            <div style='position: absolute; top: 500px; left: 20px;' >
                <div style='border-bottom: 1px solid black; width: 115px; padding: 2px;'>
                    <h5  >Véhicule concerné :</h5>
                </div>
                <div style='position: absolute; top: 50px;'>
                    <img src='./src/fleche.png' style='width: 20px;' >
                    <span>Marque :</span>
                    <div style='position: absolute; width: 450px; left: 100px; top: 20px;'>
                        <div style='border-bottom: 1px solid black; ' ></div>
                    </div>
                    <span style='position: absolute; top: -13px; left: 98px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 545px; top: 6.7px;' >|</span>
                </div>
                <div style='position: absolute; top: 120px;'>
                    <img src='./src/fleche.png' style='width: 20px;' >
                    <span>Numéro VIN :</span>
                    <div style='position: absolute; width: 340px; left: 120px; top: 20px;'>
                        <div style='border-bottom: 1px solid black;' ></div>
                    </div>
                    <span style='position: absolute; top: -13px; left: 118px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 135px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 155px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 175px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 195px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 215px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 235px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 255px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 275px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 295px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 315px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 335px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 355px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 375px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 395px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 415px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 435px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 455px; top: 6.7px;' >|</span>
                </div>
                <div style='position: absolute; top: 190px;'>
                    <img src='./src/fleche.png' style='width: 20px;' >
                    <span>Numéro d’immatriculation (le cas échéant) :</span>
                    <div>
                    
                    </div>
                    <div style='position: absolute; width: 340px; left: 290px; top: 20px;'>
                        <div style='border-bottom: 1px solid black;' ></div>
                    </div>
                    <span style='position: absolute; top: -13px; left: 288px; top: 6.7px;' >|</span>
                    <span style='position: absolute; top: -13px; left: 625px; top: 6.7px;' >|</span> 
                </div>
                <div style='position : absolute; top: 250px;'>
                    <input type='checkbox'>
                    <span>Je suis informé (e) que pour circuler avec ce véhicule je suis dans l’obligation de l’assurer préalablement (articles L. <br> <span style='position: absolute; top: 20px; left: 20px;' >324-2 du code de la route).</span>
                    </span>
                    <br>
                    <br>
                    <br>
                    <span style='font-style: italic;'>Important : Si vous circuliez avec un véhicule non assuré, en cas d’accident, vos dommages ne seraient pas couverts  <br> et, en cas
                    d’éventuelles victimes, vous pourriez être amené (e) à rembourser des sommes considérables. De plus, <br> vous vous exposeriez à des
                    sanctions pénales.</span>
                </div>
            </div>
            <div style='position: absolute; top: 900px; left: 40px;'>
                <span>Fait à :</span>
                <div style='border-bottom: 1px solid black;  width: 300px; position: absolute; left: 50px; top: 10px;' ></div>
                <div style='position: absolute; border-bottom: 1px solid black; width: 43.8px; left: 400px; top: 10px;'></div>
                <div style='position: absolute; border-bottom: 1px solid black; width: 41px; left: 450px; top: 10px;'></div>
                <div style='position: absolute; border-bottom: 1px solid black; width: 60px; left: 500px; top: 10px;'></div>
                <span style='position: absolute; left: 398px; top: -3.5px;'>|</span>
                <span style='position: absolute; left: 418px; top: -3.5px;'>|</span>
                <span style='position: absolute; left: 438px; top: -3.5px;'>|</span>
                <span style='position: absolute; left: 445px; top: -3.5px;'>|</span>
                <span style='position: absolute; left: 465px; top: -3.5px;'>|</span>
                <span style='position: absolute; left: 485px; top: -3.5px;'>|</span>
                <span style='position: absolute; left: 495px; top: -3.5px;'>|</span>
                <span style='position: absolute; left: 515px; top: -3.5px;'>|</span>
                <span style='position: absolute; left: 535px; top: -3.5px;'>|</span>
                <span style='position: absolute; left: 555px; top: -3.5px;'>|</span>
                <span style='position: absolute; left: 370px;'>, le</span>
                <span style='position: absolute; left: 410px; top: 15px; font-size: 10px;'>Jour</span>
                <span style='position: absolute; left: 460px; top: 15px; font-size: 10px;'>Mois</span>
                <span style='position: absolute; left: 510px; top: 15px; font-size: 10px;'>Année</span>
            </div>
        <div style='border: 1px solid #0B368C; padding: 385px; position: absolute; top: 120px; height: 80px; left: -10px;'></div>
        <div style='border: 1px solid #0B368C; padding: 30px; position: absolute; top: 990px; left: -10px; width: 700px; background-color: #CFE6F5;'></div>
        <span style='position: absolute; top: 1000px; font-weight: bold; font-size: 10px; '>La loi n° 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, garantit un droit d’accès et de rectification des données auprès d’une préfecture
        de son choix. <br> <br>
        Je m’oppose à la réutilisation de mes données personnelles à des fins de prospection commerciale <input  type='checkbox' ></span>
    </div>
</page>
";

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($html);
$html2pdf->output();

?>
