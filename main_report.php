<?php
//session_start();
?>
<script src="https://unpkg.com/vue"></script>
<section class="content">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Main Reports</b></h3>
        </div>
        <form name= "form1" role="form" class="form-horizontal">

            <div class="box-body">


                <div class="form-group-sm">

            
                </div>
                <hr>
               <div id="msg_box"  class="span12 text-center"  ></div> 

               <div class="col-md-12">



                        <form action="/main_report_data.php" method="get">

                        <div class="col-md-12">
                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-1" for="invno">C Form</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="Employee No" id="employeeno_txt" class="form-control  input-sm" >
                            </div>
                        </div> 

                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-1" for="invno">ETF/EPF Contribution</label>
                            <div class="col-sm-2">
                                 <input type="text" placeholder="Initials" id="initials_txt" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-1" for="invno">Stamp Duty Report</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="Name With Initials" id="namewithini_txt" class="form-control  input-sm" >
                            </div>
                        </div> 

                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-1" for="invno">Payee Tax</label>
                            <div class="col-sm-2">
                                 <input type="text" placeholder="Address" id="address_txt" class="form-control  input-sm">
                            </div>
                        </div>

                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-1" for="invno">ETF Report</label>
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
                    </div>
                                        <button type="submit">Submit</button>
                        <button type="submit" formaction="/action_page2.php">Submit to another page</button>
                        </form>

                        
                        
            <!--             <form action="/action_page.php" method="get">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <button type="submit">Submit</button>

</form> -->


                                            

                       

                    </div>


</section>
<script src="js/test_results_entry.js"></script>


<?php
// include 'autocompleJUI/disp_packlist_PATH.php';
?>

<script type="text/javascript">
    getdt();

</script>
<!-- <script src="js/tableToJsonMini.js"></script>
<script src="js/tableToJson.js"></script> -->


<!-- <script>getdt();</script> -->
