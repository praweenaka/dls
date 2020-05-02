<?php

session_start();



include_once './connection_sql.php';

if ($_GET["Command"] == "pass_quot") {




    $_SESSION["custno"] = $_GET['custno'];

    header('Content-Type: text/xml');
    echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";

    $ResponseXML = "";
    $ResponseXML .= "<salesdetails>";

    $empcode = $_GET["employueeno"];

    $sql = "Select * from empmaster where EPFNO ='" . $empcode . "'";

    $sql = $conn->query($sql);
    if ($row = $sql->fetch()) {

         $ResponseXML .= "<id><![CDATA[" . json_encode($row) . "]]></id>";
         $ResponseXML .= "<stname><![CDATA[" . $_GET['stname'] . "]]></stname>";
        
    }


    $ResponseXML .= "</salesdetails>";
    echo $ResponseXML;
}



?>
