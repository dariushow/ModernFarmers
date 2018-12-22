<?php 

require '../controllers/connect.php';


	$id = $_GET['id'];
	$sql = "SELECT * FROM items WHERE id = '$id'";
	$item = mysqli_fetch_assoc(mysqli_query($conn, $sql));
	extract($item);


$pageTitle = "edit Item";
require_once("../partials/start_body.php");
if(!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 2)){
	header(("Location: error.php"));
}
require_once("../partials/navbar.php");


	?>

<?php require_once("../controllers/get_categories.php");  ?>	
					


					 

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-8 offset-lg-2">
			<form class="mt-5" method="POST" action="../controllers/process_edit_item.php?id=<?php echo $id ?>" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">Name:</label>
				<input class="form-control" type="text" name="name" id="name" required value="<?php echo $item['item_name'] ?>">
				</div>
				<label for="price">Price:</label>
				<div class="form-group">
				<input class="form-control" type="number" min="1" name="price" id="price" value="<?php echo $item['price'] ?>">
				</div>
				<label for="description">Description:</label>
				<div class="form-group">
				<textarea class="form control" rows="5" cols="115" name="description" id="description" ><?php echo $item['description'] ?></textarea>
				</div>
				
				<div class="form-group">
					<label for="category_id">Category:</label>
				<select class="form-control" name="category_id" id="category_id">
					<?php 
					$sql= "SELECT * FROM categories";
					$categories = mysqli_query($conn, $sql); 
					
					foreach($categories as $category) {
						extract($category);
						if ($category['id'] === $category_id) {
							echo "<option selected value='".$category['id']."'>".$category['name']."</option>";
						} else {
						echo "<option value='".$category['id']."'>".$category['name']."</option>";
					}
				}

					 ?>
					
					</div>
				</select>
				<div class="form-group"></div>
				<input class="form-control-file" type="file" name="image" id="image">
				<button class="btn btn-primary mt-5" type="submit">SUBMIT</button>
				</div>

			</form>
		</div>
	</div>

</div>