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

    $sql = "SELECT * FROM pro where EPFNO = " . $epf . "";  
    $result = $conn->query($sql);
    $row = $result->fetch();



    // $pubdate= $row2["tdate"] ;
    // $da = strtotime($pubdate);
    // $dat = date('H:i:s', $da);

    echo "<br>
    <table >
    <tr> 
    <th width=250px; align='left' ><img src='images/logo.jpg'   height='52' width='242'>   </th>
    <th width=250px; align='center'><b style='color:#0f4df7'>WINGS LOGISTICS PVT (LTD).</b></th>
    </tr>
    <tr>  
    <th width=150px;</th>
    <th width=150px; align='center' style='margin-top:4px;'><b>EMPLOYER'S NO A40241</b></th>
    
    </tr>
    </table>
    <table border='1'> 
    <tr>
    <th width=150px; align='left' >EPF No </th>
    <th width=150px; align='left'><b>:     ". $row["EPFNO"]."</b></th> 
    <th width=150px; align'left'>Month </th>
    <th width=150px; align='left'><b>:     ".$date1."</b></th> 
    </tr>
    <tr>
    <th width=150px; align='left' >Name </th>
    <th width=150px; align='left'><b>:    ". $row["NAME"]." </b></th>  
    </tr> ";
    $totepf=$row["BASIC"]-$row["salarr"]-$row["NOPAY"];
    $grosspay=$totepf+$row["TMP_OT"]+$row["ot2"]+$row["SP_ALLOW01"];
    $totDid=($totepf*8/100+ $row["TEM_SalAdvance"] + $row["LOAN01"] + $row["LOAN02"] + $row["LOAN03"] + $row["FESTIVAL"] + $row["TEM_MobBill"] + $row["TEM_SP_DED"] + $row["STAMP"] + $row["PAYEtax"] + $row["otherded"] + $row["others"]);
    $netpay=$grosspay-$totDid;
    echo "<tr>
    <td width=150px;>Basic Salary</td>
    <td width=150px; align='left'><b>:     ". $row["BASIC"]."</b></td> 
    <td width=150px;>E.P.F 8%</td>
    <td width=150px; align='left'><b>:     ". number_format($totepf*8/100,2)."</b></td> 
    </tr>
    <tr>
    <td width=150px;>Salary Arrears</td>
    <td width=150px; align='left'><b>:     ". $row["salarr"]."</b></td> 
    <td width=150px;>Salary Advance</td>
    <td width=150px; align='left'><b>:     ". $row["TEM_SalAdvance"]."</b></td> 
    </tr>
    <tr>
    <td width=150px;>No Pay Deduction</td>
    <td width=150px; align='left'><b>:     ". $row["NOPAY"]."</b></td> 
    <td width=150px;>Staff Loan 01</td>
    <td width=150px; align='left'><b>:     ". $row["LOAN01"]."</b></td> 
    </tr>
    <tr>

    
    <td width=150px;><b>Total for EPF/ETF</b></td>
    <td width=150px; align='left'><b>:     ". $totepf."</b></td> 
    <td width=150px;>Staff Loan 02</td>
    <td width=150px; align='left'><b>:     ". $row["LOAN02"]."</b></td> 
    </tr>
    <tr>
    <td width=150px;>Normal OT</td>
    <td width=150px; align='left'><b>:     ". $row["TMP_OT"]."</b></td> 
    <td width=150px;>Staff Loan 03</td>
    <td width=150px; align='left'><b>:     ". $row["LOAN03"]."</b></td> 
    </tr>
    <tr>
    <td width=150px;>Double OT</td>
    <td width=150px; align='left'><b>:     ". $row["ot2"]."</b></td> 
    <td width=150px;>Staff Loan 04</td>
    <td width=150px; align='left'><b>:     ". $row["FESTIVAL"]."</b></td> 
    <tr>
    <td width=150px;>Non-Cash Benifits</td>
    <td width=150px; align='left'><b>:     ". $row["SP_ALLOW01"]."</b></td> 
    <td width=150px;>Dialog Recoveries</td>
    <td width=150px; align='left'><b>:     ". $row["TEM_MobBill"]."</b></td> 
    </tr>
    <tr>
    <td width=150px;><b>Gross Pay</b></td>
    <td width=150px; align='left'><b>:     ".  number_format($grosspay,2)."</b></td> 
    <td width=150px;>Non-Cash Deductions</td>
    <td width=150px; align='left'><b>:     ". $row["TEM_SP_DED"]."</b></td> 
    </tr>
    <tr>
    <td width=150px;><b>Total Deduction</b></td>
    <td width=150px; align='left'><b>:     ". number_format($totDid,2)."</b></td> 
    <td width=150px;>Stamp</td>
    <td width=150px; align='left'><b>:     ". $row["STAMP"]."</b></td> 
    </tr>
    <tr>
    <td width=150px;><b>Net Pay</b></td>
    <td width=150px; align='left'>: <b>". number_format($netpay,2)."<b/></td> 
    <td width=150px;>P.A.Y.E Tax</td>
    <td width=150px; align='left'><b>:     ". $row["PAYEtax"]."</b></td> 
    </tr>
    <tr>  
    <td width=100px; align='left' colspan=2><b>***Further Informations***</b></td> 
    <td width=150px;>Other Deductions</td>
    <td width=150px; align='left'><b>:     ". $row["otherded"]."</b></td> 
    </tr>
    <tr>
    <td width=150px;>EPF 12%</td>
    <td width=150px; align='left'><b>:     ". number_format($totepf*12/100,2)."</b></td> 
    <td width=150px;>Others</td>
    <td width=150px; align='left'><b>:     ". $row["others"]."</b></td> 
    </tr>
    ";
    
    

    echo" <tr>
    <td width=150px;>ETF 3%</td>
    <td width=150px; align='left'><b>:     ".number_format($totepf*3/100,2)."</b></td> 
    <td width=150px;><b>Total Deduction</b></td>
    <td width=150px; align='left'><b>:     ". number_format($totDid,2)."</b></td> 
    </tr>
    </table>
    <table>
    

    </table>
    </div>
    <br>";
    ?>




