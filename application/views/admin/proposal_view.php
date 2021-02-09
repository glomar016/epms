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
                  <div class="card-header card-header-primary">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title pull-left">Project Title</h3>
                      <button data-toggle="modal" data-target="#editProjectStatus" data-dismiss="modal"
                        type="submit" class="btn btn-md btn-success pull-right"><i class="material-icons"></i>Update Project Status
                      </button>  
                    </div>
                    <button data-toggle="modal" data-target="#editProjectDetailsModal" data-dismiss="modal"
                        type="submit" class="btn btn-md btn-info pull-right"><i class="material-icons"></i>Project Details
                    </button>  
                    <div class="card-header" style="padding: 0.0rem 1.25rem">
                      <h6 class="card-category">Implementer: </h6>
                      <h6 class="card-category">Target Group: </h6>
                      <h6 class="card-category">Cooperating Agencies: </h6>
                      <h6 class="card-category">Timeframe: </h6>
                    </div>
                  </div>
                <div class="card-body">
                  
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                      <h4 class="card-category">List of Sub-Projects</h4>
                    </div>
                  </div>
                  <div class="table-responsive-data2">
                    <table id="projectsTableView" class="table table-striped">
                      <thead class=" text-sucess">
                          <th></th>
                          <th>Title</th>
                          <th>Status</th>
                          <th>Due Date</th>
                          <th>Action</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="checkbox" checked value="" disabled></td>
                          <td>Sub-Project Title</td>
                          <td><span class="badge badge-success">Done</span></td>
                          <td>March 3, 2021</td>
                          <td>
                            <button class="btn btn-sm btn-success btnViewSubProject" style="padding:5px"><i class="material-icons">visibility</i> Details</button>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" value="" disabled></td>
                          <td>Sub-Project Title</td>
                          <td> <span class="badge badge-primary">In Progress</span> </td>
                          <td>March 3, 2021</td>
                          <td>
                            <button class="btn btn-sm btn-success btnViewSubProject" style="padding:5px"><i class="material-icons">visibility</i> Details</button>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" value="" disabled></td>
                          <td>Sub-Project Title</td>
                          <td> <span class="badge badge-primary">In Progress</span> </td>
                          <td>March 3, 2021</td>
                          <td>
                            <button class="btn btn-sm btn-success btnViewSubProject" style="padding:5px"><i class="material-icons">visibility</i> Details</button>
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
  <?php $this->load->view('modals/admin/proposal_view_modals.php')?>

  <!-- FIXED PLUGINS -->
  <?php $this->load->view('includes/core_js_files.php')?>
  
  <!-- ADDED FUNCTIONS SCRIPTS -->
  <?php $this->load->view('includes/added_js_functions.php')?>
  
</body>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

<script>
$(document).ready(function(){    

  function loadtable(){
        projectsTableView = $('#projectsTableView').DataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": true,
          "bInfo": false,
          "bAutoWidth": false
        })
        
    }

    loadtable()

  // Adding project details
  $('#addProjectDetailsForm').on('submit', function(e){
        e.preventDefault();
        $("#btnAddProjectDetails").attr("disabled", true);

        // Confirmation
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, submit it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $("#btnAddProjectDetails").attr("disabled", false);
            $('#addProjectDetailsModal').modal('hide');
            showNotify('add_alert', 'You successfully updated project details', 'success', 'top', 'right');
          }
          else{
            $("#btnAddProjectDetails").attr("disabled", false);
          }
          $("#btnAddProjectDetails").attr("disabled", false);
        })
        // End of Confirmation

    });
  // End of adding project details

  // Adding sub-project
  $('#addsubProjectForm').on('submit', function(e){
        e.preventDefault();
        $("#btnaddSubProject").attr("disabled", true);

        // Confirmation
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, submit it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $("#btnaddSubProject").attr("disabled", false);
            $('#addsubProjectModal').modal('hide');
            showNotify('add_alert', 'You successfully updated project details', 'success', 'top', 'right');
          }
          else{
            $("#btnaddSubProject").attr("disabled", false);
          }
          $("#btnaddSubProject").attr("disabled", false);
        })
        // End of Confirmation

    });
  // End of adding sub-project

  // View sub project
  $('.btnViewSubProject').on('click', function(){
      $('#editsubProjectModal').modal('show');
    })
  // End of view project

  // Update Sub-Project
  $('#editsubProjectForm').on('submit', function(e){
      e.preventDefault();
        $("#btnupdateSubProject").attr("disabled", true);

        // Confirmation
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, update it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $("#btnupdateSubProject").attr("disabled", false);
            $('#editsubProjectModal').modal('hide');
            showNotify('system_update_alt', 'You successfully update your sub-project', 'warning', 'top', 'right');
          }
          else{
            $("#btnupdateSubProject").attr("disabled", false);
          }
          $("#btnupdateSubProject").attr("disabled", false);
        })
        // End of Confirmation
    })
  // End of Update Sub-Project 

  // Delete sub-project
  $('.btnDeleteSubProject').on('click', function(){
      // Confirmation
      Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'error',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            showNotify('delete', 'You successfully deleted your sub-project', 'danger', 'top', 'right');
          }
        })
        // End of Confirmation
    })
    // End of sub-delete project

});
</script>

</html>