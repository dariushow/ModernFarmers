<?php 
$pageTitle = "Add item";
require_once("../partials/start_body.php");
require_once("../partials/navbar.php");
require_once("../controllers/connect.php");


?>

<div class="col-lg-8 offset-lg-2">
	
	<form method="post" action="../controllers/process_new_item.php" enctype="multipart/form-data">
		<div class="form-group">
		Name:<input class="form-control" type="text" name="name" required>
		</div>

		<div class="form-group">
		Price:<input class="form-control" type="number" min="1" name="price">
		</div>

		

		<textarea rows="5" name="description"></textarea>

	<div class="form-group">
		<select class="form-control" name="category_id">
			<?php 
			$sql= "SELECT * FROM categories";
			$categories = mysqli_query($conn, $sql); 
			
			foreach($categories as $category) {
				extract($category);
				echo "<option value='$id'>$name</option>";
			}


			 ?>
			
		</select>
		</div>
		<div class="form-group">
		<input class="form-control-file" type="file" name="image" required>
		</div>

<div class="form-group">
		<button class="btn btn-success mt-2">Submit</button>
		</div>

	</form>
</div>