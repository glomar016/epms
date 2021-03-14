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
    <?php $this->load->view('includes/chief/sidebar.php'); ?>
    
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
                      <button data-toggle="modal" data-target="#viewProjectDetailsModal" data-dismiss="modal"
                        type="submit" class="btn btn-md btn-info pull-right"><i class="material-icons"></i>Project Details
                      </button>  
                    </div>
                    <button data-toggle="modal" data-target="#editProjectStatusModal" data-dismiss="modal"
                        type="submit" class="btn btn-md btn-warning pull-right"><i class="material-icons"></i>Update Project Status
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
                          <th>Title</th>
                          <th>Status</th>
                          <th>Due Date</th>
                          <th>Action</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Sub-Project Title</td>
                          <td><span class="badge badge-success">Done</span></td>
                          <td>March 3, 2021</td>
                          <td>
                            <button class="btn btn-sm btn-success btnViewSubProject" style="padding:5px"><i class="material-icons">visibility</i></button>
                            <button class="btn btn-sm btn-primary btnAddSubProjectRemarks" style="padding:5px"><i class="material-icons">edit</i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>Sub-Project Title</td>
                          <td> <span class="badge badge-primary">In Progress</span> </td>
                          <td>March 3, 2021</td>
                          <td>
                          <button class="btn btn-sm btn-success btnViewSubProject" style="padding:5px"><i class="material-icons">visibility</i></button>
                          <button class="btn btn-sm btn-primary btnAddSubProjectRemarks" style="padding:5px"><i class="material-icons">edit</i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>Sub-Project Title</td>
                          <td> <span class="badge badge-primary">In Progress</span> </td>
                          <td>March 3, 2021</td>
                          <td>
                          <button class="btn btn-sm btn-success btnViewSubProject" style="padding:5px"><i class="material-icons">visibility</i></button>
                          <button class="btn btn-sm btn-primary btnAddSubProjectRemarks" style="padding:5px"><i class="material-icons">edit</i></button>
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

    <!-- EDIT PROJECT STATUS -->
    <div id="editProjectStatusModal" class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="editProjectStatusModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#ff9800">
              <p class="card-category" style="color:white">Project Title Status</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="editProjectStatusForm" name="editProjectStatusForm">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label class="label">Project Status</label>
                            <select id="projectStatus" class="form-control">
                                <option selected value=""></option>
                                <option value="Pending">Pending</option>
                                <option value="In Process">In Process</option>
                                <option value="Approved">Approved</option>
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div id="projectStatusRemarks" class="form-group">
                            
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
                        <input id="btnUpdateStatus" type="submit" value="submit" class="btn btn-warning">
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    <!-- END OF EDIT PROJECT STATUS -->

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

    <!-- ADD SUB PROJECT REMARKS -->
    <div id="addSubProjectRemarksModal" class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="addSubProjectRemarksModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#9c27b0">
              <p class="card-category" style="color:white">Sub-Project Remarks</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="addSubProjectRemarksForm" name="addSubProjectRemarksForm">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                            <label class="label">Sub-Project Remarks</label>
                            <textarea name="" class="form-control" rows="8"></textarea>
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
                        <input id="btnAddSubProjectRemarks" type="submit" value="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    <!-- END OF view SUBPROJECT REMARKS -->

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


    // Project Status Form Change
  $('#projectStatus').on('change', function(){
    var selected_option = $('#projectStatus option:selected').val();
    console.log(selected_option)
    if(selected_option == "Approved"){
      var projectStatusRemarks = `<label class="label">Presentation Schedule</label>
                                  <input name="" type="datetime-local" class="form-control">`
      $('#projectStatusRemarks').html(projectStatusRemarks)
    }
    else if(selected_option == "Pending" || selected_option == "In Process"){
      var projectStatusRemarks = `<label class="label">Remarks</label>
                              <textarea  name="" class="form-control" rows="8"></textarea>`
      $('#projectStatusRemarks').html(projectStatusRemarks)
    }
  })


  // View sub project
  $('.btnAddSubProjectRemarks').on('click', function(){
      $('#addSubProjectRemarksModal').modal('show');
  })
  // End of view project

  // View sub project
  $('.btnViewSubProject').on('click', function(){
      $('#viewsubProjectModal').modal('show');
  })
  // End of view project

  // Update Project Status
  $('#editProjectStatusForm').on('submit', function(e){
      e.preventDefault();
        $("#btnUpdateStatus").attr("disabled", true);

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
            $('#editProjectStatusModal').modal('hide');
            showNotify('system_update_alt', 'You successfully update your project status', 'warning', 'top', 'right');
          }
          else{
            $("#btnUpdateStatus").attr("disabled", false);
          }
          $("#btnUpdateStatus").attr("disabled", false);
        })
        // End of Confirmation
    })
  // End of Update Project Status 

  // Update Project Status
  $('#addSubProjectRemarksForm').on('submit', function(e){
      e.preventDefault();
        $("#btnUpdateStatus").attr("disabled", true);

        // Confirmation
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, submit it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $("#btnAddSubProjectRemarks").attr("disabled", false);
            $('#addSubProjectRemarksModal').modal('hide');
            showNotify('system_update_alt', 'You successfully add a sub-project remarks', 'success', 'top', 'right');
          }
          else{
            $("#btnAddSubProjectRemarks").attr("disabled", false);
          }
          $("#btnAddSubProjectRemarks").attr("disabled", false);
        })
        // End of Confirmation
    })
  // End of Update Project Status 


});
</script>

</html>