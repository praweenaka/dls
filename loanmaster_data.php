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

   $sqlsave = "Insert into loan_ismas(EPFNO,Name,stat,Active,bouns,dt_join,fied,saldate,Basic,SP_Allow01,SP_Allow02,mobbil,grosspay,totOne,SP_Advance1,roster,bankid,fid,branchcode,intime,outtime,bankacc,totTwo,proFund,LOAN01,FESTIVAL,LOAN02,INSULOAN,LOAN03,INSU2,payetax,stamp,deduction,totThree) values ('".$cols[epfno]."','".$cols[epfname]."','".$cols[sdate]."','".$cols[loanno]."','".$cols[loantype]."','".$cols[loanname]."','".$cols[startdate]."','".$cols[epfetf]."','".$cols[amount]."','".$cols[noOfins]."','".$cols[balance]."','".$cols[balance1]."','".$cols[remark]."') ";

   $resultsave = $conn->query($sqlsave);

   $conn->commit();
   echo "Saved";
 } catch (Exception $e) {
  $conn->rollBack();
  echo $e;
}
}


if ($_GET["Command"] == "pass_quot") {




  $_SESSION["custno"] = $_GET['custno'];

  header('Content-Type: text/xml');
  echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";

  $ResponseXML = "";
  $ResponseXML .= "<salesdetails>";

  $empcode = $_GET["EPFNO"];

  $sql = "SELECT * from loan_ismas where EPFNO ='" . $empcode . "'";


  $sql = $conn->query($sql);
  if ($row = $sql->fetch()) {

   $ResponseXML .= "<id><![CDATA[" . json_encode($row) . "]]></id>";
   $ResponseXML .= "<stname><![CDATA[" . $_GET['stname'] . "]]></stname>";
   
 }


 $ResponseXML .= "</salesdetails>";
 echo $ResponseXML;
}





?>
