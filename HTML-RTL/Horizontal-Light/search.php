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
								<h4 class="content-title mb-0 my-auto">البحث</h4>
							</div>
						</div>
						
					</div>
					<!-- breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body pb-0">
									<div class="input-group mb-2">
										<input type="text" class="form-control" placeholder="البحث عن طريق الإسم / رقم الهاتف / رقم الطلب ">
										<span class="input-group-append">
											<button class="btn ripple btn-primary" type="button">بحث</button>
										</span>
									</div>
								</div>
							
							</div>
						</div>
					</div>
					<!-- row closed -->
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->
		</div>
		<!-- End Page -->

		<!-- Back-to-top -->
		<?php 
			include 'footer.php';
			?>
	</body>
</html>