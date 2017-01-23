<!-- ADD -->
<div class="modal fade" id="addNewPatient" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="favoritesModalLabel">Add Patient</h4>
      </div>
      <div class="modal-body">
				<div class="form-group has-feedback">
					<label>Full name:</label>
        	<input type="text" class="form-control" placeholder="Last Name">
					<input type="text" class="form-control" placeholder="First Name">
					<input type="text" class="form-control" placeholder="Middle Name">
				</div>
				<div class="form-group has-feedback">
					<label>Address:</label>
					<input type="text" class="form-control">
      	</div>
				<div class="form-group">
					<label>Birthday:</label>
					<input type="date" class="form-control">
      	</div>
				<div class="form-group has-feedback">
					<label>Gender:</label>
					<select class="form-control">
						<option value="1">Male</option>
						<option value="2">Female</option>
					</select>
      	</div>
				<div class="form-group has-feedback">
					<label>Contact #:</label>
					<input type="text" class="form-control">
      	</div>
				<div class="form-group has-feedback">
					<label>Email:</label>
					<input type="email" class="form-control">
				</div>
      </div>
      <div class="modal-footer">
				<span class="pull-right">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add</button>
        </span>
      </div>
    </div>
  </div>
</div>

<!-- EDIT -->
<div class="modal fade" id="editPatient" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="favoritesModalLabel">Edit Patient</h4>
      </div>
      <div class="modal-body">
				<div class="form-group has-feedback">
					<label>Full name:</label>
        	<input type="text" class="form-control" placeholder="Last Name" value="Spencir">
					<input type="text" class="form-control" placeholder="First Name" value="Mark">
					<input type="text" class="form-control" placeholder="Middle Name">
				</div>
				<div class="form-group has-feedback">
					<label>Address:</label>
					<input type="text" class="form-control" value="Bacolod City">
      	</div>
				<div class="form-group">
					<label>Birthday:</label>
					<input type="date" class="form-control" value="1990-11-01">
      	</div>
				<div class="form-group has-feedback">
					<label>Gender:</label>
					<select class="form-control">
						<option value="1">Male</option>
						<option value="2">Female</option>
					</select>
      	</div>
				<div class="form-group has-feedback">
					<label>Contact #:</label>
					<input type="text" class="form-control" value="+639098123344">
      	</div>
				<div class="form-group has-feedback">
					<label>Email:</label>
					<input type="email" class="form-control" value="mark@yahoo.com">
				</div>
      </div>
      <div class="modal-footer">
				<span class="pull-right">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Edit</button>
        </span>
      </div>
    </div>
  </div>
</div>

<!-- EDIT -->
<div class="modal fade" id="deletePatient" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="favoritesModalLabel">System:</h4>
      </div>
      <div class="modal-body">
				Do you want to delete Mark Spencir?
			</div>
			<div class="modal-footer">
				<span class="pull-right">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-danger">Delete</button>
				</span>
			</div>
    </div>
  </div>
</div>
