<!-- ADD NEW PROJECT  -->
<div id="newProjectModal" class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="newProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#4caf50">
              <p class="card-category" style="color:white">Creating New Project Proposal</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form id="newProjectForm" name="newProjectForm">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Title</label>
                          <input id="projectTitle" name="projectTitle" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Implementer</label>
                          <input id="projectImplementer" name="projectImplementer" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Target Group</label>
                          <input id="projectTargetGroup" name="projectTargetGroup" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cooperating Agencies (Optional)</label>
                          <input id="projectCooperatingAgencies" name="projectCooperatingAgencies" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label">Timeframe</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label">Date Start</label>
                          <input id="projectDateStart" name="projectDateStart" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label">Date End</label>
                          <input id="projectDateEnd" name="projectDateEnd" type="date" class="form-control">
                        </div>
                      </div>
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
                            <div class="row">
                            <!-- TABLE -->
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

                      
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                            <label class="bmd-label-floating">Impact Statement</label>
                            <textarea id="projectImpactStatement" name="projectImpactStatement" class="form-control" rows="8"></textarea>
                          </div>
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

    <!-- Edit project  -->
    <div id="editprojectModal" class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="editprojectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#ff9800">
              <p class="card-category" style="color:white">Updating Project</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form id="editprojectForm" name="editprojectForm">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label">Title</label>
                          <input id="editprojectTitle" name="editprojectTitle" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label">Implementer</label>
                          <input id="editprojectImplementer" name="editprojectImplementer" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label">Target Group</label>
                          <input id="editprojectTargetGroup" name="editprojectTargetGroup" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label">Cooperating Agencies (Optional)</label>
                          <input id="editprojectCooperatingAgencies" name="editprojectCooperatingAgencies" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label">Timeframe</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label">Date Start</label>
                          <input id="editprojectDateStart" name="editprojectDateStart" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label">Date End</label>
                          <input id="editprojectDateEnd" name="editprojectDateEnd" type="date" class="form-control">
                        </div>
                      </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="label">Financial Requirement</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <a class="btn btn-sm btn-info" data-toggle="collapse" href="#editlineItemBudget" 
                                    role="button" aria-expanded="false" 
                                    aria-controls="editlineItemBudget">Fill Line Item Budget
                                </a>
                            </div>
                        </div>
                    </div>
                        <div class="collapse multi-collapse" id="editlineItemBudget">
                            <div class="row">
                            <!-- TABLE -->
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

                      
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                            <label class="label">Impact Statement</label>
                            <textarea id="editprojectImpactStatement" name="editprojectImpactStatement" class="form-control" rows="8"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input id="btnUpdateProject" type="submit" value="update" class="btn btn-warning">
            </div>
            </form>
          </div>
        </div>
      </div>
    <!-- END OF EDIT PROJECT -->