<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 12,
	'default_font' => 'sarabun'
]);

$nokhtml = '
<style>
body {
	font-family: sarabun;
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
	font-family: sarabun;
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
<p><b>ที่อยู่บริษัท :</b><br />Tenthmatrix Ltd. <br />The Coach House, 77A Marlowes <br />Hemel Hempstead Herts, HP1 1LF</p>
</div>

<div class="col3 floatright">
<p><b>อีเมลล์ :</b><br />billing@tenthmatrix.co.uk<br /><b>เบอร์โทร:</b><br /> 44 1442 384 149</p>
</div>
</div>


<hr style="color:#0080fe;">

<div class="row">
<div class="col1">
<img src="iv.3.png" width="200"  />
<br />
</div>

<div class="col2" style="text-align: right;">
<h1>โครงการ : </h1>
</div>

<div class="col3 floatright">
<div class="project"><h1>ออกแบบเว็บไซต์</h1></div>
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
<h2>เรียกเก็บไปยัง :</h2>
<div class="name"><b>ชื่อ :</b> Customer ..... </div>
<div class="address"><b>ที่อยู่ :</b>  UK ,1030..... </div>
<div class="email"><b>อีเมลล์ : </b> customer@gmail.com</div>
</div>

<div class="col2" style="text-align: right;">
<h2>ใบแจ้งหนี้เลขที่ : </h2>
<h2>วันที่ : </h2>
<h2>วันครบกำหนด : </h2>
<h2>จำนวนเงิน : </h2>
</div>

<div class="col3 floatright">
<div class="invoice no"><h2> 12345</h2></div>
<div class="date"><h2> 06/11/2021</h2></div>
<div class="due date"><h2> 20/11/2021</h2></div>
<h2>&#3647;665.5</h2>
</div>

</div>
<br />
<!-- INVOICE ITEMS HERE -->



<table class="items" >
<tr style="background-color: #0080fe;">
<td width="10%" style="color: #fff;"><b>ลำดับ</b></td>
<td width="50%" style="color: #fff;"><b>คำอธิบาย / บริการ</b></td>
<td width="10%" style="color: #fff;"><b>หน่วย</b></td>
<td width="15%" style="color: #fff;"><b>ราคาต่อหน่วย</b></td>
<td width="15%" style="color: #fff;"><b>จำนวนเงิน</b></td>
</tr>
<tr>
  <td>1</td>
  <td>ออกแบบเว็บไซต์</td>
  <td>1</td>
  <td>&#3647;500</td>
  <td>&#3647;500</td>
</tr>
<tr>
  <td>2</td>
  <td>โดเมนเนม</td>
  <td>1</td>
  <td>&#3647;50</td>
  <td>&#3647;50</td>
</tr>

<tr>
<td class="blanktotal" colspan="3" rowspan="6">
<h2>ขอบคุณที่ร่วมธุรกิจกับเรา</h2>
</td>
</tr>

<tr>
<td class="totals">ราคารวมย่อย (excl. VAT):</td>
<td class="totals" style="background-color: #d1eaf5;">&#3647;550</td>
</tr>

<tr>
<td class="totals">ภาษีมูลค่าเพิ่ม 7,00%:</td>
<td class="totals" style="background-color: #d1eaf5;">&#3647; 115.5</td>
</tr>

<tr>
<td class="totals" style="background-color: #0080fe; color: #fff;"><b>ยอดรวมสุทธิ:</b></td>
<td class="totals" style="background-color: #0080fe; color: #fff;"><b> &#3647;665.5</b></td>
</tr>
</table>

<!-- END ITEMS HERE -->

';

$termsHTML = '
<div class="tenthmatrixlogo">
<ximg src="/Volumes/GoogleDrive/.shortcut-targets-by-id/1-9_ANNWeOpmVIwN01qqEiImCs6RH8tks/WorkstationSolsGoogleDrive/Shared_TenthMatrix_CRM_DEV/Tenthmatrixv18/TENTHMATRIX_CRM_DATA/php_components/mpdf60/examples/mysignature.png" width="150" />
</div>




<p><b>เงื่อนไขธุรกิจ :</b> โปรดทราบว่าเงื่อนไขการชำระเงินของเราสำหรับใบแจ้งหนี้นี้คือ NET 15 (ชำระภายใน 15 วัน) ดอกเบี้ยจะถูกเรียกเก็บจากใบแจ้งหนี้ทั้งหมดที่ไม่ได้ชำระตรงเวลา</p>
<p>ขอบคุณที่ร่วมธุรกิจกับเรา!<br />เลขประจำตัวผู้เสียภาษี.972 9855 56. ธนาคาร: HSBC,Sort Code: 40-24-07,เลขที่บัญชี.91565850</p>
<h3>ชำระเงินออนไลน์ด้วยการโอนเงินมาที่:</h3>


<div class="row">
<div class="col5">
<table class="detail">
<tr style="background-color: #eef2f7;">
<td >ชื่อธนาคาร :</td>
<td >Tide</td>
</tr>

<tr>
<td >ชื่อบัญชี:</td>
<td >Tenmatrix Ltd</td>
</tr>

<tr style="background-color: #eef2f7;">
<td>รหัสธนาคาร :</td>
<td>23-69-72</td>
</tr>

<tr>
<td>เลขที่บัญชี :</td>
<td>16279782</td>
</tr>

<tr style="background-color: #eef2f7;">
<td>โปรดใช้การอ้างอิง:</td>
<td>IT CONSUTING-1415</td>
</tr>
</table>
</div>
</div>
<p>Tenmatrix Ltd UK. ยังซื้อขายในชื่อ Tenmatrix เป็น บริษัท จดทะเบียนหมายเลข: 11641870 หมายเลข VAT: GB 361 746 193 จดทะเบียนในอังกฤษและเวลส์ ที่อยู่สำนักงานจดทะเบียน: The Coach House,77A Marlowes, Hemel Hempstead, Herts, United Kingdom,HP1 1LF.</p>

<p><b>หมายเหตุ:</b>  ใบแจ้งหนี้นี้สร้างโดย Workstation CRM และระบบการออกใบแจ้งหนี้โดยอัตโนมัติ</p>
<div class="date">วันที่: 18/11/2021</div>
<div class="time"> เวลา: 22:30:05</div>
</body>
  ';
//

$mpdf->WriteHTML($nokhtml . $termsHTML);


//

$mpdf->Output();


?>