@include('layouts.head')
<section class="content">
  <div class="body_scroll">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-12">
          <h2>Add Product</h2>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="zmdi zmdi-home"></i> Ggwpos</a></li>
            <li class="breadcrumb-item"><a href="#" onclick="main('{{ url('product/main') }}', 'POST')">Products</a></li>
            <li class="breadcrumb-item active">Add Product</li>
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
                  <div class="col-md-3">
                    <label>Category</label>
                    <div class="input-group masked-input mb-3">
                      <select class="form-control">
                        <option value="1">Men</option>
                        <option value="2">Women</option>
                        <option value="3">Kids</option>
                      </select>
                      <a href="#">
                        <div class="input-group-prepend h-100">
                          <span class="input-group-text rounded-0"><i class="fa fa-plus"></i></span>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label>Group</label>
                    <div class="input-group masked-input mb-3">
                      <select class="form-control">
                        <option value="1">Shirt</option>
                        <option value="2">T-Shirt</option>
                        <option value="3">Jeans</option>
                      </select>
                      <a href="#">
                        <div class="input-group-prepend h-100">
                          <span class="input-group-text rounded-0"><i class="fa fa-plus"></i></span>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label>Unit</label>
                    <div class="input-group masked-input mb-3">
                      <select class="form-control">
                        <option value="1">Kilogram</option>
                        <option value="2">Litre</option>
                        <option value="3">Pieces</option>
                      </select>
                      <a href="#">
                        <div class="input-group-prepend h-100">
                          <span class="input-group-text rounded-0"><i class="fa fa-plus"></i></span>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label>Brand</label>
                    <div class="input-group masked-input mb-3">
                      <select class="form-control">
                        <option value="1">Garsel</option>
                        <option value="2">Gucci</option>
                        <option value="3">Dunhill</option>
                      </select>
                      <a href="#">
                        <div class="input-group-prepend h-100">
                          <span class="input-group-text rounded-0"><i class="fa fa-plus"></i></span>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label>Tax</label>
                    <div class="input-group masked-input mb-3">
                      <select class="form-control">
                        <option value="1">No Tax</option>
                        <option value="2">5% Tax</option>
                        <option value="3">15% Tax</option>
                      </select>
                      <a href="#">
                        <div class="input-group-prepend h-100">
                          <span class="input-group-text rounded-0"><i class="fa fa-plus"></i></span>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label>Purchase Price</label>
                    <div class="input-group masked-input mb-3">
                      <input type="text" id="purchase" name="purchase" class="form-control money-dollar" placeholder="Rp. __.___.___.___">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label>Selling Price</label>
                    <div class="form-group masked-input">
                      <input type="text" id="selling" name="selling" class="form-control money-dollar" placeholder="Rp. __.___.___.___">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label>SKU</label>
                    <div class="form-group">
                      <input type="text" id="sku" name="sku" class="form-control" placeholder="SKU">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="role">Image</label>
                    <div class="form-group">
                      <input type="file" class="dropify" id="image" name="image[]">
                    </div>
                  </div>
                </div>
                <button type="button" class="btn btn-warning waves-effect btn-sm" onclick="main('{{ url('product/main') }}', 'POST')"><i class="fa fa-arrow-left"></i> BACK</button>
                <button type="button" class="btn btn-primary waves-effect btn-sm" onclick="save('{{ url('product') }}', 'POST')"><i class="fa fa-check"></i> SAVE</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@include('layouts.script')