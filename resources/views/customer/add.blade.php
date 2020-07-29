<section class="content">
  <div class="body_scroll">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-12">
          <h2>Add Customer</h2>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="zmdi zmdi-home"></i> Ggwpos</a></li>
            <li class="breadcrumb-item"><a href="{{ url('customer') }}">Customers</a></li>
            <li class="breadcrumb-item active">Add Customer</li>
          </ul>
          <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
        </div>
        {{-- <div class="col-lg-5 col-md-6 col-sm-12">
          <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
        </div> --}}
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
                      <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <label for="email">Email Address</label>
                    <div class="form-group">
                      <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <label for="phone">Phone Number</label>
                    <div class="input-group masked-input mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="zmdi zmdi-phone"></i></span>
                      </div>
                      <input type="text" class="form-control mobile-phone-number" id="phone" name="phone" placeholder="Ex: +00 (00) 000-000-000">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <label for="category">Customer Group</label>
                    <div class="form-group">
                      <select class="form-control" id="category" name="category">
                        @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="address">Address</label>
                    <div class="form-group">
                      <textarea rows="4" class="form-control no-resize" id="address" name="address" placeholder="Please type what you want..."></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="notes">Notes</label>
                    <div class="form-group">
                      <textarea rows="4" class="form-control no-resize" id="notes" name="notes" placeholder="Please type what you want..."></textarea>
                    </div>
                  </div>
                </div>
                <button type="button" class="btn btn-warning waves-effect btn-sm" onclick="main('{{ url('customer/main') }}', 'POST')"><i class="fa fa-arrow-left"></i> BACK</button>
                <button type="button" class="btn btn-primary waves-effect btn-sm" onclick="save('{{ url('customer') }}', 'POST')"><i class="fa fa-check"></i> SAVE</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
  var $demoMaskedInput = $('.masked-input');
  $demoMaskedInput.find('.mobile-phone-number').inputmask('+99 (99) 999-999-999', { placeholder: '+__ (___) ___-__-___' });
</script>