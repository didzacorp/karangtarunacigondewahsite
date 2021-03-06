<div class="modal-header">
  <h4 class="title" id="smallModalLabel">Edit Category</h4>
</div>
<div class="modal-body">
  <form id="form_save">
  	<div class="row">
  		<div class="col-md-7">
  			<label for="name">Name</label>
			  <div class="form-group">
			    <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{ $category->name }}">
			  </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-5">
  			<label for="level">Level</label>
			  <div class="form-group">
			    <select class="form-control" id="level" name="level">
			    	<option value="1" {{ $category->level === 1 ? 'selected' : '' }}>Level 1</option>
			    	<option value="2" {{ $category->level === 2 ? 'selected' : '' }}>Level 2</option>
			    	<option value="3" {{ $category->level === 3 ? 'selected' : '' }}>Level 3</option>
			    </select>
			  </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-5">
  			<label for="default">Default</label>
			  <div class="form-group">
			    <select class="form-control" id="default" name="default">
			    	<option value="1" {{ $category->default === 1 ? 'selected' : '' }}>Yes</option>
			    	<option value="2" {{ $category->default === 2 ? 'selected' : '' }}>No</option>
			    </select>
			  </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-12">
  			<label for="notes">Notes</label>
			  <div class="form-group">
			    <textarea rows="4" class="form-control no-resize" id="notes" name="notes" placeholder="Please type what you want...">{{ $category->notes }}</textarea>
			  </div>
  		</div>
  	</div>
  </form>
</div>
<div class="modal-footer mr-auto">
  <button type="button" class="btn btn-warning waves-effect btn-sm" data-dismiss="modal">CLOSE</button>
  <button type="button" class="btn btn-primary waves-effect btn-sm" onclick="save('{{ url('customer_category/'.$category->id) }}', 'POST', 'edit')">SAVE</button>
</div>