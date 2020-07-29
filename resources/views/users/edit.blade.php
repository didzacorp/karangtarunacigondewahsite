{{-- @include('layouts.head') --}}
<section class="content">
  <div class="body_scroll">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-12">
          <h2>Edit User</h2>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="zmdi zmdi-home"></i> Ggwpos</a></li>
            <li class="breadcrumb-item"><a href="{{ url('users') }}">Users</a></li>
            <li class="breadcrumb-item active">Edit User</li>
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
                <div class="row">
                  <div class="col-md-3">
                    <label for="name">Name</label>
                    <div class="form-group">
                      <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{ $user->name }}" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <label for="email">Email Address</label>
                    <div class="form-group">
                      <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" value="{{ $user->email }}" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <label for="password">Password</label>
                    <div class="form-group">
                      <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <label for="role">Role</label>
                    <div class="form-group">
                      <select class="form-control" id="role" name="role">
                        <option value="1" {{ $user->role === 1 ? 'selected' : '' }}>Cashier</option>
                        <option value="2" {{ $user->role === 2 ? 'selected' : '' }}>Manager</option>
                        <option value="3" {{ $user->role === 3 ? 'selected' : '' }}>Owner</option>
                      </select>
                    </div>
                  </div>
                </div>
                <button type="button" class="btn btn-warning waves-effect btn-sm" onclick="main('{{ url('users/main') }}', 'POST')"><i class="fa fa-arrow-left"></i> BACK</button>
                <button type="button" class="btn btn-primary waves-effect btn-sm" onclick="save('{{ url('users/'.$user->id) }}', 'POST', 'edit')"><i class="fa fa-check"></i> SAVE</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- @include('layouts.script') --}}