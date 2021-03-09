<?php
session_start ();

		
include('../config/DbFunction.php');
	$obj=new DbFunction();
	$rs=$obj->showinstructor();
	$rs1=$obj->showinstructor();
if (! (isset ( $_SESSION ['login'] ))) {
	
	header ( 'location:../index.php' );
}
  if(isset($_POST['submit'])){
		
	$obj=new DbFunction();
	
	$obj->create_instructor($_POST['instructorid'],$_POST['cid'],$_POST['subid'],$_POST['fullname'],$_POST['specailization']);	
	
}


	?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>ADD INSTRUCTOR</title>
<link href="../bower_components/bootstrap/dist/css/custom.css" rel="stylesheet">
<link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
<link href="../dist/css/style.css" rel="stylesheet">>
<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<form method="post" >
	<div id="wrapper">

		<!-- Navigation -->
		<?php include('leftbar.php')?>;


		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="page-header"> <?php echo strtoupper("welcome"." ".htmlentities($_SESSION['login']));?></h4>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Add Instructor</div>
						<div class="panel-body">
							<div class="row">
						 	<div class="col-lg-10">
									
										<div class="form-group">
											<div class="col-lg-4">
					 <label>Instructor Name<span id="" style="font-size:11px;color:Red">*</span>	</label>
											</div>
			
			<div class="col-lg-6">
			<select class="form-control" name="instructor-short" id="fullname" onchange="instructorAvialability()" required="required" >
			<option VALUE="">SELECT</option>
				<?php while($res=$rs->fetch_object()){?>							
			
                        <option VALUE="<?php echo htmlentities($res->instructorid);?>"><?php echo htmlentities($res->fullname)?></option>
                        
                        
                    <?php }?>   			</div>
											 
                        </select>
					<span id="instructor-availability-status" style="font-size:12px;"></span>	
					</div>
					    </div>	
										
								<br><br>
								
		<div class="form-group">
		<div class="col-lg-4">
		<label>Specialization<span id="" style="font-size:11px;color:red">*</span></label>
		</div>
		<div class="col-lg-6">
		<select class="form-control" name="instructor-full"  id="specailization"required="required" onchange="instructorfullAvail()">
        <option VALUE="">SELECT</option>
        <?php while($res1=$rs1->fetch_object()){?>							
			
     <option VALUE="<?php echo htmlentities($res1->specailization);?>"><?php echo htmlentities($res1->specailization)?></option>
                        
                        
                    <?php }?>   
       </select>
	   <span id="instructor-status" style="font-size:12px;"></span>
	 </div>
	 </div>	
						
										
	<div class="form-group">
											<div class="col-lg-4">
												
											</div>
											<div class="col-lg-6"><br><br>
	<input type="submit" class="btn btn-primary" name="submit" value="Add Instructor"></button>
											</div>
											
										</div>		
													
				</div>

					</div>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		

	</div>
	

	<!-- jQuery -->
	<script src="../bower_components/jquery/dist/jquery.min.js"
		type="text/javascript"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"
		type="text/javascript"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="../bower_components/metisMenu/dist/metisMenu.min.js"
		type="text/javascript"></script>

	<!-- Custom Theme JavaScript -->
	<script src="../dist/js/sb-admin-2.js" type="text/javascript"></script>
	
	<script>
function instructorfullAvail() {
	$("#loaderIcon").show();
jQuery.ajax({
url: "instructor_availability.php",
data:'specailization='+$("#specailization").val(),
type: "POST",
success:function(data){
$("#instructor-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}

function instructorAvailability() {
	$("#loaderIcon").show();
jQuery.ajax({
url: "instructor_availability.php",
data:'fullname='+$("#fullname").val(),
type: "POST",
success:function(data){
$("#instructor-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}

</script>
</form>
</body>

</html>
