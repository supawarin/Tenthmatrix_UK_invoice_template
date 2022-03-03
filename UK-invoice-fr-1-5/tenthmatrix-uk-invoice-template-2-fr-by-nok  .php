<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 13,
	'default_font' => 'inter'
]);

$nokhtml = '
<style>
body {
	font-family: inter;
	font-size: 13px;
	padding :0; margin: 0;
}

.col1, .col2, .col3, .col4, .col5, .col6{
	float:left;
	width:40%
}
h1, h2, h3, h4, h5, h6 {
padding-left: 20px;
margin : 0;
}

.floatleft{
	float:left;
}

.floatright{
	float:right;
}
table {
	font-family: inter;
	border-collapse: collapse;
	width: 100%;
    
  }
  
  
th ,td{
    border-top: 1px solid #d1eaf5;
   
    text-align: center;
	padding: 8px;
  }
  img {
    padding: right 10px;
  }

  </style>

  <body>

  <htmlpagefooter name="myfooter">
  <div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
  Page {PAGENO} of {nb}
  </div>
  </htmlpagefooter>
  
  <sethtmlpageheader name="myheader" value="on" show-this-page="1" />
  <sethtmlpagefooter name="myfooter" value="on" />
  
  <div class="row">
  <div class="col1">
  <img src="iv6.png" width="200" />
  <br />
  <br />
  <div class="date"><h2>DATE : 04/11/2021</h2></div>
  <div class="due date"><h2>DUE DATE : 18/11/2021</h2></div>
  <hr style="color:#00a9d3;">
  
  
  <div class="invoice to"><b>FACTURE À :</b>name customer</div>
  <div class="address"><b>ADRESSE :</b> ........</div>
  <div class="tel"><b>TÉL :</b>  000 000 0000</div>
  <div class="email"><b>E-MAIL :</b> customer@gmail.com</div>
  
  </div>
  
  <div class="col2 floatright">
  
  <img src="tenth.png" width="240" />
  <p>Tenthmatrix Ltd. ,The Coach House, 77A Marlowes <br />Hemel Hempstead Herts, HP1 1LF<br />Email: billing@tenthmatrix.co.uk<br />Tel: 44 1442 384 149</p>
  
  <div class="invoice no"><h3>FACTURE NON: 12345</h3></div>
  <div class="project"><h3>PROJET:Nouveau site web</h3></div>
  
  </div> 
  </div>
  
  <hr style="color:#999999;">
  
  <br />


<!-- INVOICE ITEMS HERE -->

<table class="items" >
<tr>
<td width="10%"><b>PÉRIODE</b></td>
<td width="50%"><b>LA DESCRIPTION</b></td>
<td width="10%"><b>UNITÉS</b></td>
<td width="15%"><b>PRIX UNITAIRE</b></td>
<td width="15%" style="background-color: #d1eaf5;"><b>TOTAL</b></td>
</tr>

<tr>
  <td>1</td>
  <td>Création de sites webe</td>
  <td>1</td>
  <td>&#163;500</td>
  <td style="background-color: #d1eaf5;">&#163;500</td>
</tr>
<tr>
  <td>2</td>
  <td>Nom de domaine</td>
  <td>1</td>
  <td>&#163;50</td>
  <td style="background-color: #d1eaf5;">&#163;50</td>
</tr>
<tr>
<td class="blanktotal" colspan="3" rowspan="6">

</td>
</tr>
<td class="totals">SUBTOTAL (excl. VAT):</td>
<td class="totals" style="background-color: #d1eaf5;">&#163;550</td>
</tr>
<tr>
<td class="totals">V.A.T. 21,00%:</td>
<td class="totals" style="background-color: #d1eaf5;">&#163; 115.5</td>
</tr>

<tr>
<td class="totals"><b>TOTAL:</b></td>
<td class="totals" style="background-color: #d1eaf5;"><b> &#163;665.5</b></td>
</tr>

</table>


<!-- END ITEMS HERE -->

<div class="row" style="background-color: #73c2fb; ">
<div class="col1">
<h2>Merci pour votre entreprise.</h2>
</div>

<div class="col2 floatright">
<h2> TOTAL : &#163;665.5</h2>
</div>
</div>
<hr style="color:#999999;">

<div class="row">
<div class="col1">
<p>Merci pour votre entreprise.!<br />Numéro de TVA.972 9855 56. Banque: HSBC,Code de tri: 40-24-07<br />N ° de compte.91565850</p>
</div>
<div class="col2 floatright">
<p><b>Termes :</b> Veuillez noter que nos conditions de paiement pour cette facture sont NET 15. Des intérêts seront facturés sur toutes les factures qui ne sont pas payées à temps.</p>
</div>
</div>

<h3>Veuillez effectuer le paiement par virement électronique à:</h3>

<div class="row">
<div class="col1">

<table class="detail" style="background-color: #d1eaf5;">
<tr>
<td >Nom de banque :</td>
<td >Tide</td>
</tr>

<tr>
<td >Nom du compte :</td>
<td >Tenmatrix Ltd</td>
</tr>

<tr>
<td>Code de tri :</td>
<td>23-69-72</td>
</tr>

<tr>
<td>Numéro de compte :</td>
<td>16279782</td>
</tr>

<tr>
<td>Veuillez utiliser la référence :</td>
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