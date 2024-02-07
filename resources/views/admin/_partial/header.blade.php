<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ELEKTRO - POLIBATAM</title>
  <meta content="prodi elektro" name="prodi elektro politeknik negeri batam">
  <meta content="prodi elektro" name="elektro polibatam">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <script src="{{ asset('assets/js/jquery/jquery-3.6.4.js') }}" crossorigin="anonymous"></script>

  <!-- Favicons -->
  <link href="{{ asset('img/favicon-polibatam.png') }}" rel="icon">
  <link href="{{ asset('img/polibatam.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('/assets/css/dashboard/style.css') }}" rel="stylesheet">
  {{-- <link href="{{ asset('assets/css/sidebar.css') }}" rel="stylesheet"> --}}

  <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- Font Awesome -->
  <link href="{{ asset('assets/vendor/fontawesome/font-awesome.css') }}" rel="icon">
  {{-- TrixEditor --}}
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
  <!-- Datatable -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/datatable/jquery.dataTables.min.css') }}">
  <script type="text/javascript" src="{{ asset('assets/datatable/jquery.dataTables.min.js') }}"></script>

  <!-- Sweetalert -->
  <script type="text/javascript" src="{{ asset('assets/Sweetalert/sweetalert2@11.js') }}"></script>
  
  <style>
    trix-toolbar [data-trix-button-group="file-tools"]{
      display: none;
    }
  </style>
</head>

    