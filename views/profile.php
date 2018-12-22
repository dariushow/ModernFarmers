<?php 
$pageTitle = "Profile";
require_once("../partials/start_body.php");
require_once("../partials/navbar.php");
require_once("../controllers/connect.php");


?>

<div class="container">
	<div class="row">
		<div class="col-lg-3">
			<div class="list-group" id="list-tab" role="tab-list">
				<a href="#profile" class="list-group-item" data-toggle="list" role="tab">User Information</a>
				<a href="#history" class="list-group-item" data-toggle="list" role="tab">Order History</a>
			</div>
		</div>

		<div class="col-lg-7">
			<div class="tab-content">

				<div class="tab-pane" id="profile" role="tabpanel">
					<h3>User Information</h3>
					<span id="update_status"></span>
					<form>
						<div class="form-group">
							<input id="user_id" type="text" name="user_id" class="form-control" value="<?php echo $_SESSION['user']['id']; ?>" hidden readonly>
						</div>

						<div class="form-group">
							<label for="username">Username:</label>
							<input type="text" name="username" class="form-control" id="username" value="<?php echo $_SESSION['user']['username']; ?>">
							<span class="validation"></span>
						</div>

						<div class="form-group">
							<label for="firstname">First Name:</label>
							<input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo $_SESSION['user']['first_name']; ?>">
							<span class="validation"></span>
						</div>

						<div class="form-group">
							<label for="lastname">Last Name:</label>
							<input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo $_SESSION['user']['last_name'] ?>">
							<span class="validation"></span>
						</div>

						<div class="form-group">
							<label for="email">Email:</label>
							<input type="text" name="emai" id="email" class="form-control" value="<?php echo $_SESSION['user']['email'] ?>">
							<span class="validation"></span>
						</div>

						<div class="form-group">
							<label for="address">Address:</label>
							<input type="text" name="home_address" id="home_address" class="form-control" value="<?php echo $_SESSION['user']['home_address'] ?>">
							<span class="validation"></span>
						</div>

						<div class="form-group">
							<label for="old_password">Old Password:</label>
							<input type="text" name="old_password" id="old_password" class="form-control">
							<span class="validation"></span>
						</div>

						<div class="form-group">
							<label for="new_password">New Password:</label>
							<input type="text" name="new_password" id="new_password" class="form-control">
							<span class="validation"></span>
						</div>

						<div class="form-group">
							<label for="confirm_password">Confirm New Password:</label>
							<input type="text" name="confirm_password" id="confirm_password" class="form-control">
							<span class="validation"></span>
						</div>

						<button type="button" class="btn btn-danger" id="update_user">Update</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
require_once("../partials/end_body.php");


?>