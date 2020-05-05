
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
        "Table": "trans",
        "Num": 6,
        "Status": true,
        "Message": "Create Save",
        "Col": 
        {
         "epfno":document.getElementById("epfno").value,
         "epfname":document.getElementById("epfname").value,
         "sdate":document.getElementById("sdate").value,
         "basic":document.getElementById("basic").value,
         "salary_ad":document.getElementById("salary_ad").value,
         "mob_bill":document.getElementById("mob_bill").value,
         "allowlance":document.getElementById("allowlance").value,
         "sp_allow":document.getElementById("sp_allow").value,
         "sp_dedu":document.getElementById("sp_dedu").value,
         "salary_arrs":document.getElementById("salary_arrs").value,
         "remark":document.getElementById("remark").value,
         "ot_hour":document.getElementById("ot_hour").value,
         "ot_amou":document.getElementById("ot_amou").value, 
         "days":document.getElementById("days").value,
         "nopayamou":document.getElementById("nopayamou").value, 
       }

     };

    ///////////////////////////////////////////////////////////////////////////////

        // url = url + "&Jtable1=" + Jtable1;


        var main = JSON.stringify(obj);
        var para = "";
        para = para + "main=" + main;

        xmlHttp.onreadystatechange = salessaveresult;
        xmlHttp.open("POST", "employeetrans_data.php", true);
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


      function custno(code, stname)
      {

       xmlHttp = GetXmlHttpObject();
       if (xmlHttp == null)
       {
        alert("Browser does not support HTTP Request");
        return;
      }
      var url = "employeetrans_data.php";
      url = url + "?Command=" + "pass_quot";
      url = url + "&epfno=" + code;
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
        opener.document.document.getElementById("epfno").value=obj.bankacc;  
        opener.document.document.getElementById("epfname").value=obj.bankacc;  
        opener.document.document.getElementById("sdate").value=obj.bankacc;  
        opener.document.document.getElementById("basic").value=obj.bankacc;  
        opener.document.document.getElementById("salary_ad").value=obj.bankacc;  
        opener.document.document.getElementById("mob_bill").value=obj.bankacc;  
        opener.document.document.getElementById("allowlance").value=obj.bankacc;  
        opener.document.document.getElementById("sp_allow").value=obj.bankacc;  
        opener.document.document.getElementById("sp_dedu").value=obj.bankacc;  
        opener.document.document.getElementById("salary_arrs").value=obj.bankacc;  
        opener.document.document.getElementById("remark").value=obj.bankacc;  
        opener.document.document.getElementById("ot_hour").value=obj.bankacc;  
        opener.document.document.getElementById("ot_amou").value=obj.bankacc;   
        opener.document.document.getElementById("days").value=obj.bankacc;  
        opener.document.document.getElementById("nopayamou").value=obj.bankacc;   
        
      } 


      setTimeout(function () {
        self.close();
      }, 250);
    }
  }