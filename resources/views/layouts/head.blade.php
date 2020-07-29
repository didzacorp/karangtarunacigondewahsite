  <script src="https://use.fontawesome.com/0a4e4e649d.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="csrf-param" content="_token" />

  <title>{{ config('app.name') }} - @yield('title')</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('assets/plugins/charts-c3/plugin.css') }}"/>
  <link rel="stylesheet" href="{{ asset('assets/plugins/morrisjs/morris.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/plugins/dropify/css/dropify.min.css')}}"/>
  <!-- Bootstrap Material Datetime Picker Css -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" />
  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">

  {{-- custom --}}
  <style type="text/css">
    section.content{
      margin: 20px 20px 20px 260px;
    }
  </style>