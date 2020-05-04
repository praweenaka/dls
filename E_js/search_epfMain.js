
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

       opener.document.getElementById('txt_epf').value=obj.EPFNO;            
       opener.document.getElementById('txt_epf1').value=obj.Name;

       if(obj.EPFNO=="1"){
         opener.document.getElementById("EPF").checked = true;
       } 

       if(obj.Active=="1"){
        opener.document.getElementById('active').checked = true;
      }

      if(obj.Bonus=="1"){
       opener.document.getElementById('bonus').checked = true;
     }         

     opener.document.getElementById('txt_joinDt').value=obj.dt_join;            
     opener.document.getElementById('txt_empCeasedDt').value=obj.fied;            
     opener.document.getElementById('txt_asAt').value=obj.saldate;            
     opener.document.getElementById('txt_basic').value=obj.Basic;            
     opener.document.getElementById('txt_spAllowence').value=obj.SP_Allow01;            
     opener.document.getElementById('txt_allowence').value=obj.SP_Allow02;            
     opener.document.getElementById('txt_mobilebill').value=obj.mobbil;            
     opener.document.getElementById('txt_grosspay').value=obj.grosspay;            
     opener.document.getElementById('txt_totOne').value=obj.totOne;            
     opener.document.getElementById('txt_allowences').value=obj.SP_Advance1; 
     if(obj.roster=="1"){
       opener.document.getElementById('rooster').checked = true;
     }            
     opener.document.getElementById('txt_bankId').value=obj.bankid;            
     opener.document.getElementById('txt_enrollId').value=obj.fid;            
     opener.document.getElementById('txt_branchCode').value=obj.branchcode;            
     opener.document.getElementById('txt_inTime').value=obj.intime;            
     opener.document.getElementById('txt_outTime').value=obj.outtime;            
     opener.document.getElementById('txt_accountNo').value=obj.bankacc;            
     opener.document.getElementById('txt_totTwo').value=obj.totTwo;            
     opener.document.getElementById('txt_proFund').value=obj.proFund;            
     opener.document.getElementById('txt_sloan1').value=obj.LOAN01;                     
     opener.document.getElementById('txt_festival').value=obj.FESTIVAL;            
     opener.document.getElementById('txt_sloan2').value=obj.LOAN02;                 
     opener.document.getElementById('txt_insuLoan').value=obj.INSULOAN;            
     opener.document.getElementById('txt_sloan3').value=obj.LOAN03;            
     opener.document.getElementById('txt_ISLine').value=obj.INSU2;            
     opener.document.getElementById('txt_payeeTax').value=obj.payetax;            
     opener.document.getElementById('txt_stampfee').value=obj.stamp;            
     opener.document.getElementById('txt_deduction').value=obj.deduction;            
     opener.document.getElementById('txt_totThree').value=obj.totThree;            
   }

   

   setTimeout(function () {
    self.close();
  }, 250);
 }
}



