<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 13,
	'default_font' => 'sarabun'
]);

$nokhtml = '
<style>
body {
	font-family: sarabun;
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
	font-family: sarabun;
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
  <div class="date"><h2>วันที่ : 04/11/2021</h2></div>
  <div class="due date"><h2>วันครบกำหนก : 18/11/2021</h2></div>
  <hr style="color:#00a9d3;">
  
  
  <div class="invoice to"><b>เรียกเก็บไปยัง :</b>name customer</div>
  <div class="address"><b>ที่อยู่ :</b> ........</div>
  <div class="tel"><b>เบอร์โทร :</b>  000 000 0000</div>
  <div class="email"><b>อีเมลล์ :</b> customer@gmail.com</div>
  
  </div>
  
  <div class="col2 floatright">
  
  <img src="tenth.png" width="240" />
  <p>Tenthmatrix Ltd. ,The Coach House, 77A Marlowes <br />Hemel Hempstead Herts, HP1 1LF<br />Email: billing@tenthmatrix.co.uk<br />Tel: 44 1442 384 149</p>
  
  <div class="invoice no"><h3>เลขที่ใบแจ้งหนี้ : 12345</h3></div>
  <div class="project"><h3>โครงการ: ออกแบบเว็บไซต์ </h3></div>
  
  </div> 
  </div>
  
  <hr style="color:#999999;">
  
  <br />


<!-- INVOICE ITEMS HERE -->

<table class="items" >
<tr>
<td width="10%"><b>ลำดับ</b></td>
<td width="50%"><b>คำอธิบาย / บริการ</b></td>
<td width="10%"><b>หน่วย</b></td>
<td width="15%"><b>ราคาต่อหน่วย</b></td>
<td width="15%" style="background-color: #d1eaf5;"><b>จำนวนเงิน</b></td>
</tr>

<tr>
  <td>1</td>
  <td>ออกแบบเว็บไซต์</td>
  <td>1</td>
  <td>&#3647;500</td>
  <td style="background-color: #d1eaf5;">&#3647;500</td>
</tr>
<tr>
  <td>2</td>
  <td>โดเมนเนม</td>
  <td>1</td>
  <td>&#3647;50</td>
  <td style="background-color: #d1eaf5;">&#3647;50</td>
</tr>
<tr>
<td class="blanktotal" colspan="3" rowspan="6">

</td>
</tr>
<td class="totals">ราคารวมย่อย (excl. VAT):</td>
<td class="totals" style="background-color: #d1eaf5;">&#3647;550</td>
</tr>
<tr>
<td class="totals">ภาษีมูลค่าเพิ่ม  7,00%:</td>
<td class="totals" style="background-color: #d1eaf5;">&#3647; 115.5</td>
</tr>

<tr>
<td class="totals"><b>ยอดรวมสุทธิ:</b></td>
<td class="totals" style="background-color: #d1eaf5;"><b> &#3647;665.5</b></td>
</tr>

</table>


<!-- END ITEMS HERE -->

<div class="row" style="background-color: #73c2fb; ">
<div class="col1">
<h2>ขอบคุณที่ร่วมธุรกิจกับเรา.</h2>
</div>

<div class="col2 floatright">
<h2>ยอดรวมสุทธิ : &#163;665.5</h2>
</div>
</div>
<hr style="color:#999999;">

<div class="row">
<div class="col1">
<p>ขอบคุณที่ร่วมธุรกิจกับเรา!<br />เลขประจำตัวผู้เสียภาษี.972 9855 56. ธนาคาร: HSBC,Sort Code: 40-24-07,เลขที่บัญชี.91565850</p>
</div>
<div class="col2 floatright">
<p><b>เงื่อนไขธุรกิจ :</b> โปรดทราบว่าเงื่อนไขการชำระเงินของเราสำหรับใบแจ้งหนี้นี้คือ NET 15 (ชำระภายใน 15 วัน) ดอกเบี้ยจะถูกเรียกเก็บจากใบแจ้งหนี้ทั้งหมดที่ไม่ได้ชำระตรงเวลา</p>
</div>
</div>

<h3>ชำระเงินออนไลน์ด้วยการโอนเงินมาที่:</h3>

<div class="row">
<div class="col1">

<table class="detail" style="background-color: #d1eaf5;">
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