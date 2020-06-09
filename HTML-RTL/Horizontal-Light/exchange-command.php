<!doctype html>
<html lang="en" dir="ltr">
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
								<h4 class="content-title mb-0 my-auto">تحويل الطلبات </h4>
							</div>
						</div>
						
						</div>
<div class="content">

<div class="col-12 col-sm-4 col-md-12 col-xl-4">
							<div class="card bg-danger text-white">
								<div class="card-body">
									    <h6 class="slim-pagetitle">تحويل الطلبات من موظفة لأخرى</h6>
									المرجوا استعمال هذه الأداة بانتباه ، لا يمكن التراجع عن العملية</h5>
    <h5>يتم تحويل فقط الطلبات قيد المعالجة  
								</div>
							</div>
						</div>
<div class="panel panel-flat">
    <div class="panel-body text-left">
      <form action="/lists/transform/"  method="POST" id="transform_form">
    
        <div class="form-group">
          <label for="">التحويل من </label>
           <select name="from"  class="form-control" >
               <option value="aucun">اختيار الموظفة</option>
                                <option value="142">rania</option>
                                <option value="143">ibtissam</option>
                                <option value="144">siham</option>
                                <option value="145">jihan</option>
                                <option value="146">rachida</option>
                                <option value="147">hanane</option>
                                <option value="157">t3dilat</option>
                           </select>
        </div>      
       

        <div class="form-group">
          <label for="">التحويل إلى</label>
           <select name="to"  class="form-control" >
               <option value="aucun">اختيار الموظفة</option>
                                <option value="142">rania</option>
                                <option value="143">ibtissam</option>
                                <option value="144">siham</option>
                                <option value="145">jihan</option>
                                <option value="146">rachida</option>
                                <option value="147">hanane</option>
                                <option value="157">t3dilat</option>
                           </select>
        </div>    



        <div class="form-group">
            <input type="submit" class='btn btn-success btn-block' value="تحويل الطلبات الى الموظفة الجديدة" / >
        </div>
    </form>
  </div>
</div>  

</div>
					</div>

				
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->

		
	<?php 
			include 'footer.php';
			?>
	</body>
</html>