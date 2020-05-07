<?php
//session_start();
?>
<script src="https://unpkg.com/vue"></script>
<section class="content">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Loan Master </b></h3>
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
                            <label class="col-sm-1" for="invno">EPF No</label>
                            <div class="col-sm-2">

                                <input type="text" placeholder="EPF No" id="txt_epf" class="form-control  input-sm">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" placeholder="EPF Name" id="txt_epf1" class="form-control  input-sm">
                            </div>

                            <label class="col-sm-1" for="invno">Date</label>
                            <div class="col-sm-2">
                                <input type="date"  id="txt_joinDt" class="form-control  input-sm">
                            </div>
                        </div> 

                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-1" for="invno">Loan No</label>
                            <div class="col-sm-2">
                                <input type="text"  id="txt_joinDt" class="form-control  input-sm">
                            </div>

                            <label class="col-sm-2" for="invno">Loan Type</label>
                            <div class="col-sm-2">
                                <input type="text"  id="txt_empCeasedDt" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-1" for="invno">Loan Name</label>
                            <div class="col-sm-2">
                                <input type="text"  id="txt_joinDt" class="form-control  input-sm">
                            </div> 
                        </div>
                        <div class="form-group"></div>
                    </div>
                </div>
                <!-- ========================================================== -->
                <div class="col-md-12">
                    <div class="panel panel-info"> 

                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-1" for="invno">Start Date</label>
                            <div class="col-sm-2">
                                <input type="date" placeholder="EPF No" id="txt_epf" class="form-control  input-sm">
                            </div>

                            <label class="col-sm-1" for="invno">EPF/ETF</label>
                            <div class="col-sm-1">
                                <input type="checkbox" id="EPF" name="EPF" value="1"/>
                            </div> 

                        </div> 

                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-1" for="invno">Amount</label>
                            <div class="col-sm-2">
                                <input type="text"  id="txt_joinDt" class="form-control  input-sm">
                            </div>

                            <label class="col-sm-2" for="invno">No Of Instrollment</label>
                            <div class="col-sm-2">
                                <input type="text"  id="txt_empCeasedDt" class="form-control  input-sm">
                            </div>
                        </div>
                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-1" for="invno">Balance</label>
                            <div class="col-sm-2">
                                <input type="text"  id="txt_joinDt" class="form-control  input-sm">
                            </div>
                            <div class="col-sm-2">
                                <input type="text"  id="txt_joinDt" class="form-control  input-sm">
                            </div> 
                        </div>
                        <div class="form-group"></div>
                        <div class="form-group-sm">
                            <label class="col-sm-1" for="invno">Remark</label>
                            <div class="col-sm-3">
                                <textarea class="form-control" id="remark" rows="3"></textarea>
                            </div> 
                        </div>
                        <div class="form-group"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<script src="js/loanmaster.js"></script>

<script type="text/javascript">
    getdt();
</script>

