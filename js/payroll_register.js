

new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue.js!',
    H1: 'Style',
    H2: 'Size',
    H3: 'Qty',
    H4: 'Remark',
    H5: 'Box / Packet No',
    H6: 'Hello Vue.js!'
  }
});

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



// function getdt() {

//     xmlHttp = GetXmlHttpObject();
//     if (xmlHttp == null) {
//         alert("Browser does not support HTTP Request");
//         return;
//     }

//     var url = "master_save.php";
//     url = url + "?Command=" + "getdt";
//     url = url + "&ls=" + "new";

//     xmlHttp.onreadystatechange = assign_dt;
//     xmlHttp.open("GET", url, true);
//     xmlHttp.send(null);
// }

// function assign_dt() {
//     var XMLAddress1;

//     if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")

//     {
//       //alert(XMLAddress1);

//       XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("id1");
//       document.getElementById('employeeno_txt').value = XMLAddress1[0].childNodes[0].nodeValue;



//       // XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("uniq");
//       // document.getElementById('uniq').value = XMLAddress1[0].childNodes[0].nodeValue;

//     }
// }









function save_inv() {

  xmlHttp = GetXmlHttpObject();
  if (xmlHttp == null) {
    alert("Browser does not support HTTP Request");
    return;
  }

    // var Jtable = "";
    // var table = $('#myTable').tableToJSON();
    // Jtable = JSON.stringify(table);
    


    ///////////////////////////////////////////////////////////////////////////////
    var obj = {
      "Main": "SAVE",
      "Sub": "",
      "Flag": "",
      "Table": "s_mas",
      "Num": 6,
      "Status": true,
      "Message": "Something",
      "Col": 
      {
        "employeeno_txt": document.getElementById("employeeno_txt").value,
        "initials_txt": document.getElementById("initials_txt").value,
        "namewithini_txt": document.getElementById("namewithini_txt").value,
        "address_txt": document.getElementById("address_txt").value,
        "joindate_txt": document.getElementById("joindate_txt").value,
        "mobileno_txt": document.getElementById("mobileno_txt").value,
        "status_txt": document.getElementById("status_txt").value,
        "homephone_txt": document.getElementById("homephone_txt").value,
        "spouse_txt": document.getElementById("spouse_txt").value,
        "contactperson_txt": document.getElementById("contactperson_txt").value,
        "nochild_txt": document.getElementById("nochild_txt").value,
        "email_txt": document.getElementById("email_txt").value,
        "nameofclild_txt": document.getElementById("nameofclild_txt").value,
        "designation_txt": document.getElementById("designation_txt").value,
        "dob_txt": document.getElementById("dob_txt").value,
        "bank_txt": document.getElementById("bank_txt").value,
        "refdt_txt": document.getElementById("refdt_txt").value,
        "preemployee_txt": document.getElementById("preemployee_txt").value,
        "department_txt": document.getElementById("department_txt").value,
        "religion_txt": document.getElementById("religion_txt").value,
        "qtyofemployees": document.getElementById("qtyofemployees").value,
        "remark": document.getElementById("remark").value
      }
      
    };
    
    /////////////////////////////////////////////////////////////////////////////// 
    
    var main = JSON.stringify(obj);
    var para = "";
    para = para + "main=" + main;
    

    console.log(para);
    imgup();
    xmlHttp.onreadystatechange = saveitem;
    xmlHttp.open("POST", "master_save.php", true);
    xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlHttp.send(para);
    
  }


  function saveitem() {
    var XMLAddress1;

    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {

      if (xmlHttp.responseText == "Saved") {
        document.getElementById('msg_box').innerHTML = "<div class='alert alert-success' role='alert'><span class='center-block'>Saved</span></div>";
        $("#msg_box").hide().slideDown(400).delay(2000);
        $("#msg_box").slideUp(400);
      } else {
        document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>" + JSON.parse(xmlHttp.responseText) + "</span></div>";
        $("#msg_box").hide().slideDown(400).delay(2000);
            // $("#msg_box").slideUp(400);
            console.log(JSON.parse(xmlHttp.responseText));
          }
        }
      }







      function addRow() {

        var table = document.getElementById("myTable");

        var row = table.insertRow(table.length);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);
        var cell6 = row.insertCell(5);
        
        
        cell1.setAttribute("contenteditable", "true");
        cell2.setAttribute("contenteditable", "true");
        cell3.setAttribute("contenteditable", "true");
        cell4.setAttribute("contenteditable", "true");
        cell5.setAttribute("contenteditable", "true");
        cell6.setAttribute("contenteditable", "true");

        cell1.innerHTML = "";
        cell2.innerHTML = "";
        cell3.innerHTML = "";
        cell4.innerHTML = "";
        cell5.innerHTML = "";
        cell6.innerHTML = '<input type="button" value="-" onclick="deleteRow(this)">';

        qtyTot();
      }

      function deleteRow(r) {

        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById("myTable").deleteRow(i);

        qtyTot();
      }


      function qtyTot() {

        var table = $('#myTable').tableToJSON();
        console.log(table);
        var  qtyTot = 0.00;
        var tempqty = 0.00;
        for (var i = table.length - 1; i >= 0; i--) {

          tempqty = parseFloat(table[i].Qty) || 0;
          qtyTot = tempqty + qtyTot;
        }

        document.getElementById("totQty").value = qtyTot;

      }


      function imgup(cdata) {



    var files = $('#file-3')[0].files; //where files would be the id of your multi file input

//or use document.getElementById('files').files;



for (var i = 0, f; f = files[i]; i++) {

  var name = document.getElementById('file-3');

  var alpha = name.files[i];

  console.log(alpha.name);

  var data = new FormData();

  var employeeno_txt = document.getElementById('employeeno_txt').value;

  data.append('Command', "imageup");

  data.append('file', alpha);

  data.append('employeeno_txt', employeeno_txt);
// alert('111');
$.ajax({

  url: 'master_save.php',

  data: data,

  processData: false,

  contentType: false,

  type: 'POST',

  success: function (msg) {

    alert(msg);



  }

});

}

}