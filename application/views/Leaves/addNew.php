<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> User Management
        <small>Add / Edit User</small>
      </h1>
    </section>

    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->



                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter User Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <form role="form" id="addUser" action="<?php echo base_url() ?>Leaves/addNewRequest" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="role">Leaves Types</label>
                                    <select class="form-control" id="role" name="leavestype">
                                        <?php
                                        if(!empty($type))
                                        {
                                            foreach ($type as $value)
                                            {
                                                ?>
                                                <option value="<?php echo $value->id ?>"><?php echo $value->name ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="duration">Duration</label>
                                          <input type="number" class="form-control required " id="duration"  name="duration" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="startdate">Start Date</label>
                                     <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                          <input class="form-control datepicker" id="startdate" name="startdate" placeholder="MM/DD/YYYY" type="text"/>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="timestart">Time</label>
                                        <select class="form-control required" id="timestart" name="timestart">
                                            <option value="Morning">Morning</option>
                                            <option value="Afternoon">Afternoon</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="EndDate">EndDate</label>
                                       <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input class="form-control datepicker" id="enddate" name="enddate" placeholder="MM/DD/YYYY" type="text"/>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="timeend">Time</label>
                                       <select class="form-control required" id="timeend" name="timeend">
                                           <option value="Morning">Morning</option>
                                           <option value="Afternoon">Afternoon</option>
                                       </select>
                                    </div>
                                </div>
                            </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="role">Leaves status</label>
                                        <select class="form-control" id="role" name="leavestatus">

                                            <?php
                                            if(!empty($status))
                                            {
                                                foreach ($status as $value)
                                                {
                                                    ?>
                                                    <option value="<?php echo $value->id ?>"><?php echo $value->name ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Comments">Comments (optional)</label>
                                            <input type="text" class="form-control" id="Comments"  name="Comments" >
                                        </div>
                                    </div>
                                </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
                <?php } ?>
                <?php
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>

                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<script src="<?php echo base_url(); ?>assets/js/addLeaveRequest.js" type="text/javascript"></script>
<script type="text/javascript">
                       $(document).ready(function() {
                       $('.datepicker').datepicker();
                     });
</script>
