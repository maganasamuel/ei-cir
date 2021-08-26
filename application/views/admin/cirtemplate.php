<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		tr td{
			padding: 10px;
			border:1px solid #0564ab;
		}
		table {
 		   width:100%;
		}
		
		table {
		  border-collapse: collapse;
		}
		table td {
		  margin: 0;
		  padding: 0;
		  display: block;
		}
		pre {font-family: Trebuchet MS, sans-serif
		}
	</style>
</head>
<body style="font-family: Trebuchet MS, sans-serif	">


<div style="position:absolute;top:0.26in;left:0in;width:90px;line-height:0.27in; background-color: #455a73;height:70px;">
    <span style="background-colro:red"></span>
</div>

<div style="position:absolute;top:0.18in;left:1.20in;width:4.36in;line-height:0.27in;">
  <img src="<?=base_url();?>assets/admin/img/elitelogo.png" alt="eliteinsure" class="logo" width="100"/>
</div>

<div style="position:absolute;top:0.72in;left:3.18in;width:4.36in;line-height:0.27in;">
  <span style="font-style:normal;font-weight:bold;font-size:15pt;font-family:Calibri;color:#44546a">Compliance Investigation Report (CIR)</span>
</div>

<div style="position:absolute;top:0.26in;left:7.4in;width:90px;line-height:0.27in; background-color: #1881c7;height:70px;">
    <span style="background-colro:red"></span><br><br><br>
</div>
<div style="margin-top: 310px;">&nbsp;</div>
<table style="position: absolute; margin-top: 100px">
  <tr>
    <td width="250px">Adviser</td>
    <td><?= $report_details_cir['name'] ?>	</td>
  </tr>
  <tr style="background-color: #c0e1fa;">
    <td width="250px">Company Representative</td>
    <td width="100%"><?= $comp_rep['name'] ?></td>
  </tr>
  <tr>
    <td width="250px">Report Number</td>
    <td>CIR2021<?= $cir_max['report_number'] ?></td>
  </tr>
  <tr style="background-color: #c0e1fa;">
    <td width="250px">Date Sent & Due</td>
    <td>
    	Sent Date: <?= $report_details_cir['send_date'] ?> <span style="text-align: center;">Due Date: <?= $report_details_cir['due_date'] ?></span>
    </td>
  </tr>
  <tr>
    <td width="150px">Adviser's Compliance History</td>
    <td>
    	  <?php if($reportHistory){ ?>
            <?php foreach($reportHistory as $rep){ ?>
                <label>CH2021<?=  $rep['report_number'] ?></label>
            <?php } ?>
        <?php } ?> 
    </td>
  </tr>
</table>
<p style="font-size: 18px; margin-top: 30px; border-bottom: 1px solid #95c4e8; color:#096ab5; text-transform: uppercase">Issue Identified</p>
 <?php if($report_details_identified){ $i = 0; ?>
        <?php foreach($report_details_identified as $rep){ $i++?>
                <p style="margin-bottom: -40px; font-size: 14px; margin-top: 30px;"><?= $i . '. ' . $rep['issue_identified']?></p><br>
        <?php } ?>
<?php } ?> 
<p style="font-size: 18px; margin-top: 70px; border-bottom: 1px solid #95c4e8; color:#096ab5; text-transform: uppercase">Investigation Information</p>
<pre style="margin-bottom: -40px; font-size: 14px;margin-top: 30px;"><?= $report_details_cir['investigation_information'] ?></pre><br>
</body>
</html>
	








