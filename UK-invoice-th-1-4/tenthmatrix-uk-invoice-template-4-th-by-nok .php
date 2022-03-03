<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 14,
	'default_font' => 'sarabun'
]);


$nokhtml = '
<style>
body {
	font-family: sarabun;
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
	font-family: sarabun;
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

<p>Tenthmatrix Ltd. ,The Coach House, 77A Marlowes <br />Hemel Hempstead Herts, HP1 1LF<br />Email: billing@tenthmatrix.co.uk<br />Tel: 44 1442 384 149</p>


</div>

<div class="col2 floatright">
<img src="iv6.png" width="200"  />
</div>

<div class="row" style="border: 1px solid #00a9d3; padding: 20px;">
<div class="col1">

<div class="name"><h3>INVOICE TO :name customer</h3></div>

<div class="address"><h3>ADDRESS : Thai</h3></div>
<div class="tel"><h3>TEL : 000 000 0000</h3></div>
<div class="email"><h3>EMAIL : customer@gmail.com</h3></div>
</div>

<div class="col2 floatright">
<div class="invoice no"><h3>ใบแจ้งหนี้เลขที่: ws-0001</h3></div> 
<div class="date"><h3>วันที่ : 04/11/2021</h3></div>
<div class="due date"><h3>วันครบกำหนด : 18/11/2021</h3></div>
<div class="totals"><h3>จำนวนเงิน : &#3647;00000</h3></div>
</div>
</div>

<br />
<table class="items">
<tr>
<th width="10%">ลำดับ</th>
<th width="50%">คำอธิบาย / รายการ </th>
<th width="10%">หน่วย</th>
<th width="15%">ราคาต่อหน่วย</th>
<th width="15%">จำนวนเงิน</th>
</tr>

<tr>
<td>1</td>
<td>ออกแบบเว็บไซต์</td>
<td>1</td>
<td>&#3647;000 </td>
<td>&#3647;000 </td>
</tr>

<tr>
<td class="blanktotal" colspan="3" rowspan="6" >
</td>

</tr>

<tr>
<td class="totals">subtotal (excl. VAT):</td>
<td class="totals" style="background-color: #b9e5fb;">&#3647;000 </td>
</tr>

<tr>
<td class="totals">VAT 21,00%:</td>
<td class="totals" style="background-color: #b9e5fb;">&#3647;</td>
</tr>

<tr>
<td class="totals" style="background-color: #00a9d3; color: #fff;"><b>Total:</b></td>
<td class="totals" style="background-color: #00a9d3; color: #fff;"><b>&#3647;0000 </b></td>
</tr>

</table>

<p><b>ขอบคุณที่ร่วมธุรกิจกับเรา!</b><br />เลขประจำตัวผู้เสียภาษี.972 9855 56. ธนาคาร: HSBC,Sort Code: 40-24-07,เลขที่บัญชี.91565850</p>

<p><b>เงื่อนไขธุรกิจ :</b> โปรดทราบว่าเงื่อนไขการชำระเงินของเราสำหรับใบแจ้งหนี้นี้คือ NET 15 (ชำระภายใน 15 วัน) ดอกเบี้ยจะถูกเรียกเก็บจากใบแจ้งหนี้ทั้งหมดที่ไม่ได้ชำระตรงเวลา</p>
<p><b>ชำระเงินออนไลน์ด้วยการโอนเงินมาที่ :</b><br /> 

<table class="detail">
<tr>
<td >ชื่อธนาคาร :</td>
<td >Tide</td>
</tr>

<tr>
<td >เลขที่บัญชี  :</td>
<td >Tenmatrix Ltd</td>
</tr>

<tr>
<td>รหัสธนาคาร :</td>
<td>23-69-72</td>
</tr>

<tr>
<td>เลขที่บัญชี :</td>
<td>16279782</td>
</tr>

<tr>
<td>โปรดใช้การอ้างอิง :</td>
<td>IT CONSUTING-1415</td>
</tr>

</table>

<br />
<p>Tenmatrix Ltd UK. ยังซื้อขายในชื่อ Tenmatrix เป็น บริษัท จดทะเบียนหมายเลข: 11641870 หมายเลข VAT: GB 361 746 193 จดทะเบียนในอังกฤษและเวลส์ ที่อยู่สำนักงานจดทะเบียน: The Coach House,77A Marlowes, Hemel Hempstead, Herts, United Kingdom,HP1 1LF.</p>

<p><b>หมายเหตุ:</b>  ใบแจ้งหนี้นี้สร้างโดย Workstation CRM และระบบการออกใบแจ้งหนี้โดยอัตโนมัติ</p>
<div class="date">วันที่: 18/11/2021</div><div class="time"> เวลา: 22:30:05</div>

</body>';


//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>