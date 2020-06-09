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