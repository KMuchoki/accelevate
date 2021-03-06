<div class="modal fade" id="add-work-experience">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('user.work-experience.add') }}" method="POST">
        @csrf
        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Add Work Experience</h4>
        </div>
        
        <div class="modal-body">
          <div class="row">
          
            <div class="col-sm-6">
              <div class="form-group">
                <label for="reference-1">From</label>
                <input type = "text" name="from" id="reference-1" required="" class="form-control datepicker" />
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-froup">
                <label for="reference-2">To</label>
                <input type = "text" name="to" id="reference-2" required="" class="form-control datepicker" />
              </div>
            </div>

          </div>
          
          <div class="row">
            
            <div class="col-sm-6">
              <div class="form-group">
                <label for="reference-3">Company</label>
                <input type = "text" name="company" id="reference-3" required="" class="form-control" />
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <label for="reference-4">Position</label>
                <input type = "text" name="position" id="reference-4" required="" class="form-control" />
              </div>
            </div>
          </div>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add Work Experience</button>
        </div>
      </form>
    </div>
  </div>
</div>