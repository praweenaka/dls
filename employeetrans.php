<?php
//session_start();
?>
<script src="https://unpkg.com/vue"></script>
<section class="content">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Employee Transction</b></h3>
        </div>
        <form name= "form1" role="form" class="form-horizontal">

            <div class="box-body">


                <div class="form-group-sm">
                    <a  onclick="location.reload();" class="btn btn-default btn-sm">
                        <span class="fa fa-user-plus"></span> &nbsp; New
                    </a>
                    <a onclick="save_inv();" class="btn btn-success btn-sm" >
                        <span class="glyphicon glyphicon-save"></span> &nbsp; Save
                    </a>
                    <a onclick="//delete1();" class="btn btn-danger btn-sm" disabled="disabled">
                        <span class="glyphicon glyphicon-trash"></span> &nbsp; DELETE
                    </a>

                    <a onclick="NewWindow('search_loanmaster.php.php?stname=saveEPF', 'mywin', '800', '700', 'yes', 'center');" class="btn btn-info btn-sm">
                        <span class="glyphicon glyphicon-search"></span> &nbsp; FIND
                    </a>

                    <a onclick="NewWindow('search_registersave.php?stname=emp1', 'mywin', '800', '700', 'yes', 'center');" class="btn btn-info btn-sm">
                        <span class="glyphicon glyphicon-search"></span> &nbsp; Find Employee
                    </a>
                    <a onclick="print();" class="btn btn-primary btn-sm">
                        <span class="glyphicon glyphicon-print"></span> &nbsp; Achive
                    </a>
                    <a onclick="print();" class="btn btn-primary btn-sm">
                        <span class="glyphicon glyphicon-print"></span> &nbsp; Reports
                    </a>


                </div>
                <hr>
                <div id="msg_box"  class="span12 text-center"  ></div> 



                <div class="col-md-12">
                    <div class="panel panel-info"> 

                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-2" for="invno">EPF No</label>
                            <div class="col-sm-2">

                                <input type="text" placeholder="EPF No" id="epfno" class="form-control  input-sm">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" placeholder="EPF Name" id="epfname" class="form-control  input-sm">
                            </div>

                            <label class="col-sm-2" for="invno">Month</label>
                            <div class="col-sm-2">
                                <input type="text"  value="<?php echo date('Y-m');?>" id="sdate" class="form-control dt input-sm">
                            </div>
                        </div> 

                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-2" for="invno">Basic</label>
                            <div class="col-sm-2">
                                <input type="number"  id="basic" placeholder="Basic" class="form-control  input-sm">
                            </div>

                            <label class="col-sm-2" for="invno">Salary Advance</label>
                            <div class="col-sm-2">
                                <input type="number"  id="salary_ad" placeholder="Salary Advance" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-2" for="invno">Mobitel Bill</label>
                            <div class="col-sm-2">
                                <input type="number"  id="mob_bill" placeholder="Mobitel Bill" class="form-control  input-sm">
                            </div> 
                            <label class="col-sm-2" for="invno">Allowance</label>
                            <div class="col-sm-2">
                                <input type="number"  id="allowlance" placeholder="Allowance" class="form-control  input-sm">
                            </div> 
                        </div>
                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-2" for="invno">SP Allowance</label>
                            <div class="col-sm-2">
                                <input type="number"  id="sp_allow" placeholder="SP Allowance" class="form-control  input-sm">
                            </div> 
                            <label class="col-sm-2" for="invno">SP Deduction</label>
                            <div class="col-sm-2">
                                <input type="number"  id="sp_dedu" placeholder="SP Deduction" class="form-control  input-sm">
                            </div> 
                        </div>
                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-2" for="invno">Salary Arreas</label>
                            <div class="col-sm-2">
                                <input type="number"  id="salary_arrs" placeholder="Salary Arreas" class="form-control  input-sm">
                            </div> 
                            <label class="col-sm-2" for="invno">Remark</label>
                            <div class="col-sm-3">
                                <textarea class="form-control" id="remark" rows="3"></textarea> 
                            </div> 
                        </div>
                        <div class="form-group"></div>
                    </div>
                </div>
                <!-- ========================================================== -->
                <div class="col-md-12">
                    <div class="panel panel-info"> 
                        <div class="panel-heading">Over Time</div>
                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-2" for="invno">OT Hours</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="OT Hours" id="ot_hour" class="form-control  input-sm">
                            </div>

                            <label class="col-sm-2" for="invno">OT Amount</label>
                            <div class="col-sm-2">
                                <input type="text" placeholder="OT Amount" id="ot_amou"  class="form-control  input-sm">
                            </div> 
                            <div class="form-group"></div>
                        </div> 
                    </div> 
                </div> 
                <!-- ==================================== -->

                <div class="col-md-12">
                    <div class="panel panel-info"> 
                        <div class="panel-heading">No Pay</div>
                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-1" for="invno">Days</label>
                            <div class="col-sm-2">
                                <input type="text"  id="days" placeholder="Days" class="form-control  input-sm">
                            </div>

                            <label class="col-sm-2" for="invno">Amount</label>
                            <div class="col-sm-2">
                                <input type="number"  id="nopayamou"  placeholder="Amount"  class="form-control  input-sm">
                            </div>
                        </div> 
                        <div class="form-group"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<script src="js/employeetrans.js"></script>

<script type="text/javascript">
    getdt();
</script>

