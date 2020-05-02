
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



function custno(code, stname)
{

   xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null)
    {
        alert("Browser does not support HTTP Request");
        return;
    }
    var url = "search_registersave_data.php";
    url = url + "?Command=" + "pass_quot";
    url = url + "&employueeno=" + code;
    url = url + "&stname=" + stname;

    xmlHttp.onreadystatechange = passcusresult_quot;

    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);

}


function passcusresult_quot()
{
    var XMLAddress1;

    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
    {


       XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("id");
        var obj = JSON.parse(XMLAddress1[0].childNodes[0].nodeValue);

          XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("stname");
        var stname = XMLAddress1[0].childNodes[0].nodeValue;


            if (stname == "emp1") {

                opener.document.getElementById('txt_epf').value=obj.EPFNO;
                opener.document.getElementById('txt_joinDt').value=obj.joinDate;
            }

            if (stname == "reg") {

                opener.document.getElementById('employeeno_txt').value=obj.EPFNO;
                opener.document.getElementById('initials_txt').value=obj.initi;
                opener.document.getElementById('namewithini_txt').value=obj.Name;
                opener.document.getElementById('address_txt').value=obj.addr;
                opener.document.getElementById('joindate_txt').value=obj.joinDate;
                opener.document.getElementById('mobileno_txt').value=obj.perpno;
                opener.document.getElementById('status_txt').value=obj.mstatus;
                opener.document.getElementById('homephone_txt').value=obj.homePhoneNo;
                opener.document.getElementById('spouse_txt').value=obj.spouse;
                opener.document.getElementById('contactperson_txt').value=obj.conperson;
                opener.document.getElementById('nochild_txt').value=obj.nochil;
                opener.document.getElementById('email_txt').value=obj.email;
                opener.document.getElementById('nameofclild_txt').value=obj.familymem;
                opener.document.getElementById('designation_txt').value=obj.Designation;
                opener.document.getElementById('dob_txt').value=obj.dtbirth;
                opener.document.getElementById('bank_txt').value=obj.school;
                opener.document.getElementById('refdt_txt').value=obj.nic;
                opener.document.getElementById('preemployee_txt').value=obj.prevousem;
                opener.document.getElementById('department_txt').value=obj.department;
                opener.document.getElementById('religion_txt').value=obj.religion;
                opener.document.getElementById('qtyofemployees').value=obj.qulfic;
                opener.document.getElementById('remark').value=obj.remark;
            }

         setTimeout(function () {
            self.close();
        }, 250);
    }
}



