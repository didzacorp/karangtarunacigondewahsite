@extends('layouts.app')
@section('title', 'Settings')
@section('content')
@include('layouts.left_sidebar')
<section class="content">
  <div class="body_scroll">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-12">
          <h2>Settings</h2>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Ggwpos</a></li>
            {{-- <li class="breadcrumb-item"><a href="javascript:void(0);">Components</a></li> --}}
            <li class="breadcrumb-item active">Settings</li>
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
              <h2>Application <strong>Settings</strong></h2>
            </div>
            <div class="body">
              <form id="form_save">
                <div class="row">
                  <div class="col mb-3">
                    <h5>General Settings</h5>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <label for="name">Application Name</label>
                    <div class="form-group">
                      <input type="text" id="name" name="name" class="form-control" placeholder="Application Name">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="pagination">Rows per table</label>
                    <div class="form-group">
                      <select class="form-control" id="pagination" name="pagination">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="500">500</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <label for="logo">Change application logo</label>
                    <div class="form-group">
                      <input type="file" class="dropify" id="logo" name="logo[]">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="image">Change background image</label>
                    <div class="form-group">
                      <input type="file" class="dropify" id="image" name="image[]">
                    </div>
                  </div>
                </div>
                <button type="button" class="btn btn-primary waves-effect btn-sm" onclick=""><i class="fa fa-check"></i> SAVE</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop