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
                      </thead>
                      <tbody>
                        
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
      <?php $this->load->view('includes/footer.php')?>

    </div>
    <!-- END OF MAIN CONTENT -->

  </div>
  <!-- END OF WRAPPER -->

  <!-- FIXED PLUGINS -->
  
  <!-- FIXED PLUGINS -->
  <?php $this->load->view('includes/core_js_files.php')?>
  
  <!-- MODALS -->
  <?php $this->load->view('modals/user/projects_newProjectModal.php')?>

  <!-- END OF MODALS -->

</body>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

<script>


</script>

</html>