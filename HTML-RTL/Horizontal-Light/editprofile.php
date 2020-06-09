<!DOCTYPE html>
<html lang="en">


<?php

include 'header.php';

?>
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
									<button type="submit" class="btn btn-primary waves-effect waves-light editprofile">تحديث الملف
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