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
								<h4 class="content-title mb-0 my-auto">المستخدمين</h4>
							</div>
						</div>
					
					</div>
					<!-- breadcrumb -->

					<!--Row-->
					<div class="row row-sm">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
							<div class="card">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">USERS TABLE</h4>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Example of Valex Simple Table. <a href="">Learn more</a></p>
								</div>
								<div class="card-body">
									<div class="table-responsive border-top userlist-table">
										<table class="table card-table table-striped table-vcenter text-nowrap mb-0">
											<thead>
												<tr>
													<th class="wd-lg-8p"><span>المستخدم</span></th>
													<th class="wd-lg-20p"><span></span></th>
											<th class="wd-lg-20p"><span>تاريخ انشاء الحساب</span></th>
													<th class="wd-lg-20p"><span>الحالة</span></th>
													<th class="wd-lg-20p"><span>البريد الإلكتروني</span></th>
													<th class="wd-lg-20p">التعديلات</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<img alt="avatar" class="rounded-circle avatar-md mr-2" src="../../assets/img/faces/1.jpg">
													</td>
													<td>Megan Peters</td>
													<td>
														08/06/2020
													</td>
													<td class="text-center">
														<span class="label text-muted d-flex"><div class="dot-label bg-gray-300 ml-1"></div>Inactive</span>
													</td>
													<td>
														<a href="#">mila@kunis.com</a>
													</td>
													<td>
														<a href="#" class="btn btn-sm btn-info">
															<i class="las la-pen"></i>
														</a>
														<a href="#" class="btn btn-sm btn-danger">
															<i class="las la-trash"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<img alt="avatar" class="rounded-circle avatar-md mr-2" src="../../assets/img/faces/2.jpg">
													</td>
													<td>George Clooney</td>
													<td>
														12/06/2020
													</td>
													<td class="text-center">
														<span class="label text-success d-flex"><div class="dot-label bg-success ml-1"></div>Active</span>
													</td>
													<td>
														<a href="#">marlon@brando.com</a>
													</td>
													<td>
														
														<a href="#" class="btn btn-sm btn-info">
															<i class="las la-pen"></i>
														</a>
														<a href="#" class="btn btn-sm btn-danger">
															<i class="las la-trash"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<img alt="avatar" class="rounded-circle avatar-md mr-2" src="../../assets/img/faces/13.jpg">
													</td>
													<td>Ryan Gossling</td>
													<td>
														14/06/2020
													</td>
													<td class="text-center">
														<span class="label text-danger d-flex"><div class="dot-label bg-danger ml-1"></div> Banned</span>
													</td>
													<td>
														<a href="#">jack@nicholson</a>
													</td>
													<td>
														
														<a href="#" class="btn btn-sm btn-info">
															<i class="las la-pen"></i>
														</a>
														<a href="#" class="btn btn-sm btn-danger">
															<i class="las la-trash"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<img alt="avatar" class="rounded-circle avatar-md mr-2" src="../../assets/img/faces/1.jpg">
													</td>
													<td> Emma Watson</td>
													<td>
														16/06/2020
													</td>
													<td class="text-center">
														<span class="label text-warning d-flex"><div class="dot-label bg-warning ml-1"></div>Pending</span>
													</td>
													<td>
														<a href="#">jack@nicholsonm</a>
													</td>
													<td>
													
														<a href="#" class="btn btn-sm btn-info">
															<i class="las la-pen"></i>
														</a>
														<a href="#" class="btn btn-sm btn-danger">
															<i class="las la-trash"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<img alt="avatar" class="rounded-circle avatar-md mr-2" src="../../assets/img/faces/12.jpg">
													</td>
													<td>Mila Kunis</td>
													<td>
														18/06/2020
													</td>
													<td class="text-center">
														<span class="label text-muted d-flex"><div class="dot-label bg-gray-300 ml-1"></div>Inactive</span>
													</td>
													<td>
														<a href="#">mila@kunis.com</a>
													</td>
													<td>
														
														<a href="#" class="btn btn-sm btn-info">
															<i class="las la-pen"></i>
														</a>
														<a href="#" class="btn btn-sm btn-danger">
															<i class="las la-trash"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<img alt="avatar" class="rounded-circle avatar-md mr-2" src="../../assets/img/faces/4.jpg">
													</td>
													<td>Phil Watson</td>
													<td>
														23/06/2020
													</td>
													<td class="text-center">
														<span class="label text-success d-flex"><div class="dot-label bg-success ml-1"></div>active</span>
													</td>
													<td>
														<a href="#">phil@watson.com</a>
													</td>
													<td>
														
														<a href="#" class="btn btn-sm btn-info">
															<i class="las la-pen"></i>
														</a>
														<a href="#" class="btn btn-sm btn-danger">
															<i class="las la-trash"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<img alt="avatar" class="rounded-circle avatar-md mr-2" src="../../assets/img/faces/5.jpg">
													</td>
													<td>Sonia Robertson</td>
													<td>
														25/06/2020
													</td>
													<td class="text-center">
														<span class="label text-success d-flex"><div class="dot-label bg-success ml-1"></div>active</span>
													</td>
													<td>
														<a href="#">robertson@sonia.com</a>
													</td>
													<td>
														
														<a href="#" class="btn btn-sm btn-info">
															<i class="las la-pen"></i>
														</a>
														<a href="#" class="btn btn-sm btn-danger">
															<i class="las la-trash"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<img alt="avatar" class="rounded-circle avatar-md mr-2" src="../../assets/img/faces/7.jpg">
													</td>
													<td>Adam Hamilton</td>
													<td>
														31/06/2020
													</td>
													<td class="text-center">
														<span class="label text-danger d-flex"><div class="dot-label bg-danger ml-1"></div>Banned</span>
													</td>
													<td>
														<a href="#">mila@kunis.com</a>
													</td>
													<td>
														
														<a href="#" class="btn btn-sm btn-info">
															<i class="las la-pen"></i>
														</a>
														<a href="#" class="btn btn-sm btn-danger">
															<i class="las la-trash"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<img alt="avatar" class="rounded-circle avatar-md mr-2" src="../../assets/img/faces/9.jpg">
													</td>
													<td>Leah Morgan</td>
													<td>
														02/07/2020
													</td>
													<td class="text-center">
														<span class="label text-warning d-flex"><div class="dot-label bg-warning ml-1"></div>pending</span>
													</td>
													<td>
														<a href="#">morganleah@.com</a>
													</td>
													<td>
														
														<a href="#" class="btn btn-sm btn-info">
															<i class="las la-pen"></i>
														</a>
														<a href="#" class="btn btn-sm btn-danger">
															<i class="las la-trash"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<img alt="avatar" class="rounded-circle avatar-md mr-2" src="../../assets/img/faces/11.jpg">
													</td>
													<td>Amelia McDonald</td>
													<td>
														08/07/2020
													</td>
													<td class="text-center">
														<span class="label text-success d-flex"><div class="dot-label bg-success ml-1"></div>active</span>
													</td>
													<td>
														<a href="#">amelia23@kunis.com</a>
													</td>
													<td>
														
														<a href="#" class="btn btn-sm btn-info">
															<i class="las la-pen"></i>
														</a>
														<a href="#" class="btn btn-sm btn-danger">
															<i class="las la-trash"></i>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<img alt="avatar" class="rounded-circle avatar-md mr-2" src="../../assets/img/faces/17.jpg">
													</td>
													<td>Paul Molive</td>
													<td>
														12/07/2020
													</td>
													<td class="text-center">
														<span class="label text-success d-flex"><div class="dot-label bg-success ml-1"></div>active</span>
													</td>
													<td>
														<a href="#">paul45@kunis.com</a>
													</td>
													<td>
														
														<a href="#" class="btn btn-sm btn-info">
															<i class="las la-pen"></i>
														</a>
														<a href="#" class="btn btn-sm btn-danger">
															<i class="las la-trash"></i>
														</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<ul class="pagination mt-4 mb-0 float-left">
										<li class="page-item page-prev disabled">
											<a class="page-link" href="#" tabindex="-1">Prev</a>
										</li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">4</a></li>
										<li class="page-item"><a class="page-link" href="#">5</a></li>
										<li class="page-item page-next">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</div>
							</div>
						</div><!-- COL END -->
					</div>
					<!-- row closed  -->
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->

			<!-- Sidebar-right-->
			<div class="sidebar sidebar-left sidebar-animate">
				<div class="panel panel-primary card mb-0 box-shadow">
					<div class="tab-menu-heading border-0 p-3">
						<div class="card-title mb-0">Notifications</div>
						<div class="card-options mr-auto">
							<a href="#" class="sidebar-remove"><i class="fe fe-x"></i></a>
						</div>
					</div>
					<div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
						<div class="tabs-menu ">
							<!-- Tabs -->
							<ul class="nav panel-tabs">
								<li class=""><a href="#side1" class="active" data-toggle="tab"><i class="ion ion-md-chatboxes tx-18 ml-2"></i> Chat</a></li>
								<li><a href="#side2" data-toggle="tab"><i class="ion ion-md-notifications tx-18  ml-2"></i> Notifications</a></li>
								<li><a href="#side3" data-toggle="tab"><i class="ion ion-md-contacts tx-18 ml-2"></i> Friends</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane active " id="side1">
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-primary brround avatar-md">CH</span>
									</div>
									<a class="wrapper w-100 mr-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>New Websites is Created</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted ml-1"></i>
												<small class="text-muted ml-auto">30 mins ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-danger brround avatar-md">N</span>
									</div>
									<a class="wrapper w-100 mr-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Prepare For the Next Project</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted ml-1"></i>
												<small class="text-muted ml-auto">2 hours ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-info brround avatar-md">S</span>
									</div>
									<a class="wrapper w-100 mr-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Decide the live Discussion</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted ml-1"></i>
												<small class="text-muted ml-auto">3 hours ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-warning brround avatar-md">K</span>
									</div>
									<a class="wrapper w-100 mr-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Meeting at 3:00 pm</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted ml-1"></i>
												<small class="text-muted ml-auto">4 hours ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-success brround avatar-md">R</span>
									</div>
									<a class="wrapper w-100 mr-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted ml-1"></i>
												<small class="text-muted ml-auto">1 days ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-pink brround avatar-md">MS</span>
									</div>
									<a class="wrapper w-100 mr-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted ml-1"></i>
												<small class="text-muted ml-auto">1 days ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-purple brround avatar-md">L</span>
									</div>
									<a class="wrapper w-100 mr-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted ml-1"></i>
												<small class="text-muted ml-auto">45 mintues ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center p-3">
									<div class="">
										<span class="avatar bg-blue brround avatar-md">U</span>
									</div>
									<a class="wrapper w-100 mr-3" href="#" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted ml-1"></i>
												<small class="text-muted ml-auto">2 days ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="tab-pane  " id="side2">
								<div class="list-group list-group-flush ">
									<div class="list-group-item d-flex  align-items-center">
										<div class="ml-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Madeleine</strong> Hey! there I' am available....
											<div class="small text-muted">
												3 hours ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="ml-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/img/faces/1.jpg"></span>
										</div>
										<div>
											<strong>Anthony</strong> New product Launching...
											<div class="small text-muted">
												5 hour ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="ml-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Olivia</strong> New Schedule Realease......
											<div class="small text-muted">
												45 mintues ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="ml-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/img/faces/8.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Madeleine</strong> Hey! there I' am available....
											<div class="small text-muted">
												3 hours ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="ml-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/img/faces/11.jpg"></span>
										</div>
										<div>
											<strong>Anthony</strong> New product Launching...
											<div class="small text-muted">
												5 hour ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="ml-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/img/faces/6.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Olivia</strong> New Schedule Realease......
											<div class="small text-muted">
												45 mintues ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="ml-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../../assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Olivia</strong> Hey! there I' am available....
											<div class="small text-muted">
												12 mintues ago
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane  " id="side3">
								<div class="list-group list-group-flush ">
									<div class="list-group-item d-flex  align-items-center">
										<div class="ml-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
										</div>
										<div class="mr-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="ml-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/11.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
										</div>
										<div class="mr-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="ml-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/10.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
										</div>
										<div class="mr-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="ml-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
										</div>
										<div class="mr-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="ml-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/13.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
										</div>
										<div class="mr-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="ml-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
										</div>
										<div class="mr-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="ml-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/4.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
										</div>
										<div class="mr-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="ml-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/7.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
										</div>
										<div class="mr-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="ml-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/2.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
										</div>
										<div class="mr-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="ml-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/14.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
										</div>
										<div class="mr-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="ml-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/11.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
										</div>
										<div class="mr-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="ml-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/9.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
										</div>
										<div class="mr-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="ml-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/15.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
										</div>
										<div class="mr-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="ml-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/img/faces/4.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
										</div>
										<div class="mr-auto">
											<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/Sidebar-right-->

			<!-- Message Modal -->
			<div class="modal fade" id="chatmodel" tabindex="-1" role="dialog"  aria-hidden="true">
				<div class="modal-dialog modal-dialog-right chatbox" role="document">
					<div class="modal-content chat border-0">
						<div class="card overflow-hidden mb-0 border-0">
							<!-- action-header -->
							<div class="action-header clearfix">
								<div class="float-left hidden-xs d-flex ml-2">
									<div class="img_cont mr-3">
										<img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img" alt="img">
									</div>
									<div class="align-items-center mt-2">
										<h4 class="text-white mb-0 font-weight-semibold">Daneil Scott</h4>
										<span class="dot-label bg-success"></span><span class="mr-3 text-white">online</span>
									</div>
								</div>
								<ul class="ah-actions actions align-items-center">
									<li class="call-icon">
										<a href="" class="d-done d-md-block phone-button" data-toggle="modal" data-target="#audiomodal">
											<i class="si si-phone"></i>
										</a>
									</li>
									<li class="video-icon">
										<a href="" class="d-done d-md-block phone-button" data-toggle="modal" data-target="#videomodal">
											<i class="si si-camrecorder"></i>
										</a>
									</li>
									<li class="dropdown">
										<a href="" data-toggle="dropdown" aria-expanded="true">
											<i class="si si-options-vertical"></i>
										</a>
										<ul class="dropdown-menu dropdown-menu-right">
											<li><i class="fa fa-user-circle"></i> View profile</li>
											<li><i class="fa fa-users"></i>Add friends</li>
											<li><i class="fa fa-plus"></i> Add to group</li>
											<li><i class="fa fa-ban"></i> Block</li>
										</ul>
									</li>
									<li>
										<a href=""  class="" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true"><i class="si si-close text-white"></i></span>
										</a>
									</li>
								</ul>
							</div>
							<!-- action-header end -->

							<!-- msg_card_body -->
							<div class="card-body msg_card_body">
								<div class="chat-box-single-line">
									<abbr class="timestamp">February 1st, 2019</abbr>
								</div>
								<div class="d-flex justify-content-start">
									<div class="img_cont_msg">
										<img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Hi, how are you Jenna Side?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end ">
									<div class="msg_cotainer_send">
										Hi Connor Paige i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="../../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end ">
									<div class="msg_cotainer_send">
										You welcome Connor Paige
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="../../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Yo, Can you update Views?
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										But I must explain to you how all this mistaken  born and I will give
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="../../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Yo, Can you update Views?
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										But I must explain to you how all this mistaken  born and I will give
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="../../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Yo, Can you update Views?
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										But I must explain to you how all this mistaken  born and I will give
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="../../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start">
									<div class="img_cont_msg">
										<img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Okay Bye, text you later..
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<!-- msg_card_body end -->
							<!-- card-footer -->
							<div class="card-footer">
								<div class="msb-reply d-flex">
									<div class="input-group">
										<input type="text" class="form-control " placeholder="Typing....">
										<div class="input-group-append ">
											<button type="button" class="btn btn-primary ">
												<i class="far fa-paper-plane" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
							</div><!-- card-footer end -->
						</div>
					</div>
				</div>
			</div>

			<!--Video Modal -->
			<div id="videomodal" class="modal fade">
				<div class="modal-dialog" role="document">
					<div class="modal-content bg-dark border-0 text-white">
						<div class="modal-body mx-auto text-center p-7">
							<h5>Valex Video call</h5>
							<img src="../../assets/img/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
							<h4 class="mb-1 font-weight-semibold">Daneil Scott</h4>
							<h6>Calling...</h6>
							<div class="mt-5">
								<div class="row">
									<div class="col-4">
										<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
											<i class="fas fa-video-slash"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape rounded-circle text-white mb-0 mr-3" href="#" data-dismiss="modal" aria-label="Close">
											<i class="fas fa-phone bg-danger text-white"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
											<i class="fas fa-microphone-slash"></i>
										</a>
									</div>
								</div>
							</div>
						</div><!-- modal-body -->
					</div>
				</div><!-- modal-dialog -->
			</div><!-- modal -->

			<!-- Audio Modal -->
			<div id="audiomodal" class="modal fade">
				<div class="modal-dialog" role="document">
					<div class="modal-content border-0">
						<div class="modal-body mx-auto text-center p-7">
							<h5>Valex Voice call</h5>
							<img src="../../assets/img/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
							<h4 class="mb-1  font-weight-semibold">Daneil Scott</h4>
							<h6>Calling...</h6>
							<div class="mt-5">
								<div class="row">
									<div class="col-4">
										<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
											<i class="fas fa-volume-up bg-light"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape rounded-circle text-white mb-0 mr-3" href="#" data-dismiss="modal" aria-label="Close">
											<i class="fas fa-phone text-white bg-success"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape  rounded-circle mb-0 mr-3" href="#">
											<i class="fas fa-microphone-slash bg-light"></i>
										</a>
									</div>
								</div>
							</div>
						</div><!-- modal-body -->
					</div>
				</div><!-- modal-dialog -->
			</div><!-- modal -->

			<!-- Footer opened -->
			<div class="main-footer ht-40">
				<div class="container-fluid pd-t-0-f ht-100p">
					<span>Copyright © 2020 <a href="#">Valex</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.</span>
				</div>
			</div>
			<!-- Footer closed -->
			
		</div>
		<!-- End Page -->

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

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

		<!-- Internal Select2 js-->
		<script src="../../assets/plugins/select2/js/select2.min.js"></script>

		<!-- P-scroll js -->
		<script src="../../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="../../assets/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!-- eva-icons js -->
		<script src="../../assets/js/eva-icons.min.js"></script>

		<!-- Rating js-->
		<script src="../../assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="../../assets/plugins/rating/jquery.barrating.js"></script>

		<!-- Custom Scroll bar Js-->
		<script src="../../assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Horizontalmenu js-->
		<script src="../../assets/plugins/horizontal-menu/horizontal-menu-2/horizontal-menu.js"></script>

		<!-- Right-sidebar js -->
		<script src="../../assets/plugins/sidebar/sidebar-rtl.js"></script>
		<script src="../../assets/plugins/sidebar/sidebar-custom.js"></script>

		<!-- Sticky js -->
		<script src="../../assets/js/sticky.js"></script>

		<!-- custom js -->
		<script src="../../assets/js/custom.js"></script>

	</body>
</html>