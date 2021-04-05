<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<!-- HEAD TAG -->
<?php $this->load->view('includes/head.php'); ?>

<body class="">

  <!-- WRAPPER -->
  <div class="wrapper ">

    <!-- SIDEBAR -->
    <?php $this->load->view('includes/admin/sidebar.php'); ?>
    
    <!-- MAIN CONTENT -->
    <div class="main-panel">

      <!-- NAVBAR -->
      <?php $this->load->view('includes/navbar.php'); ?>

      <!-- OPENING TAG OF CONTENT -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- END OF OPENING TAG OF CONTENT -->

            <!-- COLLEGES DATA TABLE -->
            <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-primary">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title pull-left">Implementer</h3>
                      <button data-toggle="modal" data-target="#newImplementerModal" data-dismiss="modal"
                        type="submit" class="btn btn-success pull-right"><i class="material-icons">add</i> Add Implementer
                      </button>  
                    </div>
                    <p class="card-category"> List of Implementer</p>
                  </div>
                <div class="card-body">
                  <div class="table-responsive-data2">
                    <table id="COLLEGESTable" class="table table-striped " style="width:100%">
                      <thead class=" text-sucess">
                          <th>ID</th>
                          <th>Name</th>
                          <th>Action</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td> <img src="<?php echo base_url('resources/images/avatar_0120.jpg'); ?>" width="30" height="30" style="border-radius: 50%;" />
                            Test 
                          </td>
                          <td>
                            <!-- <button class="btn btn-sm btn-info btnViewImplementer"  style="padding:5px"><i class="material-icons">visibility</i></button> -->
                            <button class="btn btn-sm btn-warning btnEditImplementer" style="padding:5px"><i class="material-icons">edit</i></button>
                            <button class="btn btn-sm btn-danger btnDeleteImplementer" style="padding:5px"><i class="material-icons">delete</i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td> <img src="<?php echo base_url('resources/images/avatar_0120.jpg'); ?>" width="30" height="30" style="border-radius: 50%;" />
                            Test 2
                          </td>
                          <td>
                            <!-- <button class="btn btn-sm btn-info btnViewImplementer"  style="padding:5px"><i class="material-icons">visibility</i></button> -->
                            <button class="btn btn-sm btn-warning btnEditImplementer" style="padding:5px"><i class="material-icons">edit</i></button>
                            <button class="btn btn-sm btn-danger btnDeleteImplementer" style="padding:5px"><i class="material-icons">delete</i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td> <img src="<?php echo base_url('resources/images/avatar_0120.jpg'); ?>" width="30" height="30" style="border-radius: 50%;" />
                            Test 3
                          </td>
                          <td>
                            <!-- <button class="btn btn-sm btn-info btnViewImplementer"  style="padding:5px"><i class="material-icons">visibility</i></button>-->
                            <button class="btn btn-sm btn-warning btnEditImplementer" style="padding:5px"><i class="material-icons">edit</i></button>
                            <button class="btn btn-sm btn-danger btnDeleteImplementer" style="padding:5px"><i class="material-icons">delete</i></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
             <!-- END OF COLLEGES DATA TABLE -->

            <!-- CLOSING TAG OF CONTENT -->
          </div>
        </div>
      </div>
      <!-- END OF CLOSING TAG OF CONTENT -->
      
      <!-- FOOTER -->

    </div>
    <!-- END OF MAIN CONTENT -->

  </div>
  <!-- END OF WRAPPER -->

  <!-- FIXED PLUGINS -->
  
  <!-- FIXED PLUGINS -->
  <?php $this->load->view('includes/core_js_files.php')?>
  
  <!-- MODALS -->
  <!-- ADD NEW PROJECT  -->
  <div id="newImplementerModal" class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="newImplementerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#4caf50">
              <p class="card-category" style="color:white">Adding New Implementer</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form id="newImplementerForm" name="newImplementerForm">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Implementer Name</label>
                          <input id="implementerName" name="implementerName" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
            </div>     
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input id="btnNewImplementerModal" type="submit" value="submit" class="btn btn-success">
            </div>
            </form>
          </div>
        </div>
      </div>
    <!-- END OF ADD NEW PROJECT -->

    <!-- Edit implementer  -->
    <div id="editimplementerModal" class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="editimplementerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#ff9800">
              <p class="card-category" style="color:white">Updating Implementer</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form id="editimplementerForm" name="editimplementerForm">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label">Implementer</label>
                          <input id="editimplementerName" name="editimplementerName" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input id="btnUpdateImplementer" type="submit" value="update" class="btn btn-warning">
            </div>
            </form>
          </div>
        </div>
      </div>
    <!-- END OF EDIT PROJECT -->

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="docuModal" width="2000" height="1000" tabindex="-1" role="dialog" aria-labelledby="docuModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    

</body>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

<!-- ADDED FUNCTIONS SCRIPTS -->
<?php $this->load->view('includes/added_js_functions.php')?>

<script>


  $(document).ready(function(){    

    function loadtable(){
        COLLEGESTable = $('#COLLEGESTable').DataTable({
          
          
          
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": true,
          "bInfo": false,
          "bAutoWidth": false
          
        })
        
    }

    loadtable()


    // Creating new implementer
    $('#newImplementerForm').on('submit', function(e){
        e.preventDefault();
        $("#btnNewImplementerModal").attr("disabled", true);

        // Confirmation
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, submit it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $("#btnNewImplementerModal").attr("disabled", false);
            $('#newImplementerModal').modal('hide');
            showNotify('add_alert', 'You successfully submitted a proposal implementer', 'success', 'top', 'right');
          }
          else{
            $("#btnNewImplementerModal").attr("disabled", false);
          }
          $("#btnNewImplementerModal").attr("disabled", false);
        })
        // End of Confirmation

    });
    // End of Creating new implementer

    // View implementer
    $('.btnViewImplementer').on('click', function(){
        window.location.href = '<?php echo base_url()?>'+'user/proposal/view';

    });
    // End of View implementer
    
    // Edit implementer
    $('.btnEditImplementer').on('click', function(){
      $('[name="editimplementerTitle"').val('Test Title');
      $('[name="editimplementerImplementer"').val('Test Implementer');
      $('[name="editimplementerTargetGroup"').val('Test Target Group');
      $('[name="editimplementerCooperatingAgencies"').val('Test Cooperating Agencies');
      $('[name="editimplementerDateStart"').val('2021-02-06');
      $('[name="editimplementerDateEnd"').val('2021-03-23');
      $('[name="editimplementerImpactStatement"').val('Test Impact Statement');
      $('#editimplementerModal').modal('show');
    })
    // End of edit implementer

    // Update Implementer
    $('#editimplementerForm').on('submit', function(e){
      e.preventDefault();
        $("#btnUpdateImplementer").attr("disabled", true);

        // Confirmation
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, update it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $("#btnUpdateImplementer").attr("disabled", false);
            $('#editimplementerModal').modal('hide');
            showNotify('system_update_alt', 'You successfully update your implementer', 'warning', 'top', 'right');
          }
          else{
            $("#btnUpdateImplementer").attr("disabled", false);
          }
          $("#btnUpdateImplementer").attr("disabled", false);
        })
        // End of Confirmation
    })
    // End of update implementer

    // Delete implementer
    $('.btnDeleteImplementer').on('click', function(){
      // Confirmation
      Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'error',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            showNotify('delete', 'You successfully deleted your implementer', 'danger', 'top', 'right');
          }
        })
        // End of Confirmation
    })
    // End of delete implementer
    
  });
</script>

</html>