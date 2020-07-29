@extends('layouts.app')
@section('title', 'Reports')
@section('content')
@include('layouts.left_sidebar')
<section class="content">
  <div class="body_scroll">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-12">
          <h2>Reports</h2>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Ggwpos</a></li>
            {{-- <li class="breadcrumb-item"><a href="javascript:void(0);">Components</a></li> --}}
            <li class="breadcrumb-item active">Reports</li>
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
              <h2><strong>Reports</strong></h2>
            </div>
            <div class="body">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs p-0 mb-3" id="myTab">
                <li class="nav-item"><a class="nav-link border-top-0 border-left-0 border-right-0 rounded-0 active" data-toggle="tab" href="#order_sales">Order/Sales</a></li>
                <li class="nav-item"><a class="nav-link border-top-0 border-left-0 border-right-0 rounded-0" data-toggle="tab" href="#payment">Payment</a></li>
                <li class="nav-item"><a class="nav-link border-top-0 border-left-0 border-right-0 rounded-0" data-toggle="tab" href="#purchase">Purchase</a></li>
                <li class="nav-item"><a class="nav-link border-top-0 border-left-0 border-right-0 rounded-0" data-toggle="tab" href="#sales_recap">Sales Recap</a></li>
                <li class="nav-item"><a class="nav-link border-top-0 border-left-0 border-right-0 rounded-0" data-toggle="tab" href="#inventory_stock">Inventory/Stock</a></li>
                <li class="nav-item"><a class="nav-link border-top-0 border-left-0 border-right-0 rounded-0" data-toggle="tab" href="#tax">Tax</a></li>
                <li class="nav-item"><a class="nav-link border-top-0 border-left-0 border-right-0 rounded-0" data-toggle="tab" href="#profit">Profit</a></li>
                <li class="nav-item"><a class="nav-link border-top-0 border-left-0 border-right-0 rounded-0" data-toggle="tab" href="#customer">Customer</a></li>
                <li class="nav-item"><a class="nav-link border-top-0 border-left-0 border-right-0 rounded-0" data-toggle="tab" href="#supplier">Supplier</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane in active" id="order_sales">
                  <div class="row mb-3">
                    <div class="col-md-2">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                        </div>
                        <input type="text" class="form-control datepicker" placeholder="Start Date">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                        </div>
                        <input type="text" class="form-control datepicker" placeholder="End Date">
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-hover table-striped">
                      <thead>
                        <tr>
                          <th>Invoice ID</th>
                          <th>Date</th>
                          <th>Sales Type</th>
                          <th>Sold By</th>
                          <th>Sold To</th>
                          <th>Item Purchased</th>
                          <th>Tax</th>
                          <th>Discount</th>
                          <th>Total</th>
                          <th>Due</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="align-middle">POS1011</td>
                          <td class="align-middle">2020-02-14</td>
                          <td class="align-middle">Customer</td>
                          <td class="align-middle">Robert Smith</td>
                          <td class="align-middle">Francis Casper</td>
                          <td class="align-middle">3</td>
                          <td class="align-middle">$0.00</td>
                          <td class="align-middle">$0.00</td>
                          <td class="align-middle">$1,336.00</td>
                          <td class="align-middle">$0.00</td>
                        </tr>
                        <tr>
                          <td class="align-middle">POS1012</td>
                          <td class="align-middle">2020-02-14</td>
                          <td class="align-middle">Customer</td>
                          <td class="align-middle">Robert Smith</td>
                          <td class="align-middle">Walk-in customer</td>
                          <td class="align-middle">1</td>
                          <td class="align-middle">$0.00</td>
                          <td class="align-middle">$0.00</td>
                          <td class="align-middle">$555.00</td>
                          <td class="align-middle">$0.00</td>
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
@stop