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

            <!-- BRANCHESS DATA TABLE -->
            <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-primary">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title pull-left">Branches</h3>
                      <button data-toggle="modal" data-target="#newBranchesModal" data-dismiss="modal"
                        type="submit" class="btn btn-success pull-right"><i class="material-icons">add</i> Add Branch
                      </button>  
                    </div>
                    <p class="card-category"> List of Branches</p>
                  </div>
                <div class="card-body">
                  <div class="table-responsive-data2">
                    <table id="branchesTable" class="table table-striped " style="width:100%">
                    <thead class=" text-sucess">
                          <th>Name</th>
                          <th>Action</th>
                      </thead>
                      <tbody>
                        <tr>
                            <td>Test</td>
                          </td>
                          <td>
                            <!-- <button class="btn btn-sm btn-info btnViewCampuses"  style="padding:5px"><i class="material-icons">visibility</i></button> -->
                            <button class="btn btn-sm btn-warning btnEditCampuses" style="padding:5px"><i class="material-icons">edit</i></button>
                            <button class="btn btn-sm btn-danger btnDeleteCampuses" style="padding:5px"><i class="material-icons">delete</i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>Test 2</td>
                          </td>
                          <td>
                            <!-- <button class="btn btn-sm btn-info btnViewCampuses"  style="padding:5px"><i class="material-icons">visibility</i></button> -->
                            <button class="btn btn-sm btn-warning btnEditCampuses" style="padding:5px"><i class="material-icons">edit</i></button>
                            <button class="btn btn-sm btn-danger btnDeleteCampuses" style="padding:5px"><i class="material-icons">delete</i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>Test 3</td>
                          </td>
                          <td>
                            <!-- <button class="btn btn-sm btn-info btnViewCampuses"  style="padding:5px"><i class="material-icons">visibility</i></button>-->
                            <button class="btn btn-sm btn-warning btnEditCampuses" style="padding:5px"><i class="material-icons">edit</i></button>
                            <button class="btn btn-sm btn-danger btnDeleteCampuses" style="padding:5px"><i class="material-icons">delete</i></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
             <!-- END OF BRANCHESS DATA TABLE -->

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
  <!-- ADD NEW BRANCHES  -->
  <div id="newBranchesModal" class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="newBranchesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#4caf50">
              <p class="card-category" style="color:white">Adding New Branch</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form id="newBranchesForm" name="newBranchesForm">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name of Branch</label>
                          <input id="branchName" name="branchName" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
            </div>     
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input id="btnNewBranchesModal" type="submit" value="submit" class="btn btn-success">
            </div>
            </form>
          </div>
        </div>
      </div>
    <!-- END OF ADD NEW BRANCH -->

    <!-- Edit branch  -->
    <div id="editbranchesModal" class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="editbranchesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#ff9800">
              <p class="card-category" style="color:white">Updating Branch</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form id="editbranchesForm" name="editbranchesForm">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label">Name of Branch</label>
                          <input id="editbranchName" name="editbranchName" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input id="btnUpdateBranches" type="submit" value="update" class="btn btn-warning">
            </div>
            </form>
          </div>
        </div>
      </div>
    <!-- END OF EDIT BRANCH -->

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
        branchesTable = $('#branchesTable').DataTable({
          
          
          
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": true,
          "bInfo": false,
          "bAutoWidth": false
          
        })
        
    }

    loadtable()


    // Creating new branch
    $('#newBranchesForm').on('submit', function(e){
        e.preventDefault();
        $("#btnNewBranchesModal").attr("disabled", true);

        // Confirmation
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, submit it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $("#btnNewBranchesModal").attr("disabled", false);
            $('#newBranchesModal').modal('hide');
            showNotify('add_alert', 'You successfully submitted a proposal branches', 'success', 'top', 'right');
          }
          else{
            $("#btnNewBranchesModal").attr("disabled", false);
          }
          $("#btnNewBranchesModal").attr("disabled", false);
        })
        // End of Confirmation

    });
    // End of Creating new branch

    // View branches
    $('.btnViewBranches').on('click', function(){
        window.location.href = '<?php echo base_url()?>'+'user/proposal/view';

    });
    // End of View branches
    
    // Edit branch
    $('.btnEditBranches').on('click', function(){
      $('[name="editbranchesTitle"').val('Test Title');
      $('[name="editbranchesImplementer"').val('Test Implementer');
      $('[name="editbranchesTargetGroup"').val('Test Target Group');
      $('[name="editbranchesCooperatingAgencies"').val('Test Cooperating Agencies');
      $('[name="editbranchesDateStart"').val('2021-02-06');
      $('[name="editbranchesDateEnd"').val('2021-03-23');
      $('[name="editbranchesImpactStatement"').val('Test Impact Statement');
      $('#editbranchesModal').modal('show');
    })
    // End of edit branch

    // Update Branch
    $('#editbranchesForm').on('submit', function(e){
      e.preventDefault();
        $("#btnUpdateBranches").attr("disabled", true);

        // Confirmation
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, update it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $("#btnUpdateBranches").attr("disabled", false);
            $('#editbranchesModal').modal('hide');
            showNotify('system_update_alt', 'You successfully update your branches', 'warning', 'top', 'right');
          }
          else{
            $("#btnUpdateBranches").attr("disabled", false);
          }
          $("#btnUpdateBranches").attr("disabled", false);
        })
        // End of Confirmation
    })
    // End of update branch

    // Delete branches
    $('.btnDeleteBranches').on('click', function(){
      // Confirmation
      Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'error',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            showNotify('delete', 'You successfully deleted your branches', 'danger', 'top', 'right');
          }
        })
        // End of Confirmation
    })
    // End of delete branch
    
  });
</script>

</html>