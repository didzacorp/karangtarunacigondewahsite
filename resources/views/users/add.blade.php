<section class="content">
  <div class="body_scroll">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-12">
          <h2>Add User</h2>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="zmdi zmdi-home"></i> Ggwpos</a></li>
            <li class="breadcrumb-item"><a href="{{ url('users') }}">Users</a></li>
            <li class="breadcrumb-item active">Add User</li>
          </ul>
          <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <!-- Vertical Layout -->
      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="header">
              {{-- <h2><strong>Vertical</strong> Layout</h2> --}}
            </div>
            <div class="body">
              <form id="form_save">
              {{-- <form id="form_save" method="POST" action="{{ url('users') }}"> --}}
                {{-- {{ csrf_field() }} --}}
                <div class="row">
                  <div class="col-md-3">
                    <label for="name">Name</label>
                    <div class="form-group form-float">
                      <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <label for="email">Email Address</label>
                    <div class="form-group form-float">
                      <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <label for="password">Password</label>
                    <div class="form-group form-float">
                      <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <label for="role">Role</label>
                    <div class="form-group">
                      <select class="form-control" id="role" name="role">
                        <option value="1">Cashier</option>
                        <option value="2">Manager</option>
                        <option value="3">Owner</option>
                      </select>
                    </div>
                  </div>
                </div>
                <button type="button" class="btn btn-warning waves-effect btn-sm" onclick="main('{{ url('users/main') }}', 'POST')"><i class="fa fa-arrow-left"></i> BACK</button>
                {{-- <button type="submit" class="btn btn-primary waves-effect btn-sm"><i class="fa fa-check"></i> SAVE</button> --}}
                <button type="button" class="btn btn-primary waves-effect btn-sm" onclick="save('{{ url('users') }}', 'POST')"><i class="fa fa-check"></i> SAVE</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- <script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/form-validation.js') }}"></script> --}}