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
    <?php $this->load->view('includes/sidebar.php'); ?>
    
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
                      <h3 class="card-title pull-left">Projects</h3>
                      <button data-toggle="modal" data-target="#newProjectModal" data-dismiss="modal"
                        type="submit" class="btn btn-success pull-right"><i class="material-icons">add</i> New Project
                      </button>  
                    </div>
                    <p class="card-category"> List of Project Proposal</p>
                  </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-sucess">
                          <th>Title</th>
                          <th>Implementer</th>
                          <th>Target Group</th>
                          <th>Date Start</th>
                          <th>Status</th>
                          <th>Action</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Test Title</td>
                          <td>Test Implementer</td>
                          <td>Test Target Group</td>
                          <td>March 3, 2021</td>
                          <td><span class="badge badge-success">Approved</span></td>
                          <td>
                            <button class="btn btn-sm btn-warning" style="padding:5px"><i class="material-icons">edit</i></button>
                            <button class="btn btn-sm btn-danger" style="padding:5px"><i class="material-icons">delete</i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>Test Title 2</td>
                          <td>Test Implementer 2</td>
                          <td>Test Target Group 2</td>
                          <td>Febuary 26, 2021</td>
                          <td><span class="badge badge-warning">Pending</span></td>
                          <td>
                            <button class="btn btn-sm btn-warning" style="padding:5px"><i class="material-icons">edit</i></button>
                            <button class="btn btn-sm btn-danger" style="padding:5px"><i class="material-icons">delete</i></button>
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

  <!-- FIXED PLUGINS -->
  
  <!-- FIXED PLUGINS -->
  <?php $this->load->view('includes/core_js_files.php')?>
  
  <!-- MODALS -->
  <?php $this->load->view('modals/user/projects_modals.php')?>

</body>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

<!-- ADDED FUNCTIONS SCRIPTS -->
<?php $this->load->view('includes/added_js_functions.php')?>

<script>


  $(document).ready(function(){    

    // Creating new project
    $('#newProjectForm').on('submit', function(e){
        e.preventDefault();
        $("#btnNewProjectModal").attr("disabled", true);

        // Confirmation
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, submit it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $("#btnNewProjectModal").attr("disabled", false);
            $('#newProjectModal').modal('hide');
            showNotify('add_alert', 'You successfully submitted a proposal project', 'success', 'top', 'right');
          }
          else{
            $("#btnNewProjectModal").attr("disabled", false);
          }
          $("#btnNewProjectModal").attr("disabled", false);
        })
        // End of Confirmation

    });
    // End of Creating new project
    
  });
</script>

</html>