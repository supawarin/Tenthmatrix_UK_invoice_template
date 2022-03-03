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
    border-bottom: 2px dotted #d1eaf5;
    
    text-align: center;
	padding: 8px;
  }
  
  .items td.blanktotal {
    background-color: #FFFFFF;
    border: 0mm none #F21d55;
   
}
.items td.totals {
    background-color: #fff;

}

.detail {
    background-color: #ffffff;
    border: 2px solid #d1eaf5;
    
}
  </style>

<body>

<div class="row">

<div class="col1 ">
<h4>Tenthmatrix Ltd.<br />The Coach House, 77A Marlowes<br />Hemel Hempstead Herts,HP1 1LF<br />billing@tenthmatrix.co.uk<br />Tel: 44 1442 384 149</h4>
</div>
<div class="col2 floatright">
<img src="tenth.png" width="240" />
</div>
</div>




  <htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />

<div class="row">

<div class="col1" style="padding-top: 15px;">
<img src="iv6.png" width="100" />
<h3>FACTURE À:</h3>
<div class="name"><b>NOM :</b> Customer ..... </div>

<div class="email"><b>E-mail : </b> customer@gmail.com</div>
</div>

<div class="col2" style="text-align: right; padding-top: 15px;">
<h2>FACTURE NON : </h2>
<h2>DATE : </h2>
<h2>DUE DATE : </h2>
<h2>TOTAL : </h2>
</div>

<div class="col3 floatright" style="padding-top: 15px;">
<div class="invoice no"><h2> 123456</h2></div>
<div class="date"><h2> 07/11/2021</h2></div>
<div class="due date"><h2> 21/11/2021</h2></div>
<h2>&#163;423.50</h2>
</div>

</div>


<br />
<!-- INVOICE ITEMS HERE -->



<table class="items" >
<thead>
<tr style="background-color: #d1eaf5;">
<td width="10%" style="color: #0080fe;"><b>SERVICE</b></td>
<td width="40%" style="color: #0080fe;"><b>LA DESCRIPTION</b></td>
<td width="10%" style="color: #0080fe;"><b>V.A.T.</b></td>
<td width="10%" style="color: #0080fe;"><b>QTY</b></td>
<td width="15%" style="color: #0080fe;"><b>TAUX</b></td>
<td width="15%" style="color: #0080fe;"><b>TOTAL</b></td>
</tr>
</thead>

<tbody>
<tr>
  <td>Vente</td>
  <td>Nouveau site Web</td>
  <td>21.00%</td>
  <td>1</td>
  <td>&#163;350</td>
  <td>&#163;350</td>
</tr>


<tr>
<td class="blanktotal" colspan="2" rowspan="5">
</td>
</tr>

<tr>
<td class="totals">SUBTOTAL</td>
<td></td>
<td></td>
<td class="totals">&#163;350</td>

</tr>

<tr>
<td class="totals">V.A.T. TOTAL</td>
<td></td>
<td></td>
<td class="totals">&#163;73.50</td>

</tr>

<tr>
<td class="totals">TOTAL</td>
<td></td>
<td></td>
<td class="totals">&#163;423.50</td>

</tr>

<tr>
<td class="totals">PAIEMENT</td>
<td></td>
<td></td>
<td class="totals">&#163;423.50</td>
</tr>
</tbody>

<tfoot>
<tr style="background-color: #d1eaf5;">
<td width="20%" style="color: #0080fe;"><b>VAT SUMMARY</b></td>
<td width="20%" style="color: #0080fe;"><b>RATE</b></td>
<td width="20%" style="color: #0080fe;"><b></b></td>
<td width="15%" style="color: #0080fe;"><b>VAT</b></td>
<td width="10%" style="color: #0080fe;"><b></b></td>
<td width="15%" style="color: #0080fe;"><b>NET</b></td>
</tr>

<tr>
<td width="20%" style="color: #0080fe;"><b></b></td>
<td width="20%" style="color: #0080fe;"><b>&#163;350</b></td>
<td width="20%" style="color: #0080fe;"><b></b></td>
<td width="15%" style="color: #0080fe;"><b>21.00%</b></td>
<td width="10%" style="color: #0080fe;"><b></b></td>
<td width="15%" style="color: #0080fe;"><b>&#163;423.50</b></td>
</tr>
</tfoot>
</table>

<!-- END ITEMS HERE -->

';

$termsHTML = '
<div class="tenthmatrixlogo">
<ximg src="/Volumes/GoogleDrive/.shortcut-targets-by-id/1-9_ANNWeOpmVIwN01qqEiImCs6RH8tks/WorkstationSolsGoogleDrive/Shared_TenthMatrix_CRM_DEV/Tenthmatrixv18/TENTHMATRIX_CRM_DATA/php_components/mpdf60/examples/mysignature.png" width="150" />
</div>


<br />

<p><b>termes :</b> Veuillez noter que nos conditions de paiement pour cette facture sont NET 15. Des intérêts seront facturés sur toutes les factures qui ne sont pas payées à temps.</p>

<h3>Veuillez effectuer le paiement par virement électronique à:</h3>


<div class="row">
<div class="col5">
<table class="detail">
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
<p>Tenmatrix Ltd UK.également commercialisée sous le nom de Tenmatrix, est une société enregistrée sous le numéro :11641870. Numéro de TVA : GB 361 746 193. Enregistré en Angleterre et au Pays de Galles. Adresse du siège social : The Coach House, 77A Marlowes, Hemel Hempstead, Herts, Royaume-Uni, HP1 1LF.</p>

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