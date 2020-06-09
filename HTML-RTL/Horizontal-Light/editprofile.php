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
								<h4 class="content-title mb-0 my-auto">تعديل و معاينة الحساب </h4>
							</div>
						</div>
					
					</div>
					<!-- breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<!-- Col -->
						<div class="col-lg-4">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="pl-0">
										<div class="main-profile-overview">
											<div class="main-img-user profile-user">
												<img alt="" src="../../assets/img/faces/6.jpg"><a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
											</div>
											<div class="d-flex justify-content-between mg-b-20">
												<div>
													<h5 class="main-profile-name">Petey Cruiser</h5>
													<p class="main-profile-name-text">Web Designer</p>
												</div>
											</div>
											<!-- main-profile-bio -->
											<div class="row">
												<div class="col-md-4 col mb20">
													<h5>947</h5>
													<h6 class="text-small text-muted mb-0">مجموع الطلبات</h6>
												</div>
												<div class="col-md-4 col mb20">
													<h5>583</h5>
													<h6 class="text-small text-muted mb-0"> طلبات قيد المعالجة</h6>
												</div>
												<div class="col-md-4 col mb20">
													<h5>48</h5>
													<h6 class="text-small text-muted mb-0">طلبات مكتملة</h6>
												</div>
											</div>
									
											<!--skill bar-->
										</div><!-- main-profile-overview -->
									</div>
								</div>
							</div>
						</div>

						<!-- Col -->
						<div class="col-lg-8">
							<div class="card">
								<div class="card-body">
									<div class="mb-4 main-content-label">المعلومات الشخصية</div>
									<form class="form-horizontal">
									<div class="form-group ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">اسم المستخدم</label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control"  placeholder=" اسم المستخدم" value="">
												</div>
											</div>
										</div>
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">البريد الالكتروني</label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control"  placeholder="البريد الالكتروني" value="">
												</div>
											</div>
										</div>
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">المدينة   </label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control"  placeholder="المدينة   " value="">
												</div>
											</div>
										</div>
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">العنوان</label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control"  placeholder="العنوان" value="">
												</div>
											</div>
										</div>
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">رقم الهاتف</label>
												</div>
												<div class="col-md-9">
													<input type="phone" class="form-control"  placeholder="رقم الهاتف" value="">
												</div>
											</div>
										</div>
								<div class="card-footer text-left">
									<button type="submit" class="btn btn-primary waves-effect waves-light">تحديث الملف
</button>
								</div>
									
									</form>
								</div>
								
							</div>
						</div>
						<!-- /Col -->
					</div>
					<!-- row closed -->
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->

			<!-- Sidebar-right-->
			
			<!--/Sidebar-right-->

			<!-- Message Modal -->
			

			<!--Video Modal -->
		<!-- modal -->

			<!-- Audio Modal -->
			<!-- modal -->

			<!-- Footer opened -->
		
			<!-- Footer closed -->
			
		</div>
		<!-- End Page -->

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!-- JQuery min js -->
		<script src="../../assets/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap Bundle js -->
		<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!--Internal  Chart.bundle js -->
		<script src="../../assets/plugins/chart.js/Chart.bundle.min.js"></script>

		<!-- Ionicons js -->
		<script src="../../assets/plugins/ionicons/ionicons.js"></script>

		<!-- Moment js -->
		<script src="../../assets/plugins/moment/moment.js"></script>

		<!-- P-scroll js -->
		<script src="../../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="../../assets/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!-- Sticky js -->
		<script src="../../assets/js/sticky.js"></script>

		<!-- Rating js-->
		<script src="../../assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="../../assets/plugins/rating/jquery.barrating.js"></script>

		<!-- Internal Select2.min js -->
		<script src="../../assets/plugins/select2/js/select2.min.js"></script>
		<script src="../../assets/js/select2.js"></script>

		<!-- Custom Scroll bar Js-->
		<script src="../../assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Horizontalmenu js-->
		<script src="../../assets/plugins/horizontal-menu/horizontal-menu-2/horizontal-menu.js"></script>

		<!-- Right-sidebar js -->
		<script src="../../assets/plugins/sidebar/sidebar-rtl.js"></script>
		<script src="../../assets/plugins/sidebar/sidebar-custom.js"></script>

		<!-- eva-icons js -->
		<script src="../../assets/js/eva-icons.min.js"></script>

		<!-- custom js -->
		<script src="../../assets/js/custom.js"></script>

	</body>
</html>