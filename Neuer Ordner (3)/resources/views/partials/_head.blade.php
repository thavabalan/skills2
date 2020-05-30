<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Skills Matrix | Dashboard</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../../css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<!-- CHANGE THIS TITLE FOR EACH PAGE -->

<!-- Bootstrap -->
	 <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <script>// Material Design example
$(document).ready(function () {
  $('#dtMaterialDesignExample').DataTable();
  $('#dtMaterialDesignExample_wrapper').find('label').each(function () {
    $(this).parent().append($(this).children());
  });
  $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('input').each(function () {
    const $this = $(this);
    $this.attr("placeholder", "Search");
    $this.removeClass('form-control-sm');
  });
  $('#dtMaterialDesignExample_wrapper .dataTables_length').addClass('d-flex flex-row');
  $('#dtMaterialDesignExample_wrapper .dataTables_filter').addClass('md-form');
  $('#dtMaterialDesignExample_wrapper select').removeClass(
  'custom-select custom-select-sm form-control form-control-sm');
  $('#dtMaterialDesignExample_wrapper select').addClass('mdb-select');
  $('#dtMaterialDesignExample_wrapper .mdb-select').materialSelect();
  $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('label').remove();
});</script>
{!! Html::style('../../css/select2.min.css') !!}

	{!! Html::script('../../js/parsley.min.js') !!}
	{!! Html::script('../../js/select2.min.js') !!}

	<script type="text/javascript">
		$('.select2-multi').select2();
	</script>

@yield('stylesheets')

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
