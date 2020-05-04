<?php

session_start();

require_once ("connection_sql.php");
date_default_timezone_set('Asia/Colombo');

$main = array($_POST['main']);
$obj  = json_decode($main[0], true);
$operation = $obj[Main];
$cols = $obj[Col];

// Create Save

if ($operation == "SAVE") {



    try {
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $conn->beginTransaction();

       $sqlsave = "Insert into empsalmaster(EPFNO,Name,stat,Active,bouns,dt_join,fied,saldate,Basic,SP_Allow01,SP_Allow02,mobbil,grosspay,totOne,SP_Advance1,roster,bankid,fid,branchcode,intime,outtime,bankacc,totTwo,proFund,LOAN01,FESTIVAL,LOAN02,INSULOAN,LOAN03,INSU2,payetax,stamp,deduction,totThree) values ('".$cols[txt_epf]."','".$cols[txt_epf1]."','".$cols[EPF]."','".$cols[active]."','".$cols[bonus]."','".$cols[txt_joinDt]."','".$cols[txt_empCeasedDt]."','".$cols[txt_asAt]."','".$cols[txt_basic]."','".$cols[txt_spAllowence]."','".$cols[txt_allowence]."','".$cols[txt_mobilebill]."','".$cols[txt_grosspay]."','".$cols[txt_totOne]."','".$cols[txt_allowences]."','".$cols[rooster]."','".$cols[txt_bankId]."','".$cols[txt_enrollId]."','".$cols[txt_branchCode]."','".$cols[txt_inTime]."','".$cols[txt_outTime]."','".$cols[txt_accountNo]."','".$cols[txt_totTwo]."','".$cols[txt_proFund]."','".$cols[txt_sloan1]."','".$cols[txt_festival]."','".$cols[txt_sloan2]."','".$cols[txt_insuLoan]."','".$cols[txt_sloan3]."','".$cols[txt_ISLine]."','".$cols[txt_payeeTax]."','".$cols[txt_stampfee]."','".$cols[txt_deduction]."','".$cols[txt_totThree]."') ";

       $resultsave = $conn->query($sqlsave);

       $conn->commit();
       echo "Saved";
   } catch (Exception $e) {
    $conn->rollBack();
    echo $e;
}
}



































































?>
