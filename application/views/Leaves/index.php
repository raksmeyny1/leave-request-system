<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> My Leave Request
        <small>Add / Edit User</small>
      </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>addNew"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Users List</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table id="myTable" class="table table-hover">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>startdate</th>
                      <th>enddate</th>
                      <th>duration</th>
                      <th>status</th>
                      <th>type</th>
                      <th>reason</th>
                      <th class="text-center">Actions</th>
                    </tr>

                  </thead>
                  <tbody>

                    <?php
                    //  var_dump($listLeaves);
                     ?>
                    <?php
                    if(!empty($listLeaves))
                    {
                        foreach($listLeaves as $record)
                        {
                    ?>
                    <tr>
                      <td><?php echo $record->id ?></td>
                      <td><?php echo $record->startdate ?></td>
                      <td><?php echo $record->enddate ?></td>
                      <td><?php echo $record->duration ?></td>
                          <td><?php echo $record->status_id ?></td>
                      <td><?php echo $record->type_id ?></td>
                        <td><?php //echo $record->comments ?></td>
                      <td class="text-center">
                          <!-- <a class="btn btn-sm btn-info" href="<?php echo base_url().'editOld/'.$record->userId; ?>"><i class="fa fa-pencil"></i></a>
                          <a class="btn btn-sm btn-danger deleteUser" href="#" data-userid="<?php echo $record->userId; ?>"><i class="fa fa-trash"></i></a> -->
                      </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>

                  </tbody>
                  </table>

                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?php //echo $this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    </section>
    </div>
    <script type="text/javascript">
        jQuery(document).ready(function(){
        //  alert('OK');
        $('#myTable').DataTable({
              responsive: true
        });
        });
    </script>
