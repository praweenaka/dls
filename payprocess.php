<?php
session_start();
?>

<section class="content">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Pay Process</b></h3>
        </div>
        <form name= "form1" role="form" class="form-horizontal">

            <div class="box-body">


                <input type="hidden" id="tmpno" class="form-control">

                <input type="hidden" id="item_count" class="form-control">

                <div class="form-group-sm">

                    <a onclick="newent();" class="btn btn-default  btn-sm">
                        <span class="fa fa-user-plus"></span> &nbsp; NEW
                    </a>
                    <a  onclick="save_inv();" class="btn btn-info  btn-sm">
                        <span class="fa fa-save"></span> &nbsp; Process
                    </a>
                    <a  onclick="print_slip();" class="btn btn-info  btn-sm">
                        <span class="fa fa-save"></span> &nbsp; Print Slip
                    </a>
                    <a  onclick="print_sheet();" class="btn btn-info  btn-sm">
                        <span class="fa fa-save"></span> &nbsp; Print Sheet
                    </a>
                    <a  onclick="save_inv();" class="btn btn-info  btn-sm">
                        <span class="fa fa-save"></span> &nbsp; Bonus Slip
                    </a>
                    <a  onclick="save_inv();" class="btn btn-info  btn-sm">
                        <span class="fa fa-save"></span> &nbsp; Bonus Sheet
                    </a> 

                </div>
                <div class="form-group"></div>
                <div id="msg_box"  class="span12 text-center"></div>

                
                <div class="form-group"></div>
                <div class="form-group"></div>
                <div class="form-group-sm"> 
                    <div class="col-sm-2">
                        <input type="text"   name="month" id="month" value="<?php echo date('Y-m'); ?>" class="form-control dt input-sm">
                    </div>
                    <div class="col-sm-3">
                        <input type="button" name="searchitem" id="searchitem" value="Process" onclick="process();" class="btn btn-primary btn-sm">
                    </div>
                </div>


            </div>
        </form>
    </div>

</section>
<br>
<br>

<script src="js/payprocess.js"></script>

<!-- <script>newent();</script> -->

<script type="text/javascript">
    $(function () {
        $('.dt').datepicker({
            format: 'yyyy-mm'
        });


    });


</script>