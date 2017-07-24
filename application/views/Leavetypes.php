<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> List Of Leaves
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
                  <h3 class="box-title">List of Types</h3>
              </div><!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table id="myTables" class="table table-hover">
                    <thead>
                      <tr>
                          <th>id</th>
                          <th>Name</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          foreach ($Leavetypes as $value) {
                       ?>
                      <tr>
                        <td><?php echo $value->id ?></td>
                        <td><?php echo $value->name ?></td>
                      </tr>
                      <?php
                    }
                       ?>
                    </tbody>
                </table>
              </div><!-- /.box-body -->
              <div class="box-footer clearfix">
                  <?php echo $this->pagination->create_links(); ?>
              </div>
            </div><!-- /.box -->
          </div>
      </div>
     </section>
</div>
<script type="text/javascript">
    jQuery(document).ready(function(){
      $('#myTables').DataTable({
            responsive: true

      });
    });

</script>
