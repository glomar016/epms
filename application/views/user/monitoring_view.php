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
                  <div class="card-header card-header-warning">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title pull-left">Project Title</h3>
                      <button data-toggle="modal" data-target="#viewProjectDetailsModal" data-dismiss="modal"
                        type="submit" class="btn btn-md btn-info pull-right"><i class="material-icons"></i>Project Details
                      </button>  
                    </div>
                    
                    <button data-toggle="modal" data-target="#viewProjectStatus" data-dismiss="modal"
                          type="submit" class="btn btn-md btn-success pull-right"><i class="material-icons"></i>Project Status
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
                            <button class="btn btn-sm btn-success btnViewSubProject" style="padding:5px"><i class="material-icons">visibility</i></button>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" value="" disabled></td>
                          <td>Sub-Project Title</td>
                          <td> <span class="badge badge-primary">In Progress</span> </td>
                          <td>March 3, 2021</td>
                          <td>
                            <button class="btn btn-sm btn-success btnViewSubProject" style="padding:5px"><i class="material-icons">visibility</i></button>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" value="" disabled></td>
                          <td>Sub-Project Title</td>
                          <td> <span class="badge badge-primary">In Progress</span> </td>
                          <td>March 3, 2021</td>
                          <td>
                            <button class="btn btn-sm btn-success btnViewSubProject" style="padding:5px"><i class="material-icons">visibility</i></button>
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
  <!-- VIEW PROJECT DETAILS  -->
  <div id="viewProjectDetailsModal" class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="viewProjectDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#00bcd4">
              <p class="card-category" style="color:white">Project Title Details</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="viewProjectDetailsForm" name="viewProjectDetailsForm">
                    <!-- FILL LINE ITEM BUDGET -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="label">Financial Requirement</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <a class="btn btn-sm btn-info" data-toggle="collapse" href="#lineItemBudget" 
                                    role="button" aria-expanded="false" 
                                    aria-controls="lineItemBudget">Line Item Budget
                                </a>
                            </div>
                        </div>
                    </div>                
                    <div class="collapse multi-collapse" id="lineItemBudget">
                        <!-- TABLE -->
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Budget Item</label>
                            </div>
                            <div class="col-md-3">
                                <label class="label">Particulars/Item</label>
                            </div>
                            <div class="col-md-3">
                                <label class="label">Estimated Cost</label>
                            </div>
                            <div class="col-md-3">
                                <label class="label">Total</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Operating Cost</label>
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Supplies</label>
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Communication</label>
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Documentation</label>
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Etc</label>
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Travel Costs and Food Expense (if any)</label>
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Fare</label>
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Food Expense</label>
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Etc</label>
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Others</label>
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">TOTAL BUDGET</label>
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                        </div>
                        <!-- END OF TABLE -->
                    </div>
                <!-- END OF FILL LINE ITEM BUDGET -->
                <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="label">Evaluation Plan</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <a class="btn btn-sm btn-info" data-toggle="collapse" href="#evaluationPlan" 
                                    role="button" aria-expanded="false" 
                                    aria-controls="evaluationPlan">Evaluation Plan
                                </a>
                            </div>
                        </div>
                    </div>                
                    <div class="collapse multi-collapse" id="evaluationPlan">
                        <!-- TABLE -->
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Outcome</label>
                            </div>
                            <div class="col-md-3">
                                <label class="label">Indicator</label>
                            </div>
                            <div class="col-md-3">
                                <label class="label">Data Collection Method</label>
                            </div>
                            <div class="col-md-3">
                                <label class="label">Frequency</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input disabled type="text" class="form-control">
                            </div>
                        </div>
                        <!-- END OF TABLE -->
                    </div>
                    
                    <!-- <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label">Files Attached</label>
                        </div>
                      </div>
                    </div>
                    <input disabled type="file"  name=""> -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <!-- <input disabled id="btnAddProjectDetails" type="submit" value="update" class="btn btn-warning"> -->
            </div>
            </form>
          </div>
        </div>
      </div>
    <!-- END OF VIEW PROJECT DETAILS -->

    
    <!-- VIEW PROJECT STATUS -->
    <div id="viewProjectStatus" class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="viewProjectStatusFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#ff9800">
              <p class="card-category" style="color:white">Project Title Status</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="viewProjectStatusForm" name="viewProjectStatusForm">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label class="label">Project Status</label>
                            <select disabled class="form-control">
                                <option selected value="Pending">Pending</option>
                                <option value="In Process">In Process</option>
                                <option value="Approved">Approved</option>
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                            <label class="label">Remarks</label>
                            
                        </div>
                      </div>
                    </div>
                    <!-- <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label">Files Attached</label>
                        </div>
                      </div>
                    </div>
                    <input type="file"  name=""> -->
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <input id="btnaddSubProject" type="submit" value="submit" class="btn btn-warning"> -->
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    <!-- END OF VIEW PROJECT STATUS -->


    <!-- VIEW SUB PROJECT  -->
    <div id="viewsubProjectModal" class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="viewsubProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#4caf50">
              <p class="card-category" style="color:white">Sub-Project Title Details</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="viewsubProjectForm" name="viewsubProjectForm">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label">Sub-Project Title</label>
                          <input disabled  name="" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label">Due Date</label>
                          <input disabled  name="" type="date" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                            <label class="label">Sub-Project Details</label>
                            <textarea disabled name="" class="form-control" rows="8"></textarea>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label">Files Attached</label>
                        </div>
                      </div>
                    </div>
                    <input disabled type="file"  name=""> -->
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <input disabled id="btnupdateSubProject" type="submit" value="update" class="btn btn-warning"> -->
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    <!-- END OF view SUBPROJECT -->

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
      $('#viewsubProjectModal').modal('show');
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