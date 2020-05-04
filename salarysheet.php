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

    echo " 
    <table> 
    <tr>
    <td width=600px;>
    <table> 
    <tr>
    <td width=150px;>Month </td> 
    </tr>
    </table>
    <table>
    <tr>
    <td width=150px;>No Of Day WOrk</td> 
    </tr>
    <tr>
    <td width=150px;>BASIC</td> 
    </tr>
    <tr>
    <td width=150px;>BUDGET RELIEF</td> 
    </tr>
    <tr>
    <td width=150px;>ALL02(PF)NOPAY</td> 
    </tr>
    <tr>
    <td width=150px;><b>Total</b></td> 
    </tr>
    <tr>
    <td width=150px;>NOPAY</td> 
    <tr>
    <td width=150px;><B>TOTAL FOR PF</B></td> 
    </tr>
    <tr>
    <td width=150px;>SP ALLOW 01</td> 
    </tr>
    <tr>
    <td width=150px;>SP ALLOW 02</td> 
    </tr>
    <tr>
    <td width=150px;>OVER TIME</td> 
    </tr>
    <tr>
    <td width=150px;><B>GROSS PAY</B></td> 
    </tr>
    <tr>
    <td width=150px;>EPF8%</td> 
    </tr>
    <tr>
    <td width=150px;>SAL ADVANCE</td>  
    </tr>
    <tr>
    <td width=150px;>LOAN01</td> 
    </tr>
    <tr>
    <td width=150px;>LOAN02</td> 
    </tr>
    <tr>
    <td width=150px;>LOAN 03</td> 
    </tr>
    <tr>
    <td width=150px;>FEST LOAN</td> 
    </tr>
    <tr>
    <td width=150px;>INSU LOAN</td> 
    </tr>
    <tr>
    <td width=150px;>MOBITEL BILL</td> 
    </tr>
    <tr>
    <td width=150px;>THFA SOCIATY</td> 
    </tr>
    <tr>
    <td width=150px;>FAS</td> 
    </tr>
    <tr>
    <td width=150px;>SP DEUCTION</td> 
    </tr>
    <tr>
    <td width=150px;>FEST LOAN</td> 
    </tr>
    <tr>
    <td width=150px;>FEST LOAN</td> 
    </tr>
    <tr>
    <td width=150px;>STAMP</td> 
    </tr>
    <tr>
    <td width=150px;>PAYE</td>  
    </tr>
    <tr>
    <td width=150px;>TOTAL DEUCTION</td> 
    </tr>
    <tr>
    <td width=150px;><B>BALANCE PAY</B></td> 
    </tr>
    <tr>
    <td width=150px;>EPF 12%</td> 
    </tr>
    <tr>
    <td width=150px;>EPF 3%</td> 
    </tr>
    <tr>
    <td width=150px;>EPF NO</td> 
    </tr>
    <tr>
    <td width=150px;>NAME</td> 
    </tr>
    <tr>
    <td width=150px;>SIGNATURE</td> 
    </tr>
    </table> 
    </td>";

    echo "<td width=200px; style ='backgroung-color:red'>";
    $sql = "SELECT * FROM pro where SALDATE = '" . $month. "' order by id limit 5";
    foreach ($conn->query($sql) as $row) {

        echo "<table> 
        <tr>
        <td width=150px; align='left'>:     ".$date1."</td> 
        </tr>
        </table>
        <table>
        <tr>
        <td width=150px; align='left'><b>:   1000000</b></td> 
        </tr>
        <tr>
        <td width=150px; align='left'><b>:   ". $row["BASIC"]."</b></td> 
        </tr>
        <tr>
        <td width=150px; align='left'><b>:     ". $row["ALLOW2"]."</b></td> 
        </tr>
        <tr>
        <td width=150px; align='left'><b>:     ". $row["ALLOW1"]."</b></td> 
        </tr>
        <tr>
        <td width=150px; align='left'><b>:    ".  number_format($TOTAL,2)."</b></td> 
        </tr>
        <tr>
        <td width=150px; align='left'><b>:     ". $row["TEM_NOPAY"]."</b></td> 
        </tr>
        <tr>
        <td width=150px; align='left'><b>:    ".  number_format($TOTALPF,2)."</b></td> 
        </tr>
        <tr>
        <td width=150px; align='left'><b>:     ". $row["SP_ALLOW01"]."</b></td> 
        </tr>
        <tr>
        <td width=150px; align='left'><b>:     ". $row["SP_ALLOW02"]."</b></td> 
        </tr>
        <tr>
        <td width=150px; align='left'><b>:     ". $row["TMP_OT"]."</b></td> 
        </tr>
        <tr>
        <td width=150px; align='left'>: <b>".  number_format($GROSSPAY,2)."</b></td> 
        </tr>
        <tr>
        <td width=150px; align='left'>: ". number_format($TOTAL*8/100,2)."</td> 
        </tr>
        <tr>
        <td width=150px; align='left'>: ". $row["TEM_SalAdvance"]."</td> 
        </tr>
        <tr>
        <td width=150px; align='left'>: ". $row["LOAN01"]."</td> 
        </tr>
        <tr>
        <td width=150px; align='left'>: ". $row["LOAN02"]."</td> 
        </tr>
        <tr>
        <td width=150px; align='left'>: ". $row["LOAN03"]."</td> 
        </tr>
        <tr>
        <td width=150px; align='left'>: ". $row["FESTIVAL"]."</td> 
        </tr>
        <tr>
        <td width=150px; align='left'>: ". $row["INSULOAN"]."</td> 
        </tr>
        <tr>
        <td width=150px; align='left'>: ". $row["TEM_MobBill"]."</td> 
        </tr>
        <tr>
        <td width=150px; align='left'>: ". $row["THFASociaty"]."</td> 
        </tr>
        <tr>
        <td width=150px; align='left'>: ". $row["FAS"]."</td> 
        </tr>
        <tr>
        <td width=150px; align='left'>: ". $row["TMP_SP_DED"]."</td> 
        </tr>
        <tr>
        <td width=150px; align='left'>: ". $row["FESTIVAL"]."</td> 
        </tr>
        <tr>
        <td width=150px; align='left'>: ". $row["FESTIVAL"]."</td> 
        </tr>
        <tr>
        <td width=150px; align='left'>: ". $row["STAMP"]."</td> 
        </tr>
        <tr>
        <td width=150px; align='left'>: ". $row["PAYESurchage"]."</td> 
        </tr>
        <tr>
        <td width=150px; align='left'>: ". number_format($TOTALDEDU,2)."</td> 
        </tr>
        <tr>
        <td width=150px; align='left'>: <b>". number_format($BALANCEPAY*8/100,2)."</b></td> 
        </tr>
        <tr>
        <td width=150px; align='left'>: ". number_format($$TOTAL*12/100,2)."</td> 
        </tr>
        <tr>
        <td width=150px; align='left'>: ". number_format($$TOTAL*3/100,2)."</td> 
        </tr>
        <tr>
        <td width=150px; align='left'>: ". $row["EPFNO"]."</td> 
        </tr>
        <tr> 
        <td width=150px; align='left'>: ". $row["NAME"]."</td> 
        </tr>
        <tr>
        <td width=150px;>SIGNATURE</td>
        <td width=150px; align='left'>: ..............</td> 
        </tr>


        </table> "; 
        
    }
    echo " </td> 
    </tr>
    </table>";


    ?>



