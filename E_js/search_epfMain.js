
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
    var url = "search_epf_mainData.php";
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

                    if (stname == "saveEPF") {

                     opener.document.getElementById('txt_epf').value=obj.epff;            
                     opener.document.getElementById('txt_epf1').value=obj.epf1;

                     if(obj.EPF=="1"){
                         opener.document.getElementById("EPF").checked = true;
                     } 

                     if(obj.active=="1"){
                          opener.document.getElementById('active').checked = true;
                     }

                     if(obj.bonus=="1"){
                         opener.document.getElementById('bonus').checked = true;
                     }         

                     opener.document.getElementById('txt_joinDt').value=obj.joinDt;            
                     opener.document.getElementById('txt_empCeasedDt').value=obj.empCeasedDt;            
                     opener.document.getElementById('txt_asAt').value=obj.asAt;            
                     opener.document.getElementById('txt_basic').value=obj.basic;            
                     opener.document.getElementById('txt_spAllowence').value=obj.spAllowence;            
                     opener.document.getElementById('txt_allowence').value=obj.allowence;            
                     opener.document.getElementById('txt_mobilebill').value=obj.mobilebill;            
                     opener.document.getElementById('txt_grosspay').value=obj.grosspay;            
                     opener.document.getElementById('txt_totOne').value=obj.totOne;            
                     opener.document.getElementById('txt_allowences').value=obj.allowences; 
                     if(obj.rooster=="1"){
                         opener.document.getElementById('rooster').checked = true;
                     }            
                     opener.document.getElementById('txt_bankId').value=obj.bankId;            
                     opener.document.getElementById('txt_enrollId').value=obj.enrollId;            
                     opener.document.getElementById('txt_branchCode').value=obj.branchCode;            
                     opener.document.getElementById('txt_inTime').value=obj.inTime;            
                     opener.document.getElementById('txt_outTime').value=obj.outTime;            
                     opener.document.getElementById('txt_accountNo').value=obj.accountNo;            
                     opener.document.getElementById('txt_totTwo').value=obj.totTwo;            
                     opener.document.getElementById('txt_proFund').value=obj.proFund;            
                     opener.document.getElementById('txt_sloan1').value=obj.sloan1;            
                     opener.document.getElementById('txt_loanAmount').value=obj.loanAmount;            
                     opener.document.getElementById('txt_paidAmount').value=obj.paidAmount;            
                     opener.document.getElementById('txt_festival').value=obj.festival;            
                     opener.document.getElementById('txt_sloan2').value=obj.sloan2;            
                     opener.document.getElementById('txt_balance').value=obj.balance;            
                     opener.document.getElementById('txt_perMonth').value=obj.perMonth;            
                     opener.document.getElementById('txt_insuLoan').value=obj.insuLoan;            
                     opener.document.getElementById('txt_sloan3').value=obj.sloan3;            
                     opener.document.getElementById('txt_ISLine').value=obj.ISLine;            
                     opener.document.getElementById('txt_payeeTax').value=obj.payeeTax;            
                     opener.document.getElementById('txt_stampfee').value=obj.stampfee;            
                     opener.document.getElementById('txt_deduction').value=obj.deduction;            
                     opener.document.getElementById('txt_totThree').value=obj.totThree;            
                    }
            

     

           //      opener.document.getElementById('employeeno_txt').value=obj.employeeNo;
           //      opener.document.getElementById('initials_txt').value=obj.initilas;
           //      opener.document.getElementById('namewithini_txt').value=obj.nameInitials;
           //      opener.document.getElementById('address_txt').value=obj.address;
           //      opener.document.getElementById('joindate_txt').value=obj.joinDate;
           //      opener.document.getElementById('mobileno_txt').value=obj.mobileNo;
           //      opener.document.getElementById('status_txt').value=obj.status;
           //      opener.document.getElementById('homephone_txt').value=obj.homePhoneNo;
           //      opener.document.getElementById('spouse_txt').value=obj.spouse;
           //      opener.document.getElementById('contactperson_txt').value=obj.contactPerson;
           //      opener.document.getElementById('nochild_txt').value=obj.noOfChilds;
           //      opener.document.getElementById('email_txt').value=obj.email;
           //      opener.document.getElementById('nameofclild_txt').value=obj.nameOfChilds;
           //      opener.document.getElementById('designation_txt').value=obj.designation;
           //      opener.document.getElementById('dob_txt').value=obj.dateOfBirth;
           //      opener.document.getElementById('bank_txt').value=obj.college;
           //      opener.document.getElementById('refdt_txt').value=obj.nic;
           //      opener.document.getElementById('preemployee_txt').value=obj.preEmployment;
           //      opener.document.getElementById('department_txt').value=obj.department;
           //      opener.document.getElementById('religion_txt').value=obj.religion;
           //      opener.document.getElementById('qtyofemployees').value=obj.qtyOfEmployees;
           //      opener.document.getElementById('remark').value=obj.remark;


           //  }



              

                
            


         setTimeout(function () {
            self.close();
        }, 250);
    }
}



