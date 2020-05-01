<?php
session_start();
date_default_timezone_set('Asia/Colombo');

require_once ("connection_sql.php");
// include "crud_operation.php";


$main = array($_POST['main']);
$obj  = json_decode($main[0], true);
$operation = $obj[Main];
$cols = $obj[Col];

if ($_GET["Command"] == "getdt") {
    header('Content-Type: text/xml');
    echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";

    $ResponseXML = "";
    $ResponseXML .= "<new>";

    $sql = "SELECT deduction_code FROM invpara";
    $result = $conn->query($sql);
    $row = $result->fetch();
    $no = $row['deduction_code'];

    $tmpinvno = "000000" . $row["deduction_code"];
    $lenth = strlen($tmpinvno);
    $no = trim("COMMAN/") . substr($tmpinvno, $lenth - 7);

  //  echo $no;



    $ResponseXML .= "<id1><![CDATA[$no]]></id1>";

    $ResponseXML .= "</new>";

    echo $ResponseXML;
}



if ($operation = "SAVE") {
	
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->beginTransaction();
        
        $sql = "Insert into payroll_register(employeeNo,initilas,nameInitials,address,joinDate,mobileNo,status,homePhoneNo,spouse,contactPerson,noOfChilds,email,nameOfChilds,designation,dateOfBirth,college,nic,preEmployment,department,religion,qtyOfEmployees,remark,cancel,img) values ('".$cols[employeeno_txt]."','".$cols[initials_txt]."','".$cols[namewithini_txt]."','".$cols[address_txt]."','".$cols[joindate_txt]."','".$cols[mobileno_txt]."','".$cols[status_txt]."','".$cols[homephone_txt]."','".$cols[spouse_txt]."','".$cols[contactperson_txt]."','".$cols[nochild_txt]."','".$cols[email_txt]."','".$cols[nameofclild_txt]."','".$cols[designation_txt]."','".$cols[dob_txt]."','".$cols[bank_txt]."','".$cols[refdt_txt]."','".$cols[preemployee_txt]."','".$cols[department_txt]."','".$cols[religion_txt]."','".$cols[qtyofemployees]."','".$cols[remark]."','0','IMG') ";
        $result = $conn->query($sql);
 
        $conn->commit();
        echo "Saved";
    } catch (Exception $e) {
        $conn->rollBack();
        echo $e;
    }
}



?>