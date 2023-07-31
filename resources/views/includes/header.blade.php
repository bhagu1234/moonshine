<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{URL::to('/')}}/public/assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="{{URL::to('/')}}/public/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
	<link href="{{URL::to('/')}}/public/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="{{URL::to('/')}}/public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="{{URL::to('/')}}/public/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
	<link href="{{URL::to('/')}}/public/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="{{URL::to('/')}}/public/assets/css/pace.min.css" rel="stylesheet" />
	<script src="{{URL::to('/')}}/public/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="{{URL::to('/')}}/public/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{URL::to('/')}}/public/assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{URL::to('/')}}/public/assets/css/app.css" rel="stylesheet">
	<link href="{{URL::to('/')}}/public/assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{URL::to('/')}}/public/assets/css/dark-theme.css" />
	<link rel="stylesheet" href="{{URL::to('/')}}/public/assets/css/semi-dark.css" />
	<link rel="stylesheet" href="{{URL::to('/')}}/public/assets/css/header-colors.css" />
	<title>Moonshine</title>
</head>
<body>
@if (session('success'))
	<div class="alert alert-success">
		{{ session('success') }}
	</div>
@elseif(session('error'))
	<div class="alert alert-danger">
		{{ session('error') }}
	</div>
@endif
