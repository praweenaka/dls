<?php

include './connection_sql.php';
?>


<style >
 td {
  border-style: dotted;
  border-width: 1px; 
}
 
</style>


<?php
    date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
    $time= date('H:i:s');

    date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
    $date=date('d-m-Y');


    date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
    $month=date('m-Y ');


    $month= $_GET["month"];
 
    // $date1=date("l jS \of F Y h:i:s A");
    $date1=date("F Y ");

    $sql = "SELECT * FROM pro where SALDATE = '" . $month. "'"; 
    $result = $conn->query($sql);
    $row = $result->fetch();



    // $pubdate= $row2["tdate"] ;
    // $da = strtotime($pubdate);
    // $dat = date('H:i:s', $da);

    echo "<br>

    <table> 
    <tr>
    <td width=150px;>Month </td>
    <td width=150px; align='left'>:     ".$date1."</td> 
    </tr>
    </table>
    <table>
    <tr>
    <td width=150px;>No Of Day WOrk</td>
    <td width=150px; align='left'><b>:   1000000</b></td> 
    </tr>
    <tr>
    <td width=150px;>Basic</td>
    <td width=150px; align='left'><b>:   ". $row["Basic"]."</b></td> 
    </tr>
    <tr>
    <td width=150px;>BUDGET RELIEF</td>
    <td width=150px; align='left'><b>:     ". $row["ALLOW2"]."</b></td> 
    </tr>
    <tr>
    <td width=150px;>ALL02(PF)NOPAY</td>
    <td width=150px; align='left'><b>:     ". $row["ALLOW1"]."</b></td> 
    </tr>
    <tr>
    <td width=150px;><b>Total</b></td>
    <td width=150px; align='left'><b>:    ".  number_format($TOTAL,2)."</b></td> 
    </tr>
    <tr>
    <td width=150px;>NOPAY</td>
    <td width=150px; align='left'><b>:     ". $row["TEM_NOPAY"]."</b></td> 
    </tr>
    <tr>
    <td width=150px;><B>TOTAL FOR PF</B></td>
    <td width=150px; align='left'><b>:    ".  number_format($TOTALPF,2)."</b></td> 
    </tr>
    <tr>
    <td width=150px;>SP ALLOW 01</td>
    <td width=150px; align='left'><b>:     ". $row["SP_ALLOW01"]."</b></td> 
    </tr>
    <tr>
    <td width=150px;>SP ALLOW 02</td>
    <td width=150px; align='left'><b>:     ". $row["SP_ALLOW01"]."</b></td> 
    </tr>
    <tr>
    <td width=150px;>OVER TIME</td>
    <td width=150px; align='left'><b>:     ". $row["TMP_OT"]."</b></td> 
    </tr>
    <tr>
    <td width=150px;><B>GROSS PAY</B></td>
    <td width=150px; align='left'>: ".  number_format($GROSSPAY,2)."</td> 
    </tr>
    <tr>
    <td width=150px;>EPF8%</td>
    <td width=150px; align='left'>: ". number_format($TOTAL*8/100,2)."</td> 
    </tr>
    <tr>
    <td width=150px;>SAL ADVANCE</td>
    <td width=150px; align='left'>: ". $row["TEM__SalAdvance"]."</td> 
    </tr>
    <tr>
    <td width=150px;>LOAN01</td>
    <td width=150px; align='left'>: ". $row["LOAN01"]."</td> 
    </tr>
    <tr>
    <td width=150px;>LOAN02</td>
    <td width=150px; align='left'>: ". $row["LOAN02"]."</td> 
    </tr>
    <tr>
    <td width=150px;>LOAN 03</td>
    <td width=150px; align='left'>: ". $row["LOAN03"]."</td> 
    </tr>
    <tr>
    <td width=150px;>FEST LOAN</td>
    <td width=150px; align='left'>: ". $row["FESTIVAL"]."</td> 
    </tr>
    <tr>
    <td width=150px;>INSU LOAN/td>
    <td width=150px; align='left'>: ". $row["INSULOAN"]."</td> 
    </tr>
    <tr>
    <td width=150px;>MOBITEL BILL</td>
    <td width=150px; align='left'>: ". $row["TEM_MobBill"]."</td> 
    </tr>
    <tr>
    <td width=150px;>THFA SOCIATY</td>
    <td width=150px; align='left'>: ". $row["THFASociaty"]."</td> 
    </tr>
    <tr>
    <td width=150px;>FAS</td>
    <td width=150px; align='left'>: ". $row["FAS"]."</td> 
    </tr>
    <tr>
    <td width=150px;>SP DEUCTION</td>
    <td width=150px; align='left'>: ". $row["TMP_SP_DED"]."</td> 
    </tr>
    <tr>
    <td width=150px;>FEST LOAN</td>
    <td width=150px; align='left'>: ". $row["FESTIVAL"]."</td> 
    </tr>
    <tr>
    <td width=150px;>FEST LOAN</td>
    <td width=150px; align='left'>: ". $row["FESTIVAL"]."</td> 
    </tr>
    <tr>
    <td width=150px;>STAMP</td>
    <td width=150px; align='left'>: ". $row["STAMP"]."</td> 
    </tr>
    <tr>
    <td width=150px;>PAYE</td>
    <td width=150px; align='left'>: ". $row["PAYESurchage"]."</td> 
    </tr>
    <tr>
    <td width=150px;>TOTAL DEUCTION</td>
    <td width=150px; align='left'>: ". number_format($TOTALDEDU,2)."</td> 
    </tr>
    <tr>
    <td width=150px;><B>BALANCE PAY</B></td>
    <td width=150px; align='left'>: ". number_format($BALANCEPAY*8/100,2)."</td> 
    </tr>
    <tr>
    <td width=150px;>EPF 12%</td>
    <td width=150px; align='left'>: ". number_format($$TOTAL*12/100,2)."</td> 
    </tr>
    <tr>
    <td width=150px;>EPF 3%</td>
    <td width=150px; align='left'>: ". number_format($$TOTAL*3/100,2)."</td> 
    </tr>
    <tr>
    <td width=150px;>EPF NO</td>
    <td width=150px; align='left'>: ". $row["EPFNO"]."</td> 
    </tr>
    <tr>
    <td width=150px;>NAME</td>
    <td width=150px; align='left'>: ". $row["NAME"]."</td> 
    </tr>
    <tr>
    <td width=150px;>SIGNATURE</td>
    <td width=150px; align='left'>: ..............</td> 
    </tr>


    </table> 
    </div>
    <br>";
    ?>




