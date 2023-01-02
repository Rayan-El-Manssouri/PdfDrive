<?php 
require '../vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf();

$top_button_radio = "70px";
$top_button_radio2 = "90px";
$font_size_formaliter = "10px";
$top_text_formaliter = "70px";
$top_text_formaliter_2 = "89px";

$html = "
    <div  style='position: absolute;  top: 20px;'>
        <img src='../asset/pdf/logo.jpg' style='width: 60.5px; top: -2px; left: 16px; position: absolute;' >
        <span style='position: absolute; left: 110px;  color: #0B368C; font-size: 17px; font-weight: bold; top: -45px;'>DEMANDE DE CERTIFICAT D’IMMATRICULATION D’UN VÉHICULE <br></span>
        <span style='position: absolute; top: 25px; left: 245px;  font-size: 13px;'>Articles R. 322-1 et suivants du code de la route <br> </span>
        <span style='position: absolute; top: 43px; left: 256px; font-size: 12px; font-weight: bold;'>Veuillez cocher la case correspondante :</span>
        <img src='../asset/pdf/logo_cerfa.png' style='position: absolute; width: 55px; left: 670px;' >
        <span style='position: absolute; font-weight: bold; left: 655px; top: 26px;'>N° 13750*05</span>
        <span style='position: absolute; left: 160px; top: $top_button_radio;'><input type='radio'  ></span>
        <span style='position: absolute; left: 175px; top: $top_text_formaliter; color: #0B368C; font-weight: bold; font-size: $font_size_formaliter;'>Certificat</span>
        <span style='position: absolute; left: 250px; top: $top_button_radio;'><input type='radio'  ></span>
        <span style='position: absolute; left: 265px; top: $top_text_formaliter; color: #0B368C; font-weight: bold; font-size: $font_size_formaliter;'>Duplicata</span>
        <span style='position: absolute; left: 340px; top: $top_button_radio;'><input type='radio'  ></span>
        <span style='position: absolute; left: 355px; top: $top_text_formaliter; color: #0B368C; font-weight: bold;  font-size: $font_size_formaliter;'>Correction</span>
        <span style='position: absolute; left: 440px; top: $top_button_radio;'><input type='radio'  ></span>
        <span style='position: absolute; left: 455px; top: $top_text_formaliter; color: #0B368C; font-weight: bold;  font-size: $font_size_formaliter;'>Changement de domicile</span>
        <span style='position: absolute; left: 80px; top: $top_button_radio2;'><input type='radio'  ></span>
        <span style='position: absolute; left: 92px; top: $top_text_formaliter_2; color: #0B368C; font-weight: bold; font-size: $font_size_formaliter;'>Changement d’état civil ou d’état matrimonial de domicile</span>
        <span style='position: absolute; left: 400px; top: $top_text_formaliter_2; color: #0B368C; font-weight: bold;  font-size: $font_size_formaliter;'>Changement des caractéristiques techniques du véhicule </span>
        <span style='position: absolute; left: 380px; top: $top_button_radio2;'><input type='radio'  ></span>
    </div>
    <div style='position: absolute;  top: 150px; background-color: #0B368C; color: #fff; padding: 1px; left: 16px; width: 720px;'>
    <span style='position: absolute; top: 2px; left: 10px;'>VÉHICULE</span></div>
    <span style='position: absolute; top: 173px; left: 20px;'>|</span>
    <span style='position: absolute; top: 173px; left: 18px;'>_________________</span>
    <span style='position: absolute; top: 173px; left: 142px;'>|</span>
    <span style='position: absolute; top: 185px; left: 18px; font-size: 8px;'>(A) Numéro d’immatriculation actuel</span>
    <div style='position: absolute; top: 186px; left: 167.3px; border-bottom: black; width: 24.3px;'></div>
    <div style='position: absolute; top: 186px; left: 187.3px; border-bottom: black; width: 24.3px;'></div>
    <div style='position: absolute; top: 186px; left: 217.3px; border-bottom: black; width: 24.3px;'></div>
    <div style='position: absolute; top: 186px; left: 237.3px; border-bottom: black; width: 23px;'></div>
    <span style='position: absolute; top: 173px; left: 166px;'>|</span>
    <span style='position: absolute; top: 173px; left: 186px;'>|</span>
    <span style='position: absolute; top: 173px; left: 206px;'>|</span>
    <span style='position: absolute; top: 173px; left: 212px;'>|</span>
    <span style='position: absolute; top: 173px; left: 232px;'>|</span>
    <span style='position: absolute; top: 173px; left: 252px;'>|</span>


";
$html2pdf->writeHTML($html);
$html2pdf->output();
?>