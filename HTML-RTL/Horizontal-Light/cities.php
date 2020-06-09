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
								<h4 class="content-title mb-0 my-auto">المدن</h4>
							</div>
						</div>
						
						</div>

					</div>
	<div class="manager-wrapper">
<div class="col-md-7">
<div class="panel panel-table mg-t-20 mg-sm-t-30">
<div class="panel-header">
</div>
<div class="table-responsive">
    <table class="table table-bordered bawaba-tables " >
        <thead>
            <tr>
                <th><b> المدينة </b></th>
                <th><b>الرمز</b></th>
                <th><b> الموزع </b></th>
            </tr>
        </thead>
        <tbody>  
        
                 <tr>
             <td>النواحي</td>
             <td>النواحي</td>
             <td>النواحي</td>
         </tr>
           
        </tbody>
    </table>
</div>
</div>
</div>
<div class="col-md-5">
<div class="panel panel-table mg-t-20 mg-sm-t-30">
<div class="panel-header">
<h6 class="slim-panel-title text-center">اضافة مدينة جديدة</h6>
</div>
    <div class="panel-body">
      <form action="/cities" id="addCityForm"  method="POST">
        <div class="form-group">
            <input type="text" class='form-control' name="city_name" value="" placeholder="اسم المدينة" required>
        </div>
        <div class="form-group">
            <input type="text" class='form-control' name="reference" value="" placeholder="رمز المدينة" required>
        </div>

        <div class="form-group">
           <select name="user_id" id="" class="form-control" placeholder='الموزع' >
               <option value="aucun">اختيار الموزع</option>
                                <option value="148">soufian agadir</option>
                                <option value="149">soufian marakech</option>
                                <option value="150">hassan rabat</option>
                                <option value="151">tanger adnan</option>
                                <option value="152">araich sahb adnan</option>
                                <option value="153">kenitra sahb hassan</option>
                                <option value="154">ayoub</option>
                                <option value="158">النواحي</option>
                           </select>
        </div>      
       
        <div class="form-group">
            <input type="submit" class='btn btn-success btn-block' value="اضافة مدينة جديدة" / >
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