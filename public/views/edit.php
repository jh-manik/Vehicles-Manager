<?php require_once('../../app/classes/VehicleManager.php'); ?>
<?php require_once('../../app/include/functions.php'); ?>
<?php require_once('../Controllers/EditController.php'); ?>
<?php require('header.php'); ?>

<main class="app-body add-page edit-page py-2 pb-5">
	<div class="container">
		<div class="title-container py-3">
			<h2 class="text-center text-primary display-5">Edit Vehicle</h2>
		</div> <!-- title-container -->

		<div class="add-form edit-form p-5 mx-auto shadow">
			<form method="post">
				<div class="mb-4">
					<label for="name" class="form-label">Vehicle Name</label>
					<input type="text" name="name" class="form-control" value="<?= dataFilter($vehicle['name']) ?>" required>
				</div>

				<div class="mb-4">
					<label for="type" class="form-label">Vehicle Type</label>
					<input type="text" name="type" class="form-control" value="<?= dataFilter($vehicle['type']) ?>" required>
				</div>

				<div class="mb-4">
					<label for="price" class="form-label">Price</label>
					<input type="number" name="price" class="form-control" value="<?= dataFilter($vehicle['price']) ?>" required>
				</div>

				<div class="mb-4">
					<label for="image" class="form-label">Image URI</label>
					<input type="text" name="image" class="form-control" value="<?= dataFilter($vehicle['image']) ?>" required>
				</div>

				<div class="submit-btn">
					<button type="submit" class="btn btn-primary py-2 px-4">Edit Vehicle</button>
				</div>
			</form>
		</div> <!-- vehicle-adding-form -->
	</div> <!-- end of container -->
</main> <!-- end of add Page -->

<?php require('footer.php'); ?>