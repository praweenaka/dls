<?php

include './connection_sql.php';
?>





<?php
    date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
    $time= date('H:i:s');

    date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
    $date=date('d-m-Y');


    date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
    $month=date('m-Y ');


    $epf = $_GET["txt_epf"];

    // $date1=date("l jS \of F Y h:i:s A");
    $date1=date("F Y ");

    $sql = "SELECT * FROM EMPSALMASTER where EPFNO = '" . $epf . "'";
    $result = $conn->query($sql);
    $row = $result->fetch();
 


    // $pubdate= $row2["tdate"] ;
    // $da = strtotime($pubdate);
    // $dat = date('H:i:s', $da);

    echo '<br>
        <div id="page-wrap"> 
<div> 
<table>
<tr>
    <th width=150px; align="left" >EPF No </th>
    <th width=150px; align="left"><b>:     '. $row["EPFNO"].'</b></th>
    <th width=150px;></th>
    <th width=150px; align="left">Month </th>
    <th width=150px; align="left"><b>:     '.$date1.'</b></th>
    <th width=250px;></th>
    <th width=150px; align="left"></th>
  </tr>
  <tr>
    <th width=150px; align="left" >Name </th>
    <th width=150px; align="left"><b>:    '. $row["Name"].'  </b></th>
    <th width=150px;></th>
    <th width=150px; align="left"></th>
    <th width=150px; align="left"></th>
    <th width=150px;></th>
    <th width=150px; align="left"></th>
  </tr>
</table>
<table>
  <tr>
    <td width=150px;>Basic Salary</td>
    <td width=150px; align="left"><b>:     '. $row["Basic"].'</b></td>
    <th width=150px;></th>
    <td width=150px;>E.P.F 8%</td>
    <td width=150px; align="left"><b>:     '. $row["EPFNO"].'</b></td>
    <th width=150px;></th>
    <td width=150px;></td>
  </tr>
  <tr>
    <td width=150px;>BR Allowance 1</td>
    <td width=150px; align="left"><b>:     '. $row["SP_Allow01"].'</b></td>
    <th width=150px;></th>
    <td width=150px;>Salary Advance</td>
    <td width=150px; align="left"><b>:     '. $row["EPFNO"].'</b></td>
    <th width=150px;></th>
    <td width=150px;></td>
  </tr>
  <tr>
    <td width=150px;>BR Allowance 2</td>
    <td width=150px; align="left"><b>:     '. $row["SP_Advance1"].'</b></td>
    <th width=150px;></th>
    <td width=150px;>Staff Loan 01</td>
    <td width=150px; align="left"><b>:     '. $row["LOAN01"].'</b></td>
    <th width=150px;></th>
    <td width=150px;></td>
  </tr>
  <tr>
    <td width=150px;>Salary Arrears</td>
    <td width=150px; align="left"><b>:     '. $row["EPFNO"].'</b></td>
    <th width=150px;></th>
    <td width=150px;>Staff Loan 02</td>
    <td width=150px; align="left"><b>:     '. $row["LOAN01"].'</b></td>
    <th width=150px;></th>
    <td width=150px;></td>
  </tr>
  <tr>
    <td width=150px;>No Pay Deduction</td>
    <td width=150px; align="left"><b>:     '. $row["EPFNO"].'</b></td>
    <th width=150px;></th>
    <td width=150px;>Staff Loan 03</td>
    <td width=150px; align="left"><b>:     '. $row["LOAN01"].'</b></td>
    <th width=150px;></th>
    <td width=150px;></td>
  </tr>
  <tr>
    <td width=150px;><b>Basic for EPF/ETF</b></td>
    <td width=150px; align="left"><b>:     '. $row["stat"].'</b></td>
    <th width=150px;></th>
    <td width=150px;>Staff Loan 04</td>
    <td width=150px; align="left"><b>:     '. $row["epff"].'</b></td>
    <th width=150px;></th>
    <td width=150px;></td>
  </tr>
  <tr>
    <td width=150px;>Normal OT</td>
    <td width=150px; align="left"><b>:     '. $row["EPFNO"].'</b></td>
    <th width=150px;></th>
    <td width=150px;>Dialog Recoveries</td>
    <td width=150px; align="left"><b>:     '. $row["EPFNO"].'</b></td>
    <th width=150px;></th>
    <td width=150px;></td>
  </tr>
  <tr>
    <td width=150px;>Double OT</td>
    <td width=150px; align="left"><b>:     '. $row["EPFNO"].'</b></td>
    <th width=150px;></th>
    <td width=150px;>Non-Cash Deductions</td>
    <td width=150px; align="left"><b>:     '. $row["EPFNO"].'</b></td>
    <th width=150px;></th>
    <td width=150px;></td>
  </tr>
  <tr>
    <td width=150px;>Non-Cash Benifits</td>
    <td width=150px; align="left"><b>:     '. $row["EPFNO"].'</b></td>
    <th width=150px;></th>
    <td width=150px;>Stamp</td>
    <td width=150px; align="left"><b>:     '. $row["stampfee"].'</b></td>
    <th width=150px;></th>
    <td width=150px;></td>
  </tr>
    <tr>
    <td width=150px;></td>
    <td width=150px; align="left"></td>
    <th width=150px;></th>
    <td width=150px;>P.A.Y.E Tax</td>
    <td width=150px; align="left"><b>:     '. $row["payetax"].'</b></td>
    <th width=150px;></th>
    <td width=150px;></td>
  </tr>
    <tr>
    <td width=150px;>Gross Pay</td>
    <td width=150px; align="left"><b>:     '. $row["grosspay"].'</b></td>
    <th width=150px;></th>
    <td width=150px;>Other Deductions</td>
    <td width=150px; align="left"><b>:     '. $row["EPFNO"].'</b></td>
    <th width=150px;></th>
    <td width=150px;></td>
  </tr>
  <tr>
    <td width=150px;>Total Deduction</td>
    <td width=150px; align="left"><b>:     '. $row["EPFNO"].'</b></td>
    <th width=150px;></th>
    <td width=150px;>Others</td>
    <td width=150px; align="left"><b>:     '. $row["EPFNO"].'</b></td>
    <th width=150px;></th>
    <td width=150px;></td>
  </tr>
    <tr>
    <td width=150px;>Net Pay</td>
    <td width=150px; align="left"></td>
    <th width=150px;></th>
    <td width=150px;>Total Deduction</td>
    <td width=150px; align="left"><b>:     '. $row["totThree"].'</b></td>
    <th width=150px;></th>
    <td width=150px;></td>
  </tr>
</table>
<table>
  <tr>
    <td width=150px; align="left"></td>
    <td width=200px; align="left" colspan=3><b>***Further Informations***</b></td>
    <th width=150px;></th>
    <td width=150px;></td>
    <td width=150px; align="left"></td>
    <th width=150px;></th>
    <td width=150px;></td>
  </tr>
    <tr>
    <td width=150px;>No Pay Deduction</td>
    <td width=150px; align="left"><b>:     '. $row["EPFNO"].'</b></td>
    <th width=150px;></th>
  </tr>  
</table>
</div>
<br>';
?>




