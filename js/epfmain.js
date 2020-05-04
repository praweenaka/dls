
function GetXmlHttpObject() {
    var xmlHttp = null;
    try {
        // Firefox, Opera 8.0+, Safari
        xmlHttp = new XMLHttpRequest();
    } catch (e) {
// Internet Explorer
        try {
            xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return xmlHttp;
}

function keyset(key, e) {

    if (e.keyCode == 13) {
        document.getElementById(key).focus();
    }
}

function got_focus(key) {
    document.getElementById(key).style.backgroundColor = "#000066";
}

function lost_focus(key) {
    document.getElementById(key).style.backgroundColor = "#000000";
}



function basicCal() {

    var basic = parseFloat(document.getElementById("txt_basic").value) || 0;
    var spAllowence = parseFloat(document.getElementById("txt_spAllowence").value) || 0;
    var allowence = parseFloat(document.getElementById("txt_allowence").value) || 0;
    var mobilebill = parseFloat(document.getElementById("txt_mobilebill").value) || 0;
    var grosspay = parseFloat(document.getElementById("txt_grosspay").value) || 0;

   var totalbasic=basic+spAllowence+allowence+mobilebill+grosspay ;
   document.getElementById("txt_totOne").value = totalbasic;


}

function allowencecal() {

    var allowence = parseFloat(document.getElementById("txt_allowences").value) || 0;
   document.getElementById("txt_totTwo").value = allowence;

}

function deductioncal() {


    var proFund = parseFloat(document.getElementById("txt_proFund").value) || 0;
    var sloan1 = parseFloat(document.getElementById("txt_sloan1").value) || 0;
    var loanAmount = parseFloat(document.getElementById("txt_loanAmount").value) || 0;
    var paidAmount = parseFloat(document.getElementById("txt_paidAmount").value) || 0;
    var festival = parseFloat(document.getElementById("txt_festival").value) || 0;
    var sloan2 = parseFloat(document.getElementById("txt_sloan2").value) || 0;
    var balance = parseFloat(document.getElementById("txt_balance").value) || 0;
    var perMonth = parseFloat(document.getElementById("txt_perMonth").value) || 0;
    var insuLoan = parseFloat(document.getElementById("txt_insuLoan").value) || 0;
    var sloan3 = parseFloat(document.getElementById("txt_sloan3").value) || 0;
    var ISLine = parseFloat(document.getElementById("txt_ISLine").value) || 0;
    var payeeTax = parseFloat(document.getElementById("txt_payeeTax").value) || 0;
    var stampfee = parseFloat(document.getElementById("txt_stampfee").value) || 0;
   
    var totcalall=proFund+sloan1+loanAmount+paidAmount+festival+sloan2+balance+perMonth+insuLoan+sloan3+ISLine+payeeTax+stampfee;          
    document.getElementById("txt_deduction").value = totcalall;

    var basictot = parseFloat(document.getElementById("txt_totOne").value) || 0;
    var allowencetot = parseFloat(document.getElementById("txt_totTwo").value) || 0;
    var deductiontot = parseFloat(document.getElementById("txt_deduction").value) || 0;

    var sumTot = basictot+allowencetot-totcalall;
    document.getElementById("txt_totThree").value =sumTot;
}


function newent() {

document.getElementById('txt_epf').value="";
document.getElementById('txt_epf1').value="";
document.getElementById('EPF').value="";
document.getElementById('active').value="";
document.getElementById('bonus').value="";
document.getElementById('txt_joinDt').value="";
document.getElementById('txt_empCeasedDt').value="";
document.getElementById('txt_asAt').value="";
document.getElementById('txt_basic').value="";
document.getElementById('txt_spAllowence').value="";
document.getElementById('txt_allowence').value="";
document.getElementById('txt_mobilebill').value="";
document.getElementById('txt_grosspay').value="";
document.getElementById('txt_totOne').value="";
document.getElementById('txt_allowences').value="";
document.getElementById('rooster').value="";
document.getElementById('txt_bankId').value="";
document.getElementById('txt_enrollId').value="";
document.getElementById('txt_branchCode').value="";
document.getElementById('txt_inTime').value="";
document.getElementById('txt_outTime').value="";
document.getElementById('txt_accountNo').value="";
document.getElementById('txt_totTwo').value="";
document.getElementById('txt_proFund').value="";
document.getElementById('txt_sloan1').value="";
document.getElementById('txt_loanAmount').value="";
document.getElementById('txt_paidAmount').value="";
document.getElementById('txt_festival').value="";
document.getElementById('txt_sloan2').value="";
document.getElementById('txt_balance').value="";
document.getElementById('txt_perMonth').value="";
document.getElementById('txt_insuLoan').value="";
document.getElementById('txt_sloan3').value="";
document.getElementById('txt_ISLine').value="";
document.getElementById('txt_payeeTax').value="";
document.getElementById('txt_stampfee').value="";
document.getElementById('txt_deduction').value="";
document.getElementById('txt_totThree').value="";
document.getElementById('msg_box').innerHTML="";






}




function save_inv() {

xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Browser does not support HTTP Request");
        return;
    }
    
    // if (document.getElementById('txt_srdate').value == "") {
    //     document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>Date Is Not Enterd</span></div>";
    //     return false;
    // }

      // var table1 = $('#myTable').tableToJSON();
      //   var Jtable1 = JSON.stringify(table1);
 
    var obj = {
                  "Main": "SAVE",
                  "Sub": "",
                  "Flag": "",
                  "Table": "empsalmaster",
                  "Num": 6,
                  "Status": true,
                  "Message": "Create Save",
                  "Col": 
                    {
                         "txt_epf":document.getElementById("txt_epf").value,
                         "txt_epf1":document.getElementById("txt_epf1").value,
                         "EPF":document.getElementById("EPF").value,
                         "active":document.getElementById("active").value,
                         "bonus":document.getElementById("bonus").value,
                         "txt_joinDt":document.getElementById("txt_joinDt").value,
                         "txt_empCeasedDt":document.getElementById("txt_empCeasedDt").value,
                         "txt_asAt":document.getElementById("txt_asAt").value,
                         "txt_basic":document.getElementById("txt_basic").value,
                         "txt_spAllowence":document.getElementById("txt_spAllowence").value,
                         "txt_allowence":document.getElementById("txt_allowence").value,
                         "txt_mobilebill":document.getElementById("txt_mobilebill").value,
                         "txt_grosspay":document.getElementById("txt_grosspay").value,
                         "txt_totOne":document.getElementById("txt_totOne").value,
                         "txt_allowences":document.getElementById("txt_allowences").value,
                         "rooster":document.getElementById("rooster").value,
                         "txt_bankId":document.getElementById("txt_bankId").value,
                         "txt_enrollId":document.getElementById("txt_enrollId").value,
                         "txt_branchCode":document.getElementById("txt_branchCode").value,
                         "txt_inTime":document.getElementById("txt_inTime").value,
                         "txt_outTime":document.getElementById("txt_outTime").value,
                         "txt_accountNo":document.getElementById("txt_accountNo").value,
                         "txt_totTwo":document.getElementById("txt_totTwo").value,
                         "txt_proFund":document.getElementById("txt_proFund").value,
                         "txt_sloan1":document.getElementById("txt_sloan1").value,
                         "txt_loanAmount":document.getElementById("txt_loanAmount").value,
                         "txt_paidAmount":document.getElementById("txt_paidAmount").value,
                         "txt_festival":document.getElementById("txt_festival").value,
                         "txt_sloan2":document.getElementById("txt_sloan2").value,
                         "txt_balance":document.getElementById("txt_balance").value,
                         "txt_perMonth":document.getElementById("txt_perMonth").value,
                         "txt_insuLoan":document.getElementById("txt_insuLoan").value,
                         "txt_sloan3":document.getElementById("txt_sloan3").value,
                         "txt_ISLine":document.getElementById("txt_ISLine").value,
                         "txt_payeeTax":document.getElementById("txt_payeeTax").value,
                         "txt_stampfee":document.getElementById("txt_stampfee").value,
                         "txt_deduction":document.getElementById("txt_deduction").value,
                         "txt_totThree":document.getElementById("txt_totThree").value
                    }
                  
                };
 
    ///////////////////////////////////////////////////////////////////////////////

        // url = url + "&Jtable1=" + Jtable1;
  

                      var main = JSON.stringify(obj);
                      var para = "";
                      para = para + "main=" + main;
                      
                      xmlHttp.onreadystatechange = salessaveresult;
                      xmlHttp.open("POST", "epf_main_data.php", true);
                      xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                      xmlHttp.send(para);

} 


function salessaveresult() {
    var XMLAddress1;

    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {

        if (xmlHttp.responseText == "Saved") {
            document.getElementById('msg_box').innerHTML = "<div class='alert alert-success' role='alert'><span class='center-block'>Saved</span></div>";
            $("#msg_box").hide().slideDown(1000).delay(2000);
            $("#msg_box").slideUp(400);
             setTimeout(location.reload.bind(location), 1000);
        } else {
            document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>" + xmlHttp.responseText + "</span></div>";
        }
    }
}



function print() {

    var url = "salaryslip_one.php";
    url = url + "?txt_epf=" + document.getElementById('txt_epf').value;


    window.open(url, '_blank');



}
