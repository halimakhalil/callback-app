<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">

    <script src="https://cdn.jsdelivr.net/npm/easy-responsive-tabs@0.0.2/js/easyResponsiveTabs.js"></script>
    <link rel="stylesheet" href="{{ asset('css/easy-responsive-tabs.css') }}" class="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/jszip.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/xlsx.js"></script>
    <style>

      .actionIcon:after {
        content: '\2807';
        }
      .table-wrapper {
          background: #fff;
          padding: 20px;
          box-shadow: 0 1px 1px rgba(0,0,0,.05);
      }
      .table-title {
          font-size: 15px;
          padding-bottom: 10px;
          margin: 0 0 10px;
          min-height: 45px;

      }
      .table-title h2 {
          margin: 5px 0 0;
          font-size: 24px;
          text-align: start !important;
      }
      .table-title select {
          border-color: rgb(104, 104, 104);
          border-width: 0 0 1px 0;
          padding: 3px 10px 3px 5px;
          margin: 0 5px;
      }
      .table-title .show-entries {
          margin-top: 7px;
      }
      table.table tr th, table.table tr td {
          border-color: #e9e9e9;
      }
      table.table th i {
          font-size: 13px;
          margin: 0 5px;
          cursor: pointer;
      }
      table.table td:last-child {
          width: 130px;
      }
      table.table td a {
          color:red;
          display: inline-block;
          margin: 0 5px;
      }
      table.table td a.view {
          color: #03A9F4;
      }
      table.table td a.edit {
          color: #FFC107;
      }
      table.table td a.delete {
          color: #E34724;
      }
      table.table td i {
          font-size: 19px;
      }
      .form-control{
        width: -moz-fit-content;
      }
      </style>
</head>
<body>
@extends('shopify-app::layouts.default')
@section('script')
    @parent
        <script>
            var AppBridge = window['app-birdge'];
            var actions =  AppBridge.actions;
            var TitleBar = actions.TitleBar;
            var Button = actions.Button
            var Redirect = actions.Redirect;
            var titleBarOptions = {
                title:'Hello world ',
            };
            var myTitleBar = TitleBar.create(app, titleBarOptions);
        </script>
@endsection
@section('content')
              <div>
                  <div class="table-wrapper">
                      <div class="table-title">
                          <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12">
                                  <h2 class="text-center">Customer Queries</h2>
                              </div>
                          </div>
                      </div>

                      <table id="riderTableBooking" class="table table-bordered tableBooking" cellspacing="0" >
                          <thead>
                              <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Customer Query</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Product Url</th>
                                <th scope="col">Created at</th>


                              </tr>
                            </thead>
                            <tbody>

                                @if(isset($table_data))

                                    @foreach ($table_data  as $data )

                                    <tr >
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->query}}</td>
                                        <td>{{$data->contact}}</td>
                                        <td><a href={{$data->url}}>{{$data->product_title}}</a></td>
                                        <td>{{$data->created_at}}</td>

                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                          </table>
                    </div>
          </div>
          </div>
      </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  @endsection
</body>
</html>


