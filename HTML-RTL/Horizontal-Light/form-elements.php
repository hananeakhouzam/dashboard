<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		<title> Valex -  Premium dashboard ui bootstrap rwd admin html5 template </title>

		<!-- Favicon -->
		<link rel="icon" href="../../assets/img/brand/favicon.png" type="image/x-icon"/>

		<!-- Icons css -->
		<link href="../../assets/css/icons.css" rel="stylesheet">

		<!-- Internal Select2 css -->
		<link href="../../assets/plugins/select2/css/select2.min.css" rel="stylesheet">

		<!--Internal  Datetimepicker-slider css -->
		<link href="../../assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css" rel="stylesheet">
		<link href="../../assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css" rel="stylesheet">
		<link href="../../assets/plugins/pickerjs/picker.min.css" rel="stylesheet">

		<!-- Internal Spectrum-colorpicker css -->
		<link href="../../assets/plugins/spectrum-colorpicker/spectrum.css" rel="stylesheet">

		<!--  Right-sidemenu css -->
		<link href="../../assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!--  Custom Scroll bar-->
		<link href="../../assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

		<!--- Style css-->
		<link href="../../assets/css-rtl/style.css" rel="stylesheet">
		<link href="../../assets/css-rtl/style-dark.css" rel="stylesheet">

		<!---Skinmodes css-->
		<link href="../../assets/css-rtl/skin-modes.css" rel="stylesheet" />

		<!--- Animations css-->
		<link href="../../assets/css/animate.css" rel="stylesheet">

	</head>

	<body class="main-body">

		<!-- Loader -->
		<div id="global-loader">
			<img src="../../assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
		
		<!-- Page -->
		<div class="page">
		
			<!-- main-header opened -->
			<?php 
			include 'navbar.php';
			?>
			
			<!-- /main-header -->

			<!--Horizontal-main -->
			
			<?php 
			include 'horizontal.php';
			?>
			<!--Horizontal-main -->

			<!-- main-content opened -->
			<div class="main-content horizontal-content">

				<!-- container opened -->
				<div class="container">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Forms</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/إضافة طلب جديد</span>
							</div>
						</div>
					</div>
					<!-- breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
							<div class="card  box-shadow-0">
								<div class="card-header">
									<h4 class="card-title mb-1">معلومات الزبون</h4>
								</div>
								<div class="card-body pt-0">
									<form class="form-horizontal" >
										<div class="form-group">
											<input type="text" class="form-control" id="inputName" placeholder="الإسم ">
										</div>
										<div class="form-group">
											<input type="email" class="form-control" id="inputEmail3" placeholder="العنوان ">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="inputPassword3" placeholder="رقم الهاتف ">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="inputPassword3" placeholder="المدينة ">
										</div>
										<div class="form-group mb-0 justify-content-end">
											<div class="checkbox">
												<div class="custom-checkbox custom-control">
													<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
												
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
							<div class="card  box-shadow-0 ">
								<div class="card-header">
									<h4 class="card-title mb-1">ملاحظة</h4>
								</div>
								<div class="card-body pt-0">
									<form >
										<div class="">
											
											<div class="col-lg">
											<textarea class="form-control" placeholder="" rows="3"></textarea>
										</div>
										
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- row -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<!--div-->
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Form Input &amp; Textarea
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<div class="row row-sm">
										<div class="col-lg">
											<input class="form-control" placeholder="Input box" type="text">
										</div>
										<div class="col-lg mg-t-10 mg-lg-t-0">
											<input class="form-control" placeholder="Input box (readonly)" readonly type="text">
										</div>
										<div class="col-lg mg-t-10 mg-lg-t-0">
											<input class="form-control" disabled placeholder="Input box (disabled)" type="text">
										</div>
									</div>
									<div class="row row-sm mg-t-20">
										<div class="col-lg">
											<textarea class="form-control" placeholder="Textarea" rows="3"></textarea>
										</div>
										<div class="col-lg mg-t-10 mg-lg-t-0">
											<textarea class="form-control" placeholder="Textarea (readonly)" readonly rows="3"></textarea>
										</div>
										<div class="col-lg mg-t-10 mg-lg-t-0">
											<textarea class="form-control" disabled placeholder="Texarea (disabled)" rows="3"></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
		
					</div>
					<!-- row closed -->
				</div>
				<!-- Container closed -->
			</div>
	
			<!-- Footer closed -->
			
		</div>
		<!-- End Page -->

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="ti-angle-double-up"></i></a>

		<!-- JQuery min js -->
		<script src="../../assets/plugins/jquery/jquery.min.js"></script>

		<!--Internal  Datepicker js -->
		<script src="../../assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

		<!-- Bootstrap Bundle js -->
		<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Ionicons js -->
		<script src="../../assets/plugins/ionicons/ionicons.js"></script>

		<!-- Moment js -->
		<script src="../../assets/plugins/moment/moment.js"></script>

		<!--Internal  jquery.maskedinput js -->
		<script src="../../assets/plugins/jquery.maskedinput/jquery.maskedinput.js"></script>

		<!--Internal  spectrum-colorpicker js -->
		<script src="../../assets/plugins/spectrum-colorpicker/spectrum.js"></script>

		<!-- Internal Select2.min js -->
		<script src="../../assets/plugins/select2/js/select2.min.js"></script>

		<!--Internal Ion.rangeSlider.min js -->
		<script src="../../assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

		<!--Internal  jquery-simple-datetimepicker js -->
		<script src="../../assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js"></script>

		<!-- Ionicons js -->
		<script src="../../assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js"></script>

		<!--Internal  pickerjs js -->
		<script src="../../assets/plugins/pickerjs/picker.min.js"></script>

		<!-- Rating js-->
		<script src="../../assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="../../assets/plugins/rating/jquery.barrating.js"></script>

		<!-- P-scroll js -->
		<script src="../../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="../../assets/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!-- Custom Scroll bar Js-->
		<script src="../../assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Horizontalmenu js-->
		<script src="../../assets/plugins/horizontal-menu/horizontal-menu-2/horizontal-menu.js"></script>

		<!-- Right-sidebar js -->
		<script src="../../assets/plugins/sidebar/sidebar-rtl.js"></script>
		<script src="../../assets/plugins/sidebar/sidebar-custom.js"></script>

		<!-- eva-icons js -->
		<script src="../../assets/js/eva-icons.min.js"></script>

		<!-- Sticky js -->
		<script src="../../assets/js/sticky.js"></script>

		<!-- custom js -->
		<script src="../../assets/js/custom.js"></script>

		<!-- Internal form-elements js -->
		<script src="../../assets/js/form-elements.js"></script>

	</body>
</html>