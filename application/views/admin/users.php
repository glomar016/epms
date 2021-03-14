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
                      <h3 class="card-title pull-left">Manage User</h3>
                      <button data-toggle="modal" data-target="#newProjectModal" data-dismiss="modal"
                        type="submit" class="btn btn-success pull-right"><i class="material-icons">add</i> Add User
                      </button>  
                    </div>
                    <p class="card-category"> List of User</p>
                  </div>
                <div class="card-body">
                  <div class="table-responsive-data2">
                    <table id="projectsTable" class="table table-striped " style="width:100%;">
                      <thead class=" text-sucess">
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Type</th>
                          <th>Action</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td> <img src="<?php echo base_url('resources/images/avatar_0120.jpg'); ?>" width="30" height="30" style="border-radius: 50%;" />
                          User
                          </td>
                          <td>testemail@gmail.com</td>
                          <td>User</td>
                          <td>
                            <button class="btn btn-sm btn-info btnViewProject"  style="padding:5px"><i class="material-icons">visibility</i></button>
                            <button class="btn btn-sm btn-warning btnEditProject" style="padding:5px"><i class="material-icons">edit</i></button>
                            <button class="btn btn-sm btn-danger btnDeleteProject" style="padding:5px"><i class="material-icons">delete</i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td> <img src="<?php echo base_url('resources/images/avatar_0120.jpg'); ?>" width="30" height="30" style="border-radius: 50%;" />
                          Admin
                          </td>
                          <td>testemail@gmail.com</td>
                          <td>Admin</td>
                          <td>
                            <button class="btn btn-sm btn-info btnViewProject"  style="padding:5px"><i class="material-icons">visibility</i></button>
                            <button class="btn btn-sm btn-warning btnEditProject" style="padding:5px"><i class="material-icons">edit</i></button>
                            <button class="btn btn-sm btn-danger btnDeleteProject" style="padding:5px"><i class="material-icons">delete</i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td> <img src="<?php echo base_url('resources/images/avatar_0120.jpg'); ?>" width="30" height="30" style="border-radius: 50%;" />
                          Chief
                          </td>
                          <td>testemail@gmail.com</td>
                          <td>Chief</td>
                          <td>
                            <button class="btn btn-sm btn-info btnViewProject"  style="padding:5px"><i class="material-icons">visibility</i></button>
                            <button class="btn btn-sm btn-warning btnEditProject" style="padding:5px"><i class="material-icons">edit</i></button>
                            <button class="btn btn-sm btn-danger btnDeleteProject" style="padding:5px"><i class="material-icons">delete</i></button>
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
  <?php $this->load->view('includes/core_js_files.php')?>
  
  <!-- ADDED FUNCTIONS SCRIPTS -->
  <?php $this->load->view('includes/added_js_functions.php')?>

  <!-- ADD NEW PROJECT  -->
  <div id="newProjectModal" class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="newProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#4caf50">
              <p class="card-category" style="color:white">Add User</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form id="newProjectForm" name="newProjectForm">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Name</label>
                        <input id="implementerName" name="implementerName" type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Email</label>
                        <input id="implementerName" name="implementerName" type="email" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Type</label>
                          <select class="form-control" aria-label="Default select example">
                            <option value="1">User</option>
                            <option value="2">Chief</option>
                            <option value="3">Admin</option>
                          </select>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input id="btnNewProjectModal" type="submit" value="submit" class="btn btn-success">
            </div>
            </form>
          </div>
        </div>
      </div>
    <!-- END OF ADD NEW PROJECT -->
  
</body>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>