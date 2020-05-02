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
        
        $sql = "Insert into empmaster(EPFNO,initi,Name,addr,joinDate,perpno,mstatus,homePhoneNo,spouse,conperson,nochil,email,familymem,Designation,dtbirth,school,nic,prevousem,department,religion,qulfic,remark,cancel) values ('".$cols[employeeno_txt]."','".$cols[initials_txt]."','".$cols[namewithini_txt]."','".$cols[address_txt]."','".$cols[joindate_txt]."','".$cols[mobileno_txt]."','".$cols[status_txt]."','".$cols[homephone_txt]."','".$cols[spouse_txt]."','".$cols[contactperson_txt]."','".$cols[nochild_txt]."','".$cols[email_txt]."','".$cols[nameofclild_txt]."','".$cols[designation_txt]."','".$cols[dob_txt]."','".$cols[bank_txt]."','".$cols[refdt_txt]."','".$cols[preemployee_txt]."','".$cols[department_txt]."','".$cols[religion_txt]."','".$cols[qtyofemployees]."','".$cols[remark]."','0') ";
        $result = $conn->query($sql);
        
        $conn->commit();
        echo "Saved";
    } catch (Exception $e) {
        $conn->rollBack();
        echo $e;
    }
}


if ($_POST["Command"] == "imageup") {
    $target_dir = "images/";

    $mrefno = str_replace("/", "-", "hfghf");

    $target_dir = $target_dir . "userimg" . "/";
    if (!file_exists($target_dir)) {
        if (mkdir($target_dir, 0777, true)) {
            
        }
    }

    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

    $mok = "no";
    if (file_exists($target_file)) {
        $mok = "no";
    } else {
        $mok = "ok";
    }


    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    if ($mok = "ok") {

        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->beginTransaction();
            $sql = "update empmaster set img='" . $target_file . "' where EPFNO='" . $_POST["employeeno_txt"] . "' ";
            echo $sql;
            $result = $conn->query($sql);

            $conn->commit();
        } catch (Exception $e) {
            $conn->rollBack();
            echo $e;
        }
    } else {
        echo "Sorry, file already exists";
    }
}
?>