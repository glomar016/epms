<!-- ADD PROJECT DETAILS  -->
<div id="addProjectDetailsModal" class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="addProjectDetailsLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#4caf50">
              <p class="card-category" style="color:white">Project Title Details</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="addProjectDetailsForm" name="addProjectDetailsForm">
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
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Supplies</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Communication</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Documentation</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Etc</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Travel Costs and Food Expense (if any)</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Fare</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Food Expense</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Etc</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Others</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">TOTAL BUDGET</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
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
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <!-- END OF TABLE -->
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label">Files Attached</label>
                        </div>
                      </div>
                    </div>
                    <input type="file"  name="">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input id="btnAddProjectDetails" type="submit" value="update" class="btn btn-warning">
            </div>
            </form>
          </div>
        </div>
      </div>
    <!-- END OF ADD PROJECT DETAILS -->


    <!-- EDIT PROJECT DETAILS  -->
    <div id="editProjectDetailsModal" class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="editProjectDetailsLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#ffeb3b">
              <p class="card-category" style="color:white">Project Title Details</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="editProjectDetailsForm" name="editProjectDetailsForm">
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
                                    aria-controls="lineItemBudget">Fill Line Item Budget
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
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Supplies</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Communication</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Documentation</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Etc</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Travel Costs and Food Expense (if any)</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Fare</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Food Expense</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Etc</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">Others</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="label">TOTAL BUDGET</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
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
                                    aria-controls="evaluationPlan">Fill Evaluation Plan
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
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <!-- END OF TABLE -->
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input id="btnUpdateProjectDetails" type="submit" value="submit" class="btn btn-success">
            </div>
            </form>
          </div>
        </div>
      </div>
    <!-- END OF EDIT PROJECT DETAILS -->

    <!-- ADD SUB PROJECT  -->
    <div id="addsubProjectModal" class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="addsubProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#4caf50">
              <p class="card-category" style="color:white">New Sub-Project</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="addsubProjectForm" name="addsubProjectForm">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label">Sub-Project Title</label>
                          <input  name="" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label">Due Date</label>
                          <input  name="" type="date" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                            <label class="label">Sub-Project Details</label>
                            <textarea  name="" class="form-control" rows="8"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label">Files Attached</label>
                        </div>
                      </div>
                    </div>
                    <input type="file"  name="">
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input id="btnaddSubProject" type="submit" value="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    <!-- END OF ADD SUBPROJECT -->

    <!-- Edit SUB PROJECT  -->
    <div id="editsubProjectModal" class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="editsubProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#4caf50">
              <p class="card-category" style="color:white">Sub-Project Title Details</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="editsubProjectForm" name="editsubProjectForm">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label">Sub-Project Title</label>
                          <input  name="" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label">Due Date</label>
                          <input  name="" type="date" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                            <label class="label">Sub-Project Details</label>
                            <textarea  name="" class="form-control" rows="8"></textarea>
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
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    <!-- END OF EDIT SUBPROJECT -->

    <!-- Edit SUB PROJECT EVALUATION -->
    <div id="editsubProjectEvaluationModal" class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="editsubProjectEvaluationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#00bcd4">
              <p class="card-category" style="color:white">Sub-Project Title</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="editsubProjectEvaluationForm" name="editsubProjectEvaluationForm">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                            <label class="label">Evaluation</label>
                            <textarea  name="" class="form-control" rows="12"></textarea>
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
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    <!-- END OF EDIT SUBPROJECT EVALUATION  -->

    <!-- Edit PROJECT EVALUATION -->
    <div id="editProjectEvaluationModal" class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="editProjectEvaluationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#00bcd4">
              <p class="card-category" style="color:white">Sub-Project Title</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="editProjectEvaluationForm" name="editProjectEvaluationForm">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                            <label class="label">Evaluation</label>
                            <textarea  name="" class="form-control" rows="12"></textarea>
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
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    <!-- END OF EDIT PROJECT EVALUATION  -->