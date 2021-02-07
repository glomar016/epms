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

              <!-- PROJECTS DATA TABLE -->
            <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-info">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title pull-left">Project Title</h3>
                      <button data-toggle="modal" data-target="#updateProjectStatusModal" data-dismiss="modal"
                        type="submit" class="btn btn-success pull-right"><i class="material-icons"></i>Update Project Status
                      </button>  
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="card-category">Sub-Project List</p>
                      <button data-toggle="modal" data-target="#addProjectDetailsModal" data-dismiss="modal"
                        type="submit" class="btn btn-primary pull-right"><i class="material-icons"></i>Project Details
                      </button>  
                    </div>
                    
                    
                  </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-sucess">
                          <th></th>
                          <th>Title</th>
                          <th>Status</th>
                          <th>Due Date</th>
                          <th>Priority</th>
                          <th>Action</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="checkbox" value=""></td>
                          <td>Sub-Project Title</td>
                          <td><span class="badge badge-success">Done</span></td>
                          <td>March 3, 2021</td>
                          <td> <span class="badge badge-danger">High</span> </td>
                          <td>
                            <button class="btn btn-sm btn-info btnViewSubProject" style="padding:5px"><i class="material-icons">visibility</i></button>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" value=""></td>
                          <td>Sub-Project Title</td>
                          <td> <span class="badge badge-primary">In Progress</span> </td>
                          <td>March 3, 2021</td>
                          <td> <span class="badge badge-warning">Medium</span> </td>
                          <td>
                            <button class="btn btn-sm btn-info btnViewSubProject" style="padding:5px"><i class="material-icons">visibility</i></button>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" value=""></td>
                          <td>Sub-Project Title</td>
                          <td> <span class="badge badge-primary">In Progress</span> </td>
                          <td>March 3, 2021</td>
                          <td> <span class="badge badge-secondary">Low</span> </td>
                          <td>
                            <button class="btn btn-sm btn-info btnViewSubProject" style="padding:5px"><i class="material-icons">visibility</i></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
             <!-- END OF PROJECTS DATA TABLE -->


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

  
  <!-- MODALS -->
  <?php $this->load->view('modals/admin/projects_view_modals.php')?>

  <!-- FIXED PLUGINS -->
  <?php $this->load->view('includes/core_js_files.php')?>
  
  <!-- ADDED FUNCTIONS SCRIPTS -->
  <?php $this->load->view('includes/added_js_functions.php')?>
  
</body>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

<script>
$(document).ready(function(){    

  // View sub project
  $('.btnViewSubProject').on('click', function(){
      $('#editsubProjectModal').modal('show');
    })
  // End of view project

  // Update Sub-Project Status
  $('#updateProjectStatusForm').on('submit', function(e){
      e.preventDefault();
        $("#btnupdateProjectStatus").attr("disabled", true);

        // Confirmation
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, update it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $("#btnupdateProjectStatus").attr("disabled", false);
            $('#updateProjectStatusModal').modal('hide');
            showNotify('system_update_alt', 'You successfully update a project status', 'success', 'top', 'right');
          }
          else{
            $("#btnupdateProjectStatus").attr("disabled", false);
          }
          $("#btnupdateProjectStatus").attr("disabled", false);
        })
        // End of Confirmation
    })
  // End of Update Sub-Project Status

});
</script>

</html>