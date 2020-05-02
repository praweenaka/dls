<?php
//session_start();
?>
<script src="https://unpkg.com/vue"></script>
<section class="content">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><b>EPF Main</b></h3>
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

                    <a onclick="NewWindow('search_epf_main.php?stname=saveEPF', 'mywin', '800', '700', 'yes', 'center');" class="btn btn-info btn-sm">
                        <span class="glyphicon glyphicon-search"></span> &nbsp; FIND
                    </a>

                    <a onclick="NewWindow('search_registersave.php?stname=emp1', 'mywin', '800', '700', 'yes', 'center');" class="btn btn-info btn-sm">
                        <span class="glyphicon glyphicon-search"></span> &nbsp; Find Employee
                    </a>

                    <a onclick="print();" class="btn btn-primary btn-sm">
                        <span class="glyphicon glyphicon-print"></span> &nbsp; PRINT
                    </a>


                </div>
                <hr>
                <div id="msg_box"  class="span12 text-center"  ></div> 



                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">Employee Information</div>


                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-1" for="invno">EPF No</label>
                            <div class="col-sm-2">

                                <input type="text" placeholder="EPF No" id="txt_epf" class="form-control  input-sm">
                            </div>


                            <div class="col-sm-2">
                                <input type="text" placeholder="EPF Name" id="txt_epf1" class="form-control  input-sm">
                            </div>


                            <label class="col-sm-1" for="invno">EPF/ETF</label>
                            <div class="col-sm-1">
                              <input type="checkbox" id="EPF" name="EPF" value="1">
                          </div>

                          <label class="col-sm-1" for="invno">Active Bonus</label>
                          <div class="col-sm-1">
                            <input type="checkbox" id="active" name="active" value="1">
                        </div>

                        <label class="col-sm-1" for="invno">Bonus</label>
                        <div class="col-sm-1">
                            <input type="checkbox" id="bonus" name="bonus" value="1">
                        </div>
                    </div> 

                    <div class="form-group"></div>
                    <div class="form-group-sm">
                        <label class="col-sm-1" for="invno">Join Date</label>
                        <div class="col-sm-2">

                            <input type="date"  id="txt_joinDt" class="form-control  input-sm">
                        </div>

                        <label class="col-sm-2" for="invno">Employment Ceased Date</label>
                        <div class="col-sm-2">
                            <input type="date"  id="txt_empCeasedDt" class="form-control  input-sm">
                        </div>
                    </div>


                    <div class="form-group"></div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading">Basic Pay</div>


                    <div class="form-group"></div>
                    <div class="form-group-sm">
                        <label class="col-sm-1" for="invno">As At</label>
                        <div class="col-sm-2">

                            <input type="date" placeholder="As At" id="txt_asAt" class="form-control  input-sm">
                        </div>

                        <label class="col-sm-1" for="invno">Basic</label>
                        <div class="col-sm-2">
                            <input type="text" onkeyup="basicCal();" placeholder="Basic" id="txt_basic" class="form-control  input-sm">
                        </div>

                        <label class="col-sm-1" for="invno">SP Allowences</label>
                        <div class="col-sm-2">
                            <input type="text" onkeyup="basicCal();" placeholder="SP Allowences" id="txt_spAllowence" class="form-control  input-sm">
                        </div>
                    </div> 

                    <div class="form-group"></div>
                    <div class="form-group-sm">
                        <label class="col-sm-1" for="invno">Allowence</label>
                        <div class="col-sm-2">

                            <input type="text" onkeyup="basicCal();" placeholder="Allowence"  id="txt_allowence" class="form-control  input-sm">
                        </div>

                        <label class="col-sm-1" for="invno">Mobile Bill</label>
                        <div class="col-sm-2">
                            <input type="text" onkeyup="basicCal();" placeholder="Mobile Bill"  id="txt_mobilebill" class="form-control  input-sm">
                        </div>

                        <label class="col-sm-1" for="invno">Gross Pay</label>
                        <div class="col-sm-2">
                            <input type="text" onkeyup="basicCal();" placeholder="Gross Pay"  id="txt_grosspay" class="form-control  input-sm">
                        </div>
                    </div>




                    <div class="form-group"></div>

                    <label class="col-sm-1" for="invno"></label>
                    <div class="col-sm-2"></div>

                    <label class="col-sm-1" for="invno"></label>
                    <div class="col-sm-2"></div>

                    <label class="col-sm-1" for="invno"></label>
                    <div class="col-sm-2"></div>

                    <label class="col-sm-1" for="invno">Total</label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="Total"  id="txt_totOne" class="form-control  input-sm">
                    </div>


                    <div class="form-group"></div>

                </div>
            </div>





            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading">Allowence</div>


                    <div class="form-group"></div>
                    <div class="form-group-sm">
                        <label class="col-sm-1" for="invno">Allowence</label>
                        <div class="col-sm-2">

                            <input type="text" onkeyup="allowencecal();" placeholder="Allowence" id="txt_allowences" class="form-control  input-sm">
                        </div>
                        <label class="col-sm-1" for="invno">Rooster</label>
                        <div class="col-sm-1">
                            <input type="checkbox" id="rooster" name="rooster" value="1">
                        </div>

                    </div> 

                    <div class="form-group"></div>
                    <div class="form-group-sm">
                        <label class="col-sm-1" for="invno">Bank ID</label>
                        <div class="col-sm-2">

                            <input type="text" placeholder="Bank ID"  id="txt_bankId" class="form-control  input-sm">
                        </div>

                        <label class="col-sm-1" for="invno">Enroll Id</label>
                        <div class="col-sm-2">
                            <input type="text" placeholder="Enroll Id"  id="txt_enrollId" class="form-control  input-sm">
                        </div>

                        <label class="col-sm-1" for="invno">Branch Code</label>
                        <div class="col-sm-2">
                            <input type="text" placeholder="Branch Code"  id="txt_branchCode" class="form-control  input-sm">
                        </div>
                    </div>

                    <div class="form-group"></div>
                    <div class="form-group-sm">
                        <label class="col-sm-1" for="invno">In Time</label>
                        <div class="col-sm-2">

                            <input type="time"   id="txt_inTime" class="form-control  input-sm">
                        </div>

                        <label class="col-sm-1" for="invno">Out Time</label>
                        <div class="col-sm-2">
                            <input type="time"   id="txt_outTime" class="form-control  input-sm">
                        </div>

                        <label class="col-sm-1" for="invno">Account No</label>
                        <div class="col-sm-2">
                            <input type="text" placeholder="Account No"  id="txt_accountNo" class="form-control  input-sm">
                        </div>
                    </div>


                    <div class="form-group"></div>


                    <div class="form-group"></div>

                    <label class="col-sm-1" for="invno"></label>
                    <div class="col-sm-2"></div>

                    <label class="col-sm-1" for="invno"></label>
                    <div class="col-sm-2"></div>

                    <label class="col-sm-1" for="invno"></label>
                    <div class="col-sm-2"></div>

                    <label class="col-sm-1" for="invno">Total</label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="Total"  id="txt_totTwo" class="form-control  input-sm">
                    </div>


                    <div class="form-group"></div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading">Deduction</div>


                    <div class="form-group"></div>
                    <div class="form-group-sm">
                        <label class="col-sm-1" for="invno">Provident Fund 8%</label>
                        <div class="col-sm-2">
                            <input type="text" onkeyup="deductioncal();" placeholder="Provident Fund 8%" id="txt_proFund" class="form-control  input-sm">
                        </div>
                        <label class="col-sm-1" for="invno">Staff Loan 01</label>
                        <div class="col-sm-2">

                            <input type="text" onkeyup="deductioncal();" placeholder="Staff Loan 01" id="txt_sloan1" class="form-control  input-sm">
                        </div>



                        <label class="col-sm-1" for="invno">Loan Amount</label>
                        <div class="col-sm-2">
                            <input type="text" onkeyup="deductioncal();" placeholder="Loan Amount" id="txt_loanAmount" class="form-control  input-sm">
                        </div>

                        <label class="col-sm-1" for="invno">Paid Amount</label>
                        <div class="col-sm-2">
                            <input type="text" onkeyup="deductioncal();" placeholder="Paid Amount" id="txt_paidAmount" class="form-control  input-sm">
                        </div>

                    </div> 


                    <div class="form-group"></div>
                    <div class="form-group-sm">
                        <label class="col-sm-1" for="invno">Festival</label>
                        <div class="col-sm-2">
                            <input type="text" onkeyup="deductioncal();" placeholder="Festival" id="txt_festival" class="form-control  input-sm">
                        </div>
                        <label class="col-sm-1" for="invno">Staff Loan 02</label>
                        <div class="col-sm-2">

                            <input type="text" onkeyup="deductioncal();" placeholder="Staff Loan 02" id="txt_sloan2" class="form-control  input-sm">
                        </div>

                        <label class="col-sm-1" for="invno">Balance</label>
                        <div class="col-sm-2">
                            <input type="text" onkeyup="deductioncal();" placeholder="Balance" id="txt_balance" class="form-control  input-sm">
                        </div>

                        <label class="col-sm-1" for="invno">Per Month</label>
                        <div class="col-sm-2">
                            <input type="text" onkeyup="deductioncal();" placeholder="Per Month" id="txt_perMonth" class="form-control  input-sm">
                        </div>

                    </div> 


                    <div class="form-group"></div>
                    <div class="form-group-sm">
                        <label class="col-sm-1" for="invno">Insurance Loan</label>
                        <div class="col-sm-2">
                            <input type="text" onkeyup="deductioncal();" placeholder="Insurance Loan" id="txt_insuLoan" class="form-control  input-sm">
                        </div>
                        <label class="col-sm-1" for="invno">Staff Loan 03</label>
                        <div class="col-sm-2">
                            <input type="text" onkeyup="deductioncal();" placeholder="Staff Loan 03" id="txt_sloan3" class="form-control  input-sm">
                        </div>
                    </div> 

                    <div class="form-group"></div>
                    <div class="form-group-sm">
                        <label class="col-sm-1" for="invno">Insurance Support Line</label>
                        <div class="col-sm-2">
                            <input type="text"onkeyup="deductioncal();" placeholder="Insurance Support Line" id="txt_ISLine" class="form-control  input-sm">
                        </div>
                    </div>

                    <div class="form-group"></div>
                    <div class="form-group-sm">
                        <label class="col-sm-1" for="invno">Payee Tax</label>
                        <div class="col-sm-2">
                            <input type="text" onkeyup="deductioncal();" placeholder="Payee Tax" id="txt_payeeTax" class="form-control  input-sm">
                        </div>
                    </div> 

                    <div class="form-group"></div>
                    <div class="form-group-sm">
                        <label class="col-sm-1" for="invno">Stamp Fees</label>
                        <div class="col-sm-2">
                            <input type="text" onkeyup="deductioncal();" placeholder="Stamp Fees" id="txt_stampfee" class="form-control  input-sm">
                        </div>
                        <label class="col-sm-1" for="invno">Total Deduction</label>
                        <div class="col-sm-2">
                            <input type="text" onkeyup="deductioncal();" placeholder="Total Deduction" id="txt_deduction" class="form-control  input-sm">
                        </div>
                    </div> 







                    <div class="form-group"></div>


                    <div class="form-group"></div>

                    <label class="col-sm-1" for="invno"></label>
                    <div class="col-sm-2"></div>

                    <label class="col-sm-1" for="invno"></label>
                    <div class="col-sm-2"></div>

                    <label class="col-sm-1" for="invno"></label>
                    <div class="col-sm-2"></div>

                    <label class="col-sm-1" for="invno">Total</label>
                    <div class="col-sm-2">
                        <input type="text" placeholder="Total"  id="txt_totThree" class="form-control  input-sm">
                    </div>




                    <div class="form-group"></div>
                </div>
            </div> 
        </div>


    </section>
    <script src="js/epfmain.js"></script>

    <script type="text/javascript">
        getdt();
    </script>

