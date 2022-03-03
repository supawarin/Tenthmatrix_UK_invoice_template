<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 12,
	'default_font' => 'Hind Siliguri'
]);

$nokhtml = '
<style>
body {
	font-family: Hind Siliguri;
	font-size: 14px;
	padding :0; margin: 0;
}

.col1, .col2, .col3, .col4, {
	float:left;
	width:30%;
}
.col5 {
    width:60%;
}

h1, h2, h3, h4, h5, h6 {
padding: 0;
margin : 0;
}

.floatleft{
	float:left;
}

.floatright{
	float:right;
}
table {
	font-family: Hind Siliguri;
	border-collapse: collapse;
	width: 100%;
    
  }
  
th ,td{
    border-bottom: 1px solid #d1eaf5;
    
    text-align: center;
	padding: 8px;
  }
  
  .items td.blanktotal {
    background-color: #FFFFFF;
    border: 0mm none #F21d55;
   
}
.items td.totals {
    background-color: #d1eaf5;
}

.detail {
    background-color: #d1eaf5;
}
  </style>

<body>

<div class="row">
<div class="col1">
<img src="tenth.png" width="240" />
</div>

<div class="col2 floatright">
<p><b>Adresse :</b><br />Tenthmatrix Ltd. <br />The Coach House, 77A Marlowes <br />Hemel Hempstead Herts, HP1 1LF</p>
</div>

<div class="col3 floatright">
<p><b>E-mail :</b><br />billing@tenthmatrix.co.uk<br /><b>Tél:</b><br /> 44 1442 384 149</p>
</div>
</div>


<hr style="color:#0080fe;">

<div class="row">
<div class="col1">
<img src="iv.3.png" width="200"  />
<br />
</div>

<div class="col2" style="text-align: right;">
<h1>PROJET : </h1>
</div>

<div class="col3 floatright">
<div class="project"><h1>Nouveau site web</h1></div>
</div>
</div>
<hr style="color:#0080fe">

  <htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />

<div class="row">
<div class="col1" style="padding: left 15px; background-color: #bce0f3;">
<h2>FACTURE À :</h2>
<div class="name"><b>NOM :</b> Client ..... </div>
<div class="address"><b>ADRESSE :</b>  UK ,34160..... </div>
<div class="email"><b>E-mail : </b> customer@gmail.com</div>

</div>

<div class="col2" style="text-align: right;">
<h2>FACTURE NON : </h2>
<h2>DATE : </h2>
<h2>DUE DATE : </h2>
<h2>TOTAL : </h2>
</div>

<div class="col3 floatright">
<div class="invoice no"><h2> 123456</h2></div>
<div class="date"><h2> 07/11/2021</h2></div>
<div class="due date"><h2> 21/11/2021</h2></div>
<h2>&#163;665.5</h2>
</div>

</div>
<br />
<!-- INVOICE ITEMS HERE -->



<table class="items" >
<tr style="background-color: #0080fe;">
<td width="10%" style="color: #fff;"><b>PÉRIODE</b></td>
<td width="50%" style="color: #fff;"><b>LA DESCRIPTION</b></td>
<td width="10%" style="color: #fff;"><b>UNITÉS</b></td>
<td width="15%" style="color: #fff;"><b>PRIX UNITAIRE</b></td>
<td width="15%" style="color: #fff;"><b>TOTAL</b></td>
</tr>
<tr>
  <td>1</td>
  <td>Création de sites webe</td>
  <td>1</td>
  <td>&#163;500</td>
  <td>&#163;500</td>
</tr>
<tr>
  <td>2</td>
  <td>Nom de domaine</td>
  <td>1</td>
  <td>&#163;50</td>
  <td>&#163;50</td>
</tr>

<tr>
<td class="blanktotal" colspan="3" rowspan="6">
<h2>Merci pour votre entreprise.</h2>
</td>
</tr>

<tr>
<td class="totals">SUBTOTAL (excl. V.A.T.):</td>
<td class="totals" style="background-color: #d1eaf5;">&#163;550</td>
</tr>

<tr>
<td class="totals">V.A.T. 21,00%:</td>
<td class="totals" style="background-color: #d1eaf5;">&#163; 115.5</td>
</tr>

<tr>
<td class="totals" style="background-color: #0080fe; color: #fff;"><b>TOTAL:</b></td>
<td class="totals" style="background-color: #0080fe; color: #fff;"><b> &#163;665.5</b></td>
</tr>
</table>

<!-- END ITEMS HERE -->

';

$termsHTML = '
<div class="tenthmatrixlogo">
<ximg src="/Volumes/GoogleDrive/.shortcut-targets-by-id/1-9_ANNWeOpmVIwN01qqEiImCs6RH8tks/WorkstationSolsGoogleDrive/Shared_TenthMatrix_CRM_DEV/Tenthmatrixv18/TENTHMATRIX_CRM_DATA/php_components/mpdf60/examples/mysignature.png" width="150" />
</div>




<p><b> Termes:</b> Veuillez noter que nos conditions de paiement pour cette facture sont NET 15. Des intérêts seront facturés sur toutes les factures qui ne sont pas payées à temps.</p>
<p>Merci pour votre entreprise!<br />Numéro de TVA.972 9855 56. Banque: HSBC,Code de tri: 40-24-07,N ° de compte.91565850</p>
<h3>Veuillez effectuer le paiement par virement électronique à:</h3>


<div class="row">
<div class="col5">
<table class="detail">
<tr style="background-color: #eef2f7;">
<td >Nom de banque :</td>
<td >Tide</td>
</tr>

<tr>
<td >Nom du compte :</td>
<td >Tenmatrix Ltd</td>
</tr>

<tr style="background-color: #eef2f7;">
<td>Code de tri :</td>
<td>23-69-72</td>
</tr>

<tr>
<td>Numéro de compte :</td>
<td>16279782</td>
</tr>

<tr style="background-color: #eef2f7;">
<td>Veuillez utiliser la référence:</td>
<td>IT CONSUTING-1415</td>
</tr>
</table>
</div>
</div>
<p>Tenmatrix Ltd UK.commerce également en tant que Tenmatrix,est un numéro d entreprise enregistré :11641870. numéro de TVA: GB 361 746 193. Enregistré England and Wales. Adresse du siège social: The Coach House,77A Marlowes, Hemel Hempstead, Herts, United Kingdom,HP1 1LF.</p>

<p><b>Noter:</b>  Cette facture a été générée automatiquement par Workstation CRM et le système de facturation.</p>
<div class="date">Date: 18/11/2021</div>
<div class="time"> Time: 22:30:05</div>
</body>
  ';
//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>