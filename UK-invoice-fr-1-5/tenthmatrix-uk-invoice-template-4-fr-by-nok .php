<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 14,
	'default_font' => 'gotham'
]);


$nokhtml = '
<style>
body {
	font-family: gotham;
	font-size: 14px;
	padding :0; margin: 0;
}
.row{
	clear:both;
	overflow:hidden;
}

.col1 {
	float:left;
	width:60%;
}
.col2 {
	float:right;
	width:30%;
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
	font-family: gotham;
	border-collapse: collapse;
	width: 100%;
    
  }
  
  td, th {
	border: 1px solid #b9e5fb;
	text-align: center;
	padding: 8px;
  }
 
  .items td.blanktotal {
    background-color: #FFFFFF;
    border: 0mm none #FFFFFF;
    border-top: 0.1mm solid #FFFFFF;
    border-right: 0.1mm solid #FFFFFF;
	text-align: left;
}
.items td.totals {
    text-align: right;
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
<img src="tenth.png" width="240"  />

<p>Tenthmatrix Ltd. ,The Coach House, 77A Marlowes <br />Hemel Hempstead Herts, HP1 1LF<br />E-mail: billing@tenthmatrix.co.uk<br />Tél: 44 1442 384 149</p>


</div>

<div class="col2 floatright">
<img src="iv6.png" width="200"  />
</div>

<div class="row" style="border: 1px solid #00a9d3; padding: 20px;">
<div class="col1">

<div class="name"><h3>FACTURE À :name customer</h3></div>

<div class="address"><h3>ADRESSE : Thai</h3></div>
<div class="tel"><h3>TÉL : 000 000 0000</h3></div>
<div class="email"><h3>E-MAIL : customer@gmail.com</h3></div>
</div>

<div class="col2 floatright">
<div class="invoice no"><h3>FACTURE NON: ws-0001</h3></div> 
<div class="date"><h3>DATE : 04/11/2021</h3></div>
<div class="due date"><h3>DUE DATE : 18/11/2021</h3></div>
<div class="totals"><h3>TOTAL : &#163;00000</h3></div>
</div>
</div>

<br />
<table class="items">
<tr>
<th width="10%">PÉRIODE</th>
<th width="50%">LA DESCRIPTION </th>
<th width="10%">UNITÉS</th>
<th width="15%">PRIX UNITAIRE</th>
<th width="15%">TOTAL</th>
</tr>

<tr>
<td>1</td>
<td>small website design-one page website (Free hosting and domain name for the first year)</td>
<td>1</td>
<td>&#163;000 </td>
<td>&#163;000 </td>
</tr>

<tr>
<td class="blanktotal" colspan="3" rowspan="6" >
</td>

</tr>

<tr>
<td class="totals">subtotal (excl. V.A.T.):</td>
<td class="totals" style="background-color: #b9e5fb;">&#163;000 </td>
</tr>

<tr>
<td class="totals">V.A.T. 21,00%:</td>
<td class="totals" style="background-color: #b9e5fb;">&#163;</td>
</tr>

<tr>
<td class="totals" style="background-color: #00a9d3; color: #fff;"><b>Total:</b></td>
<td class="totals" style="background-color: #00a9d3; color: #fff;"><b>&#163;0000 </b></td>
</tr>

</table>

<p><b>Merci pour votre entreprise!</b><br />Numéro de TVA.972 9855 56. Banque: HSBC,Code de tri: 40-24-07,N ° de compte.91565850</p>

<p><b> termes:</b>Veuillez noter que nos conditions de paiement pour cette facture sont NET 15. Des intérêts seront facturés sur toutes les factures qui ne sont pas payées à temps.</p>
<p><b>Veuillez effectuer le paiement par virement électronique à:</b><br /> 

<table class="detail">
<tr>
<td >Nom de banque  :</td>
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
<td>Numéro de compte  :</td>
<td>16279782</td>
</tr>

<tr>
<td>Veuillez utiliser la référence :</td>
<td>IT CONSUTING-1415</td>
</tr>

</table>

<br />
<p>Tenmatrix Ltd UK.commerce également en tant que Tenmatrix,est un numéro d entreprise enregistré :11641870. numéro de TVA: GB 361 746 193. Enregistré England and Wales. Adresse du siège social: The Coach House,77A Marlowes, Hemel Hempstead, Herts, United Kingdom,HP1 1LF.</p>

<p><b>Noter:</b>  Cette facture a été générée automatiquement par Workstation CRM et le système de facturation.</p>
<div class="date">Date: 18/11/2021</div>
<div class="time"> Time: 22:30:05</div>


</body>';


//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>