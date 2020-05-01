<?php
//session_start();
?>
<script src="https://unpkg.com/vue"></script>
<section class="content">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Register</b></h3>
        </div>
        <form name= "form1" role="form" class="form-horizontal">

            <div class="box-body">


                <div class="form-group-sm">

                  
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
                  <div class="form-group">
                       <input id="file-3" class="file" type="file" data-preview-file-type="any" data-upload-url="#">

                  <p id="demo"></p>

                 </div>


                    <div class="col-md-12">
                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-1" for="invno">Employee No</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="Employee No" id="employeeno_txt" class="form-control  input-sm" >
                            </div>
                        </div> 

                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-1" for="invno">Initials</label>
                            <div class="col-sm-2">
                                 <input type="text" placeholder="Initials" id="initials_txt" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-1" for="invno">Name With Initials</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="Name With Initials" id="namewithini_txt" class="form-control  input-sm" >
                            </div>
                        </div> 

                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-1" for="invno">Address</label>
                            <div class="col-sm-2">
                                 <input type="text" placeholder="Address" id="address_txt" class="form-control  input-sm">
                            </div>
                        </div>

                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-1" for="invno">Join Date</label>
                            <div class="col-sm-2">
                                 <input type="date" placeholder="Join Date" id="joindate_txt" class="form-control  input-sm">
                            </div>
                        </div>
    
                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-1" for="c_code">Mobile No</label>
                            <div class="col-sm-2">
                               <input type="text" placeholder="Mobile No" id="mobileno_txt" class="form-control  input-sm">
                            </div>

                             <label class="col-sm-1" for="invno">Status</label>
                            <div class="col-sm-2">
                                 <input type="text" placeholder="Status" id="status_txt" class="form-control  input-sm">
                               
                            </div>

                        </div>
                            <div class="form-group"></div>
                            <div class="form-group-sm">
                            <label class="col-sm-1" for="invno">Home Phone No</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="Home Phone No" id="homephone_txt" class="form-control  input-sm">
                            </div>
                            <label class="col-sm-1" for="invno">Spouse</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="Spouse" id="spouse_txt" class="form-control  input-sm">
                            </div>
                        </div>


                        <div class="form-group"></div>
                        <div class="form-group-sm">

                            <label class="col-sm-1" for="invno">Contact Person</label>
                            <div class="col-sm-2">
                                 <input type="text" placeholder="Contact Person" id="contactperson_txt" class="form-control  input-sm">
                            </div>

                            <label class="col-sm-1" for="invno">No Of Children</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="No Of Children" id="nochild_txt" class="form-control  input-sm">
                            </div>
                        </div>

                        <div class="form-group"></div>
                         <div class="form-group-sm">

                             <label class="col-sm-1" for="invno">Email</label>
                            <div class="col-sm-2">

                                <input type="text" placeholder="Email" id="email_txt" class="form-control  input-sm">
                            </div>

                          
                            <label class="col-sm-1" for="invno">Name Of Child</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="Name Of Child<" id="nameofclild_txt" class="form-control  input-sm">
                            </div>
                            </div>
                          

                        <div class="form-group"></div>
                        <div class="form-group-sm">
                             <label class="col-sm-1" for="invno">Designation</label>
                            <div class="col-sm-2">

                             <input type="text" placeholder="Designation" name="bank_txt" id="designation_txt" class="form-control  input-sm">
                            </div>
                           
                            <label class="col-sm-1" for="invno">Date Of Birth</label>
                            <div class="col-sm-2">

                                <input type="date" placeholder="Date Of Birth" name="refdt_txt" id="dob_txt" class="form-control  input-sm">
                            </div>
                        </div>

                        <div class="form-group"></div>
                        <div class="form-group-sm">
                             <label class="col-sm-1" for="invno">College</label>
                            <div class="col-sm-2">

                             <input type="text" placeholder="College" name="bank_txt" id="bank_txt" class="form-control  input-sm">
                            </div>
                           
                            <label class="col-sm-1" for="invno">NIC</label>
                            <div class="col-sm-2">

                                <input type="text" placeholder="NIC" name="refdt_txt" id="refdt_txt" class="form-control  input-sm">
                            </div>
                        </div>

                        <div class="form-group"></div>
                        <div class="form-group-sm">
                             <label class="col-sm-1" for="invno">Previous Employment</label>
                            <div class="col-sm-2">

                             <input type="text" placeholder="Previous Employment" name="bank_txt" id="preemployee_txt" class="form-control  input-sm">
                            </div>
                           
                            <label class="col-sm-1" for="invno">Department</label>
                            <div class="col-sm-2">

                                <input type="text" placeholder="Department" name="refdt_txt" id="department_txt" class="form-control  input-sm">
                            </div>
                        </div>

                        <div class="form-group"></div>
                        <div class="form-group-sm">
                             <label class="col-sm-1" for="invno">Religion</label>
                            <div class="col-sm-2">

                             <input type="text" placeholder="Religion" name="bank_txt" id="religion_txt" class="form-control  input-sm">
                            </div>
                        </div>



                        <div class="form-group"></div>
                        <div class="form-group-sm">
                             <label class="col-sm-1" for="invno">Quantity Of Employees</label>
                            <div class="col-sm-5">

                              <textarea class="form-control" id="qtyofemployees" rows="3"></textarea>
                            </div>
                        </div>


                        <div class="form-group"></div>
                        <div class="form-group-sm">
                             <label class="col-sm-1" for="invno">Remarks</label>
                            <div class="col-sm-5">

                              <textarea class="form-control" id="remark" rows="3"></textarea>
                            </div>
                        </div>

                         <div class="col-sm-3" align="right">
                                                  <div id="getImg"></div>
                                                 </div>
                                            

                       

                    </div>


</section>
<script src="js/payroll_register.js"></script>


<?php
// include 'autocompleJUI/disp_packlist_PATH.php';
?>

<script type="text/javascript">
    getdt();

</script>
<!-- <script src="js/tableToJsonMini.js"></script>
<script src="js/tableToJson.js"></script> -->


<!-- <script>getdt();</script> -->
