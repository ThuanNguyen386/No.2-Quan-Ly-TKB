<!DOCTYPE html>
<html lang="vi-VN">
<head>
	<title>Search</title>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  	<link rel="stylesheet" type="text/css" href="../../web/search_teacher.css">

</head>
<body>
<?php 

     ?>
	<div class="container mt-3">
		<form class="row g-3 te" >
		 	<div class=" col-md-3" >	
			 	<label class="ri" ><?php echo "Bộ môn" ?></label>
		    </div>
		    <div class=" col-md-9" style="float: right;">
		    	<select id="inputState" class="form-select fo" name="majorr" >
			      	<option selected> </option>
			        <?php 
			        	// foreach($faculty as $value=> $name){ ?>
			        	<option <?php //if (isset($majorr) && $majorr==$value) echo "selected";?>  value="<?php //echo $value;?>" >
			        				<?php echo "a";//echo $name;?>
			        			</option>
			        	<option >b </option>
			        	<option >c </option>
						
			        	<?php //} ?>
			      </select>
		    </div>

		    <div class=" col-md-3" style="float: left;">
		 		<label class="ri" ><?php echo "Từ khoá" ?></label>
	    	</div>
	    	<div class=" col-md-9" style="float: right;">	
		    	<input type="text" name="str" class="form-control fo" value=""  >
		    </div>
	    <div class="col-12">
    		<center><button  class="btn btn-primary sig" >Tìm kiếm</button>	</center>
  
  		</div>
		</form>

	<table>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Tên hiển thị</th>
			
		</tr>
		

		<tr>
			<td><?php echo ""; ?></td>
			<td><?php echo ""; ?></td>
			<td><?php echo ""; ?></td>
		</tr>
			
		
	</table>
	</div>
<?php
 // $conn = null;
 ?>
</body>
</html>

