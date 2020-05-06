<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Salary Sheet</title>
</head>
<body>
    <?php
    include './connection_sql.php';
    ?>
    <div style="float: left;">
        <table>
            <tr> 
                <th width=250px; align='left' ><img src='images/logo.jpg'   height='52' width='242'>   </th>
                <th width=250px; align='center'><b style='color:#0f4df7'>WINGS LOGISTICS PVT (LTD).</b></th>
            </tr> 
        </table>
        <table border="1">
            <thead>
                <tr>
                    <td>Month</td>
                    <td>EPFNO</td>
                    <td>NAME</td>
                    <td>No Of Day WOrk</td>
                    <td>BASIC</td>
                    <td>BUDGET RELIEF</td>
                    <td>ALL02(PF)NOPAY</td>
                    <td><b>Total</b></td>
                    <td>NOPAY</td>
                    <td><B>TOTAL FOR PF</B></td>
                    <td>SP ALLOW 01</td>
                    <td>SP ALLOW 02</td>
                    <td>OVER TIME</td>
                    <td>TEMP SP ALLO</td>
                    <td><B>GROSS PAY</B></td>
                    <td>EPF8%</td>
                    <td>SAL ADVANCE</td>
                    <td>LOAN01</td>
                    <td>LOAN02</td>
                    <td>LOAN03</td>
                    <td>FEST LOAN</td>
                    <td>INSU LOAN</td>
                    <td>SUPORT LINE</td>
                    <td>MOBITEL BILL</td>
                    <td>THFA SOCIATY</td>
                    <td>FAS</td>
                    <td>SP DEUCTION</td>
                    <td>STAMP</td>
                    <td>PAYE</td>
                    <td>TOTAL DEDEUCTION</td>
                    <td><B>BALANCE PAY</B></td>
                    <td>EPF 12%</td>
                    <td>EPF 3%</td>
                    <td>SIGNATURE</td>
                </tr>
            </thead>
            <?php
            $month= $_GET["month"];
            $sql = "SELECT * FROM pro where (year(SALDATE)='" . date("Y", strtotime($month)) ."') and (month(SALDATE)='" . date("m", strtotime($month)) ."')  order by id  "; 
            foreach ($conn->query($sql) as $row) {
                $TOTAL=$row['BASIC']+$row['ALLOW2']+$row['ALLOW1'];
                $TOTALPF=$TOTAL-$row['TEM_NOPAY'];
                // $GROSSPAY=$TOTALPF+$row['SP_ALLOW01']+$row['SP_ALLOW02']+$row['TMP_OT']+$row['TMP_SP_ALLO'];
                $GROSSPAY=$TOTALPF+$row['TMP_OT'];
                $TOTALDEDU=$row['TEM_SalAdvance']+$row['LOAN01']+$row['LOAN02']+$row['LOAN03']+$row['FESTIVAL']+$row['INSULOAN']+$row['INSU2']+$row['TEM_MobBill']+$row['THFASociaty']+$row['FAS']+$row['TMP_SP_DED']+$row['STAMP']+$row['PAYESurchage'];
                $BALANCEPAY=$GROSSPAY-$TOTALDEDU; 
                ?>
                <tr>
                    <td><?php echo $month; ?></td>
                    <td><?php echo $row['EPFNO']; ?></td>
                    <td><?php echo $row['NAME']; ?></td>
                    <td><?php echo '25' ?></td>
                    <td><?php echo $row['BASIC']; ?></td>
                    <td><?php echo $row['ALLOW2']; ?></td>
                    <td><?php echo $row['ALLOW1']; ?></td>
                    <td><?php echo  number_format($TOTAL,2); ?></td>
                    <td><?php echo $row['TEM_NOPAY']; ?></td>
                    <td><?php echo number_format($TOTALPF,2); ?></td>
                    <td><?php echo $row['SP_ALLOW01']; ?></td>
                    <td><?php echo $row['SP_ALLOW02']; ?></td>
                    <td><?php echo $row['TMP_OT']; ?></td>
                    <td><?php echo $row['TMP_SP_ALLO']; ?></td>
                    <td><?php echo number_format($GROSSPAY,2); ?></td>
                    <td><?php echo number_format($TOTAL*8/100,2); ?></td>
                    <td><?php echo $row['TEM_SalAdvance']; ?></td>
                    <td><?php echo $row['LOAN01']; ?></td>
                    <td><?php echo $row['LOAN02']; ?></td>
                    <td><?php echo $row['LOAN03']; ?></td>
                    <td><?php echo $row['FESTIVAL']; ?></td>
                    <td><?php echo $row['INSULOAN']; ?></td>
                    <td><?php echo $row['INSU2']; ?></td>
                    <td><?php echo $row['TEM_MobBill']; ?></td>
                    <td><?php echo $row['THFASociaty']; ?></td>
                    <td><?php echo $row['FAS']; ?></td>
                    <td><?php echo $row['TMP_SP_DED']; ?></td>
                    <td><?php echo $row['STAMP']; ?></td>
                    <td><?php echo $row['PAYESurchage']; ?></td>
                    <td><?php echo number_format($TOTALDEDU,2); ?></td>
                    <td><?php echo number_format($BALANCEPAY*8/100,2); ?></td>
                    <td><?php echo number_format($TOTAL*12/100,2); ?></td>
                    <td><?php echo number_format($TOTAL*3/100,2); ?></td> 
                    <td>........................</td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</body>

</html>