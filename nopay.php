<?php
//session_start();
?>
<script src="https://unpkg.com/vue"></script>
<section class="content">

  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title"><b>No Pay</b></h3>
    </div>
    <form name= "form1" role="form" class="form-horizontal">

      <div class="box-body">


        <div class="form-group-sm">
          <a  onclick="location.reload();" class="btn btn-default btn-sm">
            <span class="fa fa-user-plus"></span> &nbsp; New
          </a>

          <a  onclick="save_inv();" class="btn btn-success btn-sm">
            <span class="fa fa-save"></span> &nbsp; SAVE
          </a>



          <a onclick="//delete1();" class="btn btn-danger btn-sm" disabled="disabled">
            <span class="glyphicon glyphicon-trash"></span> &nbsp; DELETE
          </a>

          <a onclick="NewWindow('search_registersave.php?stname=reg', 'mywin', '800', '700', 'yes', 'center');" class="btn btn-info btn-sm">
            <span class="glyphicon glyphicon-search"></span> &nbsp; FIND
          </a>

          <a onclick="print();" class="btn btn-primary btn-sm">
            <span class="glyphicon glyphicon-print"></span> &nbsp; PRINT
          </a>


        </div>
        <hr>
        <div id="msg_box"  class="span12 text-center"  ></div> 
        


        <div class="col-md-12">
          <div class="form-group"></div>
          <div class="form-group-sm">
            <label class="col-sm-2" for="invno">Employee No</label>
            <div class="col-sm-2">
              <input type="text" placeholder="Employee No" id="employeeno" class="form-control  input-sm" >
            </div>
            
            <label class="col-sm-2" for="invno">Date</label>
            <div class="col-sm-2">
             <input type="text" placeholder="Join Date" id="joindate_txt" class="form-control dt input-sm">
           </div>
         </div> 


         <div class="form-group"></div>
         <div class="form-group-sm">
          <label class="col-sm-2" for="invno">Employee Name</label>
          <div class="col-sm-2">
            <input type="text" placeholder="Employee Name" id="employeename" class="form-control  input-sm" >
          </div>
          <div class="form-group"></div>
          <div class="form-group-sm">
            <label class="col-sm-2" for="c_code">Basic</label>
            <div class="col-sm-2">
             <input type="text" placeholder="Basic" id="basic" class="form-control  input-sm">
           </div> 

           <div class="form-group"></div>
           <div class="form-group-sm"> 
             <label class="col-sm-2" for="invno">Remark</label>
             <div class="col-sm-2">
              <textarea class="form-control" id="remark" rows="3"></textarea>
            </div>

          </div>

          <div class="form-group"></div>
          <div class="form-group-sm"> 
            <div class="col-sm-2">
              <input type="radio"  id="on"  >On
            </div>
            <div class="col-sm-2">
              <input type="radio"  id="from"  >From
            </div>
            <div class="col-sm-2">
              <input type="radio"  id="holiday"  >Holiday
            </div> 

          </div>
          <div class="col-md-12">
            <div class="form-group"></div>
            <div class="form-group-sm">
             <label class="col-sm-2" for="invno">From</label>
             <div class="col-sm-2">
               <input type="text" placeholder="From" id="from" class="form-control dt input-sm">
             </div>

             <label class="col-sm-2" for="invno">To</label>
             <div class="col-sm-2">
               <input type="text" placeholder="To" id="to" class="form-control dt input-sm">
             </div>
           </div> 

           <div class="form-group"></div>
           <div class="form-group-sm">
            <label class="col-sm-2" for="invno">No Of Days</label>
            <div class="col-sm-2">
              <input type="text" placeholder="No Of Days" id="employeename" class="form-control  input-sm" >
            </div> 
            <label class="col-sm-2" for="c_code">No Of Amount</label>
            <div class="col-sm-2">
             <input type="text" placeholder="No Of Amount" id="basic" class="form-control  input-sm">
           </div> 
         </div>
       </div>
     </form>
   </div>
 </section>


 <script src="js/payroll_register.js"></script>


 <script type="text/javascript">
  getdt();

</script>
<!-- <script src="js/tableToJsonMini.js"></script>
  <script src="js/tableToJson.js"></script> -->


  <!-- <script>getdt();</script> -->
