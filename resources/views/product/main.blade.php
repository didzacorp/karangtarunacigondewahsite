{{-- @include('layouts.head') --}}
<section class="content">
  <div class="body_scroll">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-12">
          <h2>Products</h2>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Ggwpos</a></li>
            {{-- <li class="breadcrumb-item"><a href="javascript:void(0);">Components</a></li> --}}
            <li class="breadcrumb-item active">Products</li>
          </ul>
          <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
        </div>
        {{-- <div class="col-lg-5 col-md-6 col-sm-12">
          <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
        </div> --}}
      </div>
    </div>

    <div class="container-fluid">
      <!-- Example Tab -->
      <div class="row clearfix">
        <div class="col-sm-12">
          <div class="card">
            <div class="header">
              <h2><strong>Products</strong></h2>
            </div>
            <div class="body">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs p-0 mb-3" id="myTab">
                <li class="nav-item"><a class="nav-link border-top-0 border-left-0 border-right-0 rounded-0 active" data-toggle="tab" href="#products">Products</a></li>
                <li class="nav-item"><a class="nav-link border-top-0 border-left-0 border-right-0 rounded-0" data-toggle="tab" href="#categories">Categories</a></li>
                <li class="nav-item"><a class="nav-link border-top-0 border-left-0 border-right-0 rounded-0" data-toggle="tab" href="#brands">Brands</a></li>
                <li class="nav-item"><a class="nav-link border-top-0 border-left-0 border-right-0 rounded-0" data-toggle="tab" href="#groups">Groups</a></li>
                <li class="nav-item"><a class="nav-link border-top-0 border-left-0 border-right-0 rounded-0" data-toggle="tab" href="#units">Units</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane in active" id="products">
                  <button type="button" class="btn btn-danger btn-sm pull-right waves-effect" onclick="destroy('{{ url('product') }}', 'DELETE')"><i class="fa fa-trash"></i> Delete</button>
                  <button type="button" class="btn btn-warning btn-sm pull-right waves-effect" onclick="edit('{{ url('product') }}', 'GET')"><i class="fa fa-pencil"></i> Edit</button>
                  <button type="button" class="btn btn-primary btn-sm pull-right waves-effect" onclick="add('{{ url('product/create') }}', 'GET')"><i class="fa fa-plus"></i> Add</button>
                  <div class="table-responsive">
                    <table class="table table-hover table-striped">
                      <thead>
                        <tr>
                          <th style="width: 1%;">#</th>
                          <th style="width: 1%;">
                            <div class="checkbox" style="margin-top: -2.3rem!important">
                              <input id="select-all" name="input[]" type="checkbox" value="">
                              <label for="select-all"></label>
                            </div>
                          </th>
                          <th>NAME</th>
                          <th>CATEGORY</th>
                          <th>GROUP</th>
                          <th>UNIT</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="align-middle">1</td>
                          <td>
                            <div class="checkbox" style="margin-top: -1rem!important">
                              <input id="check1" name="checkbox" type="checkbox" value="1">
                              <label for="check1"></label>
                            </div>
                          </td>
                          <td class="align-middle">Mark</td>
                          <td class="align-middle">Otto</td>
                          <td class="align-middle">@mdo</td>
                          <td class="align-middle">082</td>
                        </tr>
                        <tr>
                          <td class="align-middle">2</td>
                          <td>
                            <div class="checkbox" style="margin-top: -1rem!important">
                              <input id="check2" name="checkbox" type="checkbox" value="2">
                              <label for="check2"></label>
                            </div>
                          </td>
                          <td class="align-middle">Mark</td>
                          <td class="align-middle">Otto</td>
                          <td class="align-middle">@mdo</td>
                          <td class="align-middle">082</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="categories">
                  <button type="button" class="btn btn-danger btn-sm pull-right waves-effect" onclick="destroy('{{ url('product_category') }}', 'DELETE')"><i class="fa fa-trash"></i> Delete</button>
                  <button type="button" class="btn btn-warning btn-sm pull-right waves-effect" onclick="editModal('{{ url('product_category') }}', 'category_c')"><i class="fa fa-pencil"></i> Edit</button>
                  <button type="button" class="btn btn-primary btn-sm pull-right waves-effect" onclick="addModal('{{ url('product_category/create') }}')"><i class="fa fa-plus"></i> Add</button>
                  <div class="table-responsive">
                    <table class="table table-hover table-striped">
                      <thead>
                        <tr>
                          <th style="width: 1%;">#</th>
                          <th style="width: 1%;">
                            <div class="checkbox" style="margin-top: -2.3rem!important">
                              <input id="select-all" name="input[]" type="checkbox" value="">
                              <label for="select-all"></label>
                            </div>
                          </th>
                          <th>NAME</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="align-middle">1</td>
                          <td>
                            <div class="checkbox" style="margin-top: -1rem!important">
                              <input id="category_c1" name="category_c" type="checkbox" value="1">
                              <label for="category_c1"></label>
                            </div>
                          </td>
                          <td class="align-middle">Men</td>
                        </tr>
                        <tr>
                          <td class="align-middle">2</td>
                          <td>
                            <div class="checkbox" style="margin-top: -1rem!important">
                              <input id="category_c2" name="category_c" type="checkbox" value="2">
                              <label for="category_c2"></label>
                            </div>
                          </td>
                          <td class="align-middle">Women</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="brands">
                  <button type="button" class="btn btn-danger btn-sm pull-right waves-effect" onclick="destroy('{{ url('product_brand') }}', 'DELETE')"><i class="fa fa-trash"></i> Delete</button>
                  <button type="button" class="btn btn-warning btn-sm pull-right waves-effect" onclick="editModal('{{ url('product_brand') }}', 'brand_c')"><i class="fa fa-pencil"></i> Edit</button>
                  <button type="button" class="btn btn-primary btn-sm pull-right waves-effect" onclick="addModal('{{ url('product_brand/create') }}')"><i class="fa fa-plus"></i> Add</button>
                  <div class="table-responsive">
                    <table class="table table-hover table-striped">
                      <thead>
                        <tr>
                          <th style="width: 1%;">#</th>
                          <th style="width: 1%;">
                            <div class="checkbox" style="margin-top: -2.3rem!important">
                              <input id="select-all" name="input[]" type="checkbox" value="">
                              <label for="select-all"></label>
                            </div>
                          </th>
                          <th>NAME</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="align-middle">1</td>
                          <td>
                            <div class="checkbox" style="margin-top: -1rem!important">
                              <input id="brand_c1" name="brand_c" type="checkbox" value="1">
                              <label for="brand_c1"></label>
                            </div>
                          </td>
                          <td class="align-middle">Garsel</td>
                        </tr>
                        <tr>
                          <td class="align-middle">2</td>
                          <td>
                            <div class="checkbox" style="margin-top: -1rem!important">
                              <input id="brand_c2" name="brand_c" type="checkbox" value="2">
                              <label for="brand_c2"></label>
                            </div>
                          </td>
                          <td class="align-middle">Gucci</td>
                        </tr>
                        <tr>
                          <td class="align-middle">3</td>
                          <td>
                            <div class="checkbox" style="margin-top: -1rem!important">
                              <input id="brand_c3" name="brand_c" type="checkbox" value="3">
                              <label for="brand_c3"></label>
                            </div>
                          </td>
                          <td class="align-middle">Dunhill</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="groups">
                  <button type="button" class="btn btn-danger btn-sm pull-right waves-effect" onclick="destroy('{{ url('product_group') }}', 'DELETE')"><i class="fa fa-trash"></i> Delete</button>
                  <button type="button" class="btn btn-warning btn-sm pull-right waves-effect" onclick="editModal('{{ url('product_group') }}', 'group_c')"><i class="fa fa-pencil"></i> Edit</button>
                  <button type="button" class="btn btn-primary btn-sm pull-right waves-effect" onclick="addModal('{{ url('product_group/create') }}')"><i class="fa fa-plus"></i> Add</button>
                  <div class="table-responsive">
                    <table class="table table-hover table-striped">
                      <thead>
                        <tr>
                          <th style="width: 1%;">#</th>
                          <th style="width: 1%;">
                            <div class="checkbox" style="margin-top: -2.3rem!important">
                              <input id="select-all" name="input[]" type="checkbox" value="">
                              <label for="select-all"></label>
                            </div>
                          </th>
                          <th>NAME</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="align-middle">1</td>
                          <td>
                            <div class="checkbox" style="margin-top: -1rem!important">
                              <input id="group_c1" name="group_c" type="checkbox" value="1">
                              <label for="group_c1"></label>
                            </div>
                          </td>
                          <td class="align-middle">Shirt</td>
                        </tr>
                        <tr>
                          <td class="align-middle">2</td>
                          <td>
                            <div class="checkbox" style="margin-top: -1rem!important">
                              <input id="group_c2" name="group_c" type="checkbox" value="2">
                              <label for="group_c2"></label>
                            </div>
                          </td>
                          <td class="align-middle">T-Shirt</td>
                        </tr>
                        <tr>
                          <td class="align-middle">3</td>
                          <td>
                            <div class="checkbox" style="margin-top: -1rem!important">
                              <input id="group_c3" name="group_c" type="checkbox" value="3">
                              <label for="group_c3"></label>
                            </div>
                          </td>
                          <td class="align-middle">Jeans</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="units">
                  <button type="button" class="btn btn-danger btn-sm pull-right waves-effect" onclick="destroy('{{ url('product_unit') }}', 'DELETE')"><i class="fa fa-trash"></i> Delete</button>
                  <button type="button" class="btn btn-warning btn-sm pull-right waves-effect" onclick="editModal('{{ url('product_unit') }}', 'unit_c')"><i class="fa fa-pencil"></i> Edit</button>
                  <button type="button" class="btn btn-primary btn-sm pull-right waves-effect" onclick="addModal('{{ url('product_unit/create') }}')"><i class="fa fa-plus"></i> Add</button>
                  <div class="table-responsive">
                    <table class="table table-hover table-striped">
                      <thead>
                        <tr>
                          <th style="width: 1%;">#</th>
                          <th style="width: 1%;">
                            <div class="checkbox" style="margin-top: -2.3rem!important">
                              <input id="select-all" name="input[]" type="checkbox" value="">
                              <label for="select-all"></label>
                            </div>
                          </th>
                          <th>NAME</th>
                          <th>SHORT NAME</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="align-middle">1</td>
                          <td>
                            <div class="checkbox" style="margin-top: -1rem!important">
                              <input id="unit_c1" name="unit_c" type="checkbox" value="1">
                              <label for="unit_c1"></label>
                            </div>
                          </td>
                          <td class="align-middle">Kilogram</td>
                          <td class="align-middle">kg</td>
                        </tr>
                        <tr>
                          <td class="align-middle">2</td>
                          <td>
                            <div class="checkbox" style="margin-top: -1rem!important">
                              <input id="unit_c2" name="unit_c" type="checkbox" value="2">
                              <label for="unit_c2"></label>
                            </div>
                          </td>
                          <td class="align-middle">Litre</td>
                          <td class="align-middle">lt</td>
                        </tr>
                        <tr>
                          <td class="align-middle">3</td>
                          <td>
                            <div class="checkbox" style="margin-top: -1rem!important">
                              <input id="unit_c3" name="unit_c" type="checkbox" value="3">
                              <label for="unit_c3"></label>
                            </div>
                          </td>
                          <td class="align-middle">Pieces</td>
                          <td class="align-middle">pc</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content" id="modal-content">

    </div>
  </div>
</div>
{{-- @include('layouts.script') --}}